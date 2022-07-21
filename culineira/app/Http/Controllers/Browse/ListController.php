<?php

namespace App\Http\Controllers\Browse;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

use App\Models\user;
use App\Models\recipe;
use App\Models\list_recipe;
use App\Models\list_rel;

class ListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $user = user::all();
        $recipe = recipe::all();
        $listId = DB::table('list')->where('id', $id)->get();
        $recipeInList = DB::table('recipes')
            ->select('recipes.user_id as user_id', 'recipes.recipe_url as recipe_url',
                'recipes.recipe_country as recipe_country', 'recipes.recipe_name as recipe_name',
                'recipes.recipe_level as recipe_level', 'recipes.recipe_type as recipe_type',
                'recipes.recipe_time_spend as recipe_time_spend','recipes.recipe_main_ing as recipe_main_ing',
                'recipes.recipe_calorie as recipe_calorie', 'recipes.id as recipe_id')
            ->join('list-rel', 'list-rel.recipe_id', '=', 'recipes.id')
            ->join('list', 'list-rel.list_id', '=', 'list.id')
            ->join('users', 'list.user_id', '=', 'users.id')
            ->where('list-rel.list_id', $id)
            ->orderBy('list-rel.updated_at', 'ASC')
            ->get();

        return view ('kitchen.browse-list.index')
            ->with('listId', $listId)
            ->with('recipe', $recipe)
            ->with('recipeInList', $recipeInList)
            ->with('user', $user);
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
    public function addRecipeToList(Request $request, recipe $recipe, $id)
    {
        if($request->has('recipe_id')){
            $recipe_count = count($request-> recipe_id);
            for($i=0; $i < $recipe_count; $i++){
                list_rel::create([
                    'list_id' => $id,
                    'recipe_id' => $request-> recipe_id[$i],
                    'created_at' => date("Y-m-d h:m:i"),
                    'updated_at' => date("Y-m-d h:m:i"),
                ]);
            }

            if(count($request-> recipe_id) > 1){
                return redirect('/kitchen/browse-list/'.$id)->with('success_message', 'Successfully added '.count($request->recipe_id).' Recipes to '.$request->list_name.' list!');
            } else {
                $check = DB::table('recipes')->where('id', $request->recipe_id)->get();
                foreach($check as $c){
                    $recipe_name = $c->recipe_name;
                }
                return redirect('/kitchen/browse-list/'.$id)->with('success_message', 'Successfully added '.$recipe_name.' to '.$request->list_name.' list!');
            }
        } else {
            return redirect('/kitchen/browse-list/'.$id)->with('failed_message', 'Nothing has changed. You must select min 1 recipe');
        }
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        list_recipe::where('id', $id)->update([
            'list_name' => $request-> list_name,
            'list_description' => $request-> list_description,
            'updated_at' => date("Y-m-d h:m:i"),
        ]);

        return redirect()->back()->with('success_message', 'List Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if($request->validation == $request->list_name){
            list_recipe::destroy($id);
            DB::table('list-rel')->where('list_id', $id)->delete();
            return redirect('/kitchen')->with('success_message', 'List deleted!');
        } else {
            return redirect()->back()->with('failed_message', 'Delete failed, please input same list name!');
        }
    }

    public function deleteRecipeList(Request $request, $id)
    {
        if($request->has('recipe_id')){
            $recipe_count = count($request-> recipe_id);
            for($i=0; $i < $recipe_count; $i++){
                DB::table('list-rel')->where('recipe_id', $request-> recipe_id[$i])->where('list_id', $id)->delete();
            }
            return redirect()->back()->with('success_message', $recipe_count.' Recipe removed!');
        } else {
            return redirect()->back()->with('failed_message', 'Nothing has changed, please select min 1 list');
        }
    }

    public function starred(Request $request, $id)
    {
        list_recipe::where('id', $id)->update([
            'list_status' => $request->list_status,
            'updated_at' => date("Y-m-d h:m:i"),
        ]);

        return redirect()->back()->with('success_message', 'List status changed');
    }
}
