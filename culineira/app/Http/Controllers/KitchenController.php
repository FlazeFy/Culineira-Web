<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\recipe;
use App\Models\user;
use App\Models\list_recipe;
use App\Models\list_rel;
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

        return view ('KitchenPage')
            ->with('recipe', $recipe)
            ->with('recipeInList', $recipeInList)
            ->with('user', $user)
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
