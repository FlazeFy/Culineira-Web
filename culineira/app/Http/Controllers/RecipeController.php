<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\recipe;
use App\Models\user;

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
        return view ('RecipePage')->with('recipe', $recipe)->with('user', $user);
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
        $image->storeAs('public/assets/image/recipes', $image->hashName());

        //Recipe data.
        recipe::create([
            'user_id' => 1, //For testing
            'recipe_name' => $request-> recipe_name,
            'recipe_calorie' => $request-> recipe_calorie,
            'recipe_desc' => $request-> recipe_desc,
            'recipe_country' => $request-> recipe_country,
            'recipe_type' => $request-> recipe_type,
            'recipe_time_spend' => $request-> recipe_time_spend,
            'recipe_main_ing' => $request->recipe_main_ing,
            'recipe_level' => $request->recipe_level,
            'recipe_visibility' => $request->recipe_visibility,
            'created_at' => date("Y-m-d h:m:i"),
            'updated_at' => date("Y-m-d h:m:i"),
        ]);
       return redirect('/recipe')->with('flash_message', 'Recipe added!');
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

        return redirect('/recipe')->with('flash_message', 'Recipe updated!');
    }
    public function updateVisibility(Request $request, $id)
    {
        recipe::where('id', $id)->update([
            'recipe_visibility' => $request-> visibility,
            'updated_at' => date("Y-m-d h:m:i"),
        ]);

        return redirect('/recipe')->with('flash_message', 'Recipe updated!');
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
            recipe::destroy($id);
            return redirect('/recipe')->with('flash_message', 'Recipe deleted!');
        } else {
            return redirect('/recipe')->with('flash_message', 'Delete failed, please input same recipe name!');

        }
    }
}
