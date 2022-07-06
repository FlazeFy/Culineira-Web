<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\recipe;
use App\Models\comment;
use App\Models\user;
use App\Models\steps;
use App\Models\likes;
use App\Models\ingredients;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class DetailController extends Controller
{
    /**
     * Display a filterRecipe of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $user = user::all();
        $recipe = recipe::all();
        $recipeId = DB::table('recipes')->where('id', $id)->get();
        $comment = DB::table('comment')->where('recipe_id', $id)->orderBy('created_at', 'ASC')->get();
        $steps = DB::table('steps')->orderBy('id', 'ASC')->get();
        $ingredients = ingredients::all();

        //You may also like.
        foreach($recipeId as $ri){
            $country = $ri->recipe_country;
            $level = $ri->recipe_level;
            $name = $ri->recipe_name;
            $ing = $ri->recipe_main_ing;
        }
        $mayLikeRecipe = DB::table('recipes')->where('recipe_country', $country)->where('recipe_level', $level)->get();

        //Similar recipe.
        //Split recipe_name into separate word.
        $name_explode = explode(" ", $name);
        $ing_explode = explode(", ", $ing);

        $filterRecipe = DB::table('recipes');
        for($i=0; $i < count($name_explode); $i++){
            $filterRecipe->orWhere('recipe_name', 'LIKE','%'.$name_explode[$i].'%');
        }
        for($j=0; $j < count($ing_explode); $j++){
            $filterRecipe->orWhere('recipe_main_ing', 'LIKE','%'.$ing_explode[$j].'%');
        }
        $results = $filterRecipe->get();

        //Get user id
        $users_id = DB::table('users')->where('username', session()->get('usernameKey'))->get();
        foreach($users_id as $u){
            $id_user = $u->id;
        }
        //Retrive likes by recipe id and user id
        $likesUser = DB::table('likes')->where('recipe_id', $id)->where('users_id', $id_user)->get();
        $likesId = DB::table('likes')->where('recipe_id', $id)->get();

        return view ('DetailPage')
            ->with('recipeId', $recipeId)
            ->with('recipe', $recipe)
            ->with('comment', $comment)
            ->with('user', $user)
            ->with('steps', $steps)
            ->with('ingredients', $ingredients)
            ->with('mayLikeRecipe', $mayLikeRecipe)
            ->with('similar', $results)
            ->with('likesUser', $likesUser)
            ->with('likesId', $likesId);
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
    public function store(Request $request)
    {
        //
    }

    public function likes($id)
    {
        $users_id = DB::table('users')->where('username', session()->get('usernameKey'))->get();
        foreach($users_id as $u){
            $id_user = $u->id;
        }

        //Check if recipe is liked or not
        $check = DB::table('likes')->where('recipe_id', $id)->where('users_id', $id_user)->get();
        if($check->count() == 0){
            //Likes.
            likes::create([
                'recipe_id' => $id,
                'users_id' => $id_user,
                'created_at' => date("Y-m-d h:m:i"),
                'updated_at' => date("Y-m-d h:m:i"),
            ]);
            return redirect()->route('detail', ['id' => $id])->with('flash_message', 'Recipe liked!');;
        } else {
            //Disliked.
            foreach($check as $c){
                $id_likes = $c->id;
            }
            likes::destroy($id_likes);
            return redirect()->route('detail', ['id' => $id])->with('flash_message', 'Recipe disliked!');;
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
    public function sendComment(Request $request, $id)
    {
        $users_id = DB::table('users')->where('username', session()->get('usernameKey'))->get();
        foreach($users_id as $u){
            $id_user = $u->id;
        }

        comment::create([
            'recipe_id' => $id,
            'steps_id' => $request->steps_id,
            'users_id' => $id_user,
            'comment_body' => $request->comment_body,
            'comment_image' => 'null',  //For testing
            'created_at' => date("Y-m-d h:m:i"),
            'updated_at' => date("Y-m-d h:m:i"),
        ]);

        return redirect()->route('detail', ['id' => $id]);
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
