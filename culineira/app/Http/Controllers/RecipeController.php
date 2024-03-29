<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\recipe;
use App\Models\user;
use App\Models\steps;
use App\Models\activity;
use App\Models\ingredients;
use App\Models\follower;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class RecipeController extends Controller
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
        $steps = steps::all();
        $ingredients = ingredients::all();

        //Show user's groups.
        $groupId = DB::table('groups_rel')
            ->select('groups.id as id', 'groups_name', 'groups_description', 'groups_image' ,'groups.created_at as created_at', 'groups.groups_type as groups_type', 'groups.users_id as founder_id')
            ->join('groups', 'groups.id', '=', 'groups_rel.groups_id')
            ->join('users', 'users.id', '=', 'groups_rel.users_id')
            ->where('username', session()->get('usernameKey'))
            ->orderBy('groups_rel.created_at', 'ASC')->get();

        //Compare recipes
        $compare1 = DB::table('recipes')
            ->where('id', session()->get('compare1Key'))->get();
        $compare2 = DB::table('recipes')
            ->where('id', session()->get('compare2Key'))->get();

        $likesId1 = DB::table('likes')
            ->where('recipe_id', session()->get('compare1Key'))->get();
        $likesId2 = DB::table('likes')
            ->where('recipe_id', session()->get('compare2Key'))->get();
            
        $favorite = DB::table('likes')
            ->select('recipes.id', 'users.username', 'recipe_name', 'recipe_calorie', 'recipe_desc', 'recipe_country', 'recipe_type', 'recipe_time_spend', 'recipe_main_ing', 'recipe_level', 'recipes.created_at', 'recipes.updated_at', 'recipe_visibility', 'recipe_url', 'recipe_video', 'users.image_url as user_image')
            ->join('recipes', 'recipes.id', '=', 'likes.recipe_id')
            ->join('users', 'users.id', '=', 'likes.users_id')
            ->where('users_id', session()->get('idKey'))->get();

        //For sidebar mini profile
        $following = DB::table('follower')
            ->where('user_id_1', session()->get('idKey'))->get();

        $followers = DB::table('follower')
            ->where('user_id_2', session()->get('idKey'))->get();

        $myrecipes = DB::table('recipes')
            ->where('user_id', session()->get('idKey'))->get();

        //Set active nav
        session()->put('active_nav', 'recipe');

        return view ('recipe.index')
            ->with('recipe', $recipe)
            ->with('user', $user)
            ->with('steps', $steps)
            ->with('groupId', $groupId)
            ->with('likesId1', $likesId1)
            ->with('likesId2', $likesId2)
            ->with('following', $following)
            ->with('followers', $followers)
            ->with('favorite', $favorite)
            ->with('myrecipes', $myrecipes)
            ->with('ingredients', $ingredients)
            ->with('compare1', $compare1)
            ->with('compare2', $compare2);
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
        //validate image
        $this->validate($request, [
            'recipe_image'     => 'required|image|mimes:jpeg,png,jpg|max:5000',
        ]);

        //upload image
        $image = $request->file('recipe_image');
        $image->storeAs('public', $image->hashName());

        //Recipe data.
        $id_recipe = recipe::create([
            'user_id' => session()->get('idKey'), //For testing
            'recipe_name' => $request-> recipe_name,
            'recipe_calorie' => $request-> recipe_calorie,
            'recipe_desc' => $request-> recipe_desc,
            'recipe_country' => $request-> recipe_country,
            'recipe_type' => $request-> recipe_type,
            'recipe_time_spend' => $request-> recipe_time_spend,
            'recipe_main_ing' => $request->recipe_main_ing,
            'recipe_level' => $request->recipe_level,
            'recipe_visibility' => $request->recipe_visibility,
            'recipe_url' => $image->hashName(),
            'recipe_video' => "null",
            'created_at' => date("Y-m-d h:m:i"),
            'updated_at' => date("Y-m-d h:m:i"),
        ]);

        //Activity record
        activity::create([
            'users_id' => session()->get('idKey'),
            'activity_from' => $id_recipe->id,
            'activity_type' => 'recipes',
            'activity_description' => 'created a recipe called "'.$request-> recipe_name.'"',
            'created_at' => date("Y-m-d h:m:i"),
            'updated_at' => date("Y-m-d h:m:i"),
        ]);

        return redirect('/recipe')->with('success_message', 'Recipe added!');
    }

    public function storeFull(Request $request)
    {
        //validate image
        $this->validate($request, [
            'recipe_image'     => 'required|image|mimes:jpeg,png,jpg|max:5000',
        ]);

        //upload image
        $image = $request->file('recipe_image');
        $image->storeAs('public', $image->hashName());

        if($request->hasFile('recipe_video')){
            //validate image
            $this->validate($request, [
                'recipe_video'     => 'mimes:mp4|max:50000',
            ]);

            //upload image
            $video = $request->file('recipe_video');
            $video->storeAs('public', $video->hashName());
            $videoURL = $video->hashName();
        } else {
            $videoURL = "null";
        }

        //Recipe data.
        $recipeData = recipe::create([
            'user_id' => session()->get('idKey'), //For testing
            'recipe_name' => $request-> recipe_name,
            'recipe_calorie' => $request-> recipe_calorie,
            'recipe_desc' => $request-> recipe_desc,
            'recipe_country' => $request-> recipe_country,
            'recipe_type' => $request-> recipe_type,
            'recipe_time_spend' => $request-> recipe_time_spend,
            'recipe_main_ing' => $request->recipe_main_ing,
            'recipe_level' => $request->recipe_level,
            'recipe_visibility' => $request->recipe_visibility,
            'recipe_url' => $image->hashName(),
            'recipe_video' => $videoURL,
            'created_at' => date("Y-m-d h:m:i"),
            'updated_at' => date("Y-m-d h:m:i"),
        ]);

        //Ingredients data.
        $name_count = count($request-> ingredients_name);
        for($j=0; $j < $name_count; $j++){
            ingredients::create([
                'recipe_id' => $recipeData->id,
                'ingredients_name' => $request-> ingredients_name[$j],
                'ingredients_vol' => $request-> ingredients_vol[$j],
                'ingredients_type' => $request-> ingredients_type[$j],
                'created_at' => date("Y-m-d h:m:i"),
                'updated_at' => date("Y-m-d h:m:i"),
            ]);
        }

        //Steps data.
        $body_count = count($request-> steps_body);
		for($i=0; $i < $body_count; $i++){
            if($request->hasFile('steps_image.'.$i)){
                //validate image
                $this->validate($request, [
                    'steps_image.'.$i     => 'required|image|mimes:jpeg,png,jpg|max:5000',
                ]);

                //upload image
                $image = $request->file('steps_image.'.$i);
                $image->storeAs('public', $image->hashName());
                $imageURL = $image->hashName();
            } else {
                $imageURL = "null";
            }

            steps::create([
                'recipe_id' => $recipeData->id,
                'steps_body' => $request-> steps_body[$i],
                'steps_type' => $request-> steps_type[$i],
                'steps_image' => $imageURL,
                'created_at' => date("Y-m-d h:m:i"),
                'updated_at' => date("Y-m-d h:m:i"),
            ]);
        }

        //Activity record
        activity::create([
            'users_id' => session()->get('idKey'),
            'activity_from' => $recipeData->id,
            'activity_type' => 'recipes',
            'activity_description' => 'created a recipe called "'.$request-> recipe_name.'"',
            'created_at' => date("Y-m-d h:m:i"),
            'updated_at' => date("Y-m-d h:m:i"),
        ]);

        return redirect('/recipe')->with('success_message', 'Recipe added!');
    }

    public function storeDependencies(Request $request)
    {
        //Ingredients data.
        $name_count = count($request-> ingredients_name);
        for($j=0; $j < $name_count; $j++){
            ingredients::create([
                'recipe_id' => $request-> recipe_id,
                'ingredients_name' => $request-> ingredients_name[$j],
                'ingredients_vol' => $request-> ingredients_vol[$j],
                'ingredients_type' => $request-> ingredients_type[$j],
                'created_at' => date("Y-m-d h:m:i"),
                'updated_at' => date("Y-m-d h:m:i"),
            ]);
        }

        //Steps data.
        $body_count = count($request-> steps_body);
		for($i=0; $i < $body_count; $i++){
            if($request->hasFile('steps_image.'.$i)){
                //validate image
                $this->validate($request, [
                    'steps_image.'.$i     => 'required|image|mimes:jpeg,png,jpg|max:5000',
                ]);

                //upload image
                $image = $request->file('steps_image.'.$i);
                $image->storeAs('public', $image->hashName());
                $imageURL = $image->hashName();
            } else {
                $imageURL = "null";
            }

            steps::create([
                'recipe_id' => $request-> recipe_id,
                'steps_body' => $request-> steps_body[$i],
                'steps_type' => $request-> steps_type[$i],
                'steps_image' => $imageURL,
                'created_at' => date("Y-m-d h:m:i"),
                'updated_at' => date("Y-m-d h:m:i"),
            ]);
        }

        //Get recipe name
        $recipes_name = DB::table('recipes')->where('id', $request-> recipe_id)->get();
        foreach($recipes_name as $r){
            $recipeName = $r->recipe_name;
        }

        //Activity record
        activity::create([
            'users_id' => session()->get('idKey'),
            'activity_from' => $request-> recipe_id,
            'activity_type' => 'recipes',
            'activity_description' => 'modified "'.$recipeName.'" recipe dependencies',
            'created_at' => date("Y-m-d h:m:i"),
            'updated_at' => date("Y-m-d h:m:i"),
        ]);

        return redirect('/recipe')->with('success_message', 'Dependencies added!');
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
        $recipeId = DB::table('recipes')->where('id', $id)->get();
        if($request->hasFile('recipe_url')){
            //Get old image url.
            foreach($recipeId as $r){
                $old_image = $r->recipe_url;
            }

            //Validate image.
            $this->validate($request, [
                'recipe_url'     => 'required|image|mimes:jpeg,png,jpg|max:5000',
            ]);

            //Upload image.
            $new_image = $request->file('recipe_url');
            $new_image->storeAs('public', $new_image->hashName());
            $imageURL = $new_image->hashName();

            //Delete old image if new image is uploaded.
            if($request->file('recipe_url')->isValid()){
                Storage::delete('public/'.$old_image);
            }

            recipe::where('id', $id)->update([
                'recipe_calorie' => $request-> recipe_calorie,
                'recipe_desc' => $request-> recipe_desc,
                'recipe_country' => $request-> recipe_country,
                'recipe_type' => $request-> recipe_type,
                'recipe_time_spend' => $request-> recipe_time_spend,
                'recipe_main_ing' => $request->recipe_main_ing,
                'recipe_level' => $request->recipe_level,
                'recipe_url' => $imageURL,
                'updated_at' => date("Y-m-d h:m:i"),
            ]);
        } else {
            recipe::where('id', $id)->update([
                'recipe_calorie' => $request-> recipe_calorie,
                'recipe_desc' => $request-> recipe_desc,
                'recipe_country' => $request-> recipe_country,
                'recipe_type' => $request-> recipe_type,
                'recipe_time_spend' => $request-> recipe_time_spend,
                'recipe_main_ing' => $request->recipe_main_ing,
                'recipe_level' => $request->recipe_level,
                'updated_at' => date("Y-m-d h:m:i"),
            ]);
        }

        //Get recipe name
        $recipes_name = DB::table('recipes')->where('id', $id)->get();
        foreach($recipes_name as $r){
            $recipeName = $r->recipe_name;
        }

        //Activity record
        activity::create([
            'users_id' => session()->get('idKey'),
            'activity_from' => $id,
            'activity_type' => 'recipes',
            'activity_description' => 'modified "'.$recipeName.'" recipe data',
            'created_at' => date("Y-m-d h:m:i"),
            'updated_at' => date("Y-m-d h:m:i"),
        ]);

        return redirect('/recipe')->with('success_message', 'Recipe updated!');
    }
    public function updateVisibility(Request $request, $id)
    {
        recipe::where('id', $id)->update([
            'recipe_visibility' => $request-> visibility,
            'updated_at' => date("Y-m-d h:m:i"),
        ]);

        //Get recipe name
        $recipes_name = DB::table('recipes')->where('id', $id)->get();
        foreach($recipes_name as $r){
            $recipeName = $r->recipe_name;
        }

        //Activity record
        activity::create([
            'users_id' => session()->get('idKey'),
            'activity_from' => $id,
            'activity_type' => 'recipes',
            'activity_description' => 'modified "'.$recipeName.'" recipe visibility',
            'created_at' => date("Y-m-d h:m:i"),
            'updated_at' => date("Y-m-d h:m:i"),
        ]);

        return redirect('/recipe')->with('success_message', 'Recipe visibility changed to '.$request->visibility.'');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy(Request $request, $id)
    {
        if($request->validation == $request->recipe_name){
            //Get recipe name
            $recipes_name = DB::table('recipes')->where('id', $id)->get();
            foreach($recipes_name as $r){
                $recipeName = $r->recipe_name;
            }

            //Activity record
            activity::create([
                'users_id' => session()->get('idKey'),
                'activity_from' => $id,
                'activity_type' => 'recipes',
                'activity_description' => 'deleted "'.$recipeName.'" recipe',
                'created_at' => date("Y-m-d h:m:i"),
                'updated_at' => date("Y-m-d h:m:i"),
            ]);

            recipe::destroy($id);

            return redirect('/recipe')->with('success_message', 'Recipe deleted!');
        } else {
            return redirect('/recipe')->with('failed_message', 'Delete failed, please input same recipe name!');

        }
    }
}
