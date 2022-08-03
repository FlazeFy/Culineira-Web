<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\recipe;
use App\Models\user;
use App\Models\shelf;
use App\Models\activity;
use App\Models\list_recipe;
use App\Models\list_rel;
use App\Models\follower;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class KitchenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = user::all();
        $recipe = recipe::all();
        $recipeInList = DB::table('recipes')
            ->join('list-rel', 'list-rel.recipe_id', '=', 'recipes.id')
            ->join('list', 'list-rel.list_id', '=', 'list.id')
            ->join('users', 'list.user_id', '=', 'users.id')
            ->where('username', session()->get('usernameKey'))
            ->orderBy('list-rel.updated_at', 'ASC')
            ->get();

        $list = DB::table('list')
            ->select('list.id', 'list_name', 'list_name', 'list_status', 'list_description', 'list.created_at as created_at', 'list.updated_at as updated_at')
            ->join('users', 'users.id', '=', 'list.user_id')
            ->where('username', session()->get('usernameKey'))
            ->orderBy('list.updated_at', 'ASC')
            ->get();

        $shelf = DB::table('shelf')
            ->select('shelf.id as id', 'item_name', 'item_description', 'item_qty', 'shelf.created_at as created_at', 'shelf.updated_at as updated_at')
            ->join('users', 'users.id', '=', 'shelf.users_id')
            ->where('username', session()->get('usernameKey'))
            ->orderBy('shelf.updated_at', 'ASC')
            ->get();

        //For sidebar mini profile
        $following = DB::table('follower')
            ->where('user_id_1', session()->get('idKey'))->get();

        $followers = DB::table('follower')
            ->where('user_id_2', session()->get('idKey'))->get();

        $myrecipes = DB::table('recipes')
            ->where('user_id', session()->get('idKey'))->get();

        return view ('kitchen.index')
            ->with('recipe', $recipe)
            ->with('recipeInList', $recipeInList)
            ->with('user', $user)
            ->with('shelf', $shelf)
            ->with('following', $following)
            ->with('followers', $followers)
            ->with('myrecipes', $myrecipes)
            ->with('list', $list);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addRecipeToList(Request $request, recipe $recipe)
    {
        if($request->has('recipe_id')){
            $recipe_count = count($request-> recipe_id);
            for($i=0; $i < $recipe_count; $i++){
                list_rel::create([
                    'list_id' => $request-> list_id,
                    'recipe_id' => $request-> recipe_id[$i],
                    'created_at' => date("Y-m-d h:m:i"),
                    'updated_at' => date("Y-m-d h:m:i"),
                ]);
            }

            if(count($request-> recipe_id) > 1){
                return redirect('/kitchen')->with('success_message', 'Successfully added '.count($request->recipe_id).' Recipes to '.$request->list_name.' list!');
            } else {
                $check = DB::table('recipes')->where('id', $request->recipe_id)->get();
                foreach($check as $c){
                    $recipe_name = $c->recipe_name;
                }
                return redirect('/kitchen')->with('success_message', 'Successfully added '.$recipe_name.' to '.$request->list_name.' list!');
            }
        } else {
            return redirect('/kitchen')->with('failed_message', 'Nothing has changed. You must select min 1 recipe');
        }
    }

    public function addNewList(Request $request, recipe $recipe)
    {
        if($request->has('recipe_id')){
            //Create list with recipe
            $list = list_recipe::create([
                'user_id' => session()->get('idKey'),
                'list_name' => $request-> list_name,
                'list_status' => 'null', //For now
                'list_description' => $request-> list_description,
                'created_at' => date("Y-m-d h:m:i"),
                'updated_at' => date("Y-m-d h:m:i"),
            ]);

            //Activity record
            activity::create([
                'users_id' => session()->get('idKey'),
                'activity_from' => $list->id,
                'activity_type' => 'list',
                'activity_description' => 'created a list called "'.$request-> list_name.'"',
                'created_at' => date("Y-m-d h:m:i"),
                'updated_at' => date("Y-m-d h:m:i"),
            ]);

            $recipe_count = count($request-> recipe_id);
            for($i=0; $i < $recipe_count; $i++){
                list_rel::create([
                    'list_id' => $list->id,
                    'recipe_id' => $request-> recipe_id[$i],
                    'created_at' => date("Y-m-d h:m:i"),
                    'updated_at' => date("Y-m-d h:m:i"),
                ]);
            }

            if(count($request-> recipe_id) > 1){
                return redirect('/kitchen')->with('success_message', 'Successfully added new '.$request-> list_name.' list, with '.count($request->recipe_id).' Recipes');
            } else {
                $check = DB::table('recipes')->where('id', $request->recipe_id)->get();
                foreach($check as $c){
                    $recipe_name = $c->recipe_name;
                }
                return redirect('/kitchen')->with('success_message', 'Successfully added new '.$request-> list_name.' list, with '.$recipe_name.' Recipes');
            }
        } else {
            //Create list only
            $list = list_recipe::create([
                'user_id' => session()->get('idKey'),
                'list_name' => $request-> list_name,
                'list_status' => 'null', //For now
                'list_description' => $request-> list_description,
                'created_at' => date("Y-m-d h:m:i"),
                'updated_at' => date("Y-m-d h:m:i"),
            ]);

            //Activity record
            activity::create([
                'users_id' => session()->get('idKey'),
                'activity_from' => $list->id,
                'activity_type' => 'list',
                'activity_description' => 'created a list called "'.$request-> list_name.'"',
                'created_at' => date("Y-m-d h:m:i"),
                'updated_at' => date("Y-m-d h:m:i"),
            ]);
            return redirect('/kitchen')->with('success_message', 'Successfully added new '.$request-> list_name.' list');
        }
    }

    public function addItemShelf(Request $request)
    {
        //Create item
        $item = shelf::create([
            'users_id' => session()->get('idKey'),
            'item_name' => $request-> item_name,
            'item_description' => $request-> item_description,
            'item_qty' => $request-> item_qty,
            'created_at' => date("Y-m-d h:m:i"),
            'updated_at' => date("Y-m-d h:m:i"),
        ]);

        //Activity record
        activity::create([
            'users_id' => session()->get('idKey'),
            'activity_from' => $item->id,
            'activity_type' => 'shelf',
            'activity_description' => 'added a new item to shelf called "'.$request-> item_name.'"',
            'created_at' => date("Y-m-d h:m:i"),
            'updated_at' => date("Y-m-d h:m:i"),
        ]);

        return redirect('/kitchen')->with('success_message', 'Successfully added new item '.$request-> item_name.' to shelf');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateItemShelf(Request $request, $id)
    {
        shelf::where('id', $id)->update([
            'item_name' => $request-> item_name,
            'item_description' => $request-> item_description,
            'item_qty' => $request-> item_qty,
            'updated_at' => date("Y-m-d h:m:i"),
        ]);

        //Activity record
        activity::create([
            'users_id' => session()->get('idKey'),
            'activity_from' => $id,
            'activity_type' => 'shelf',
            'activity_description' => 'updated "'.$request-> item_name.'" item from shelf',
            'created_at' => date("Y-m-d h:m:i"),
            'updated_at' => date("Y-m-d h:m:i"),
        ]);

        return redirect('/kitchen')->with('success_message', 'Item updated!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteList(Request $request)
    {
        if($request->has('list_id')){
            $list_count = count($request-> list_id);
            for($i=0; $i < $list_count; $i++){
                list_recipe::destroy($request-> list_id[$i]);
                DB::table('list-rel')->where('list_id', $request-> list_id[$i])->delete();
            }
            return redirect('/kitchen')->with('success_message', $list_count.' List deleted!');
        } else {
            return redirect()->back()->with('failed_message', 'Nothing has changed, please select min 1 list');
        }
    }

    public function deleteItemShelf(Request $request)
    {
        if($request->has('shelf_id')){
            $item_count = count($request->shelf_id);
            for($i=0; $i < $item_count; $i++){
                shelf::destroy($request-> shelf_id[$i]);
            }

            return redirect('/kitchen')->with('success_message', $item_count.' item deleted!');
        } else {
            return redirect()->back()->with('failed_message', 'Nothing has changed, please select min 1 item');
        }
    }
}
