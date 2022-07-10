<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\recipe;
use App\Models\comment;
use App\Models\user;
use App\Models\steps;
use App\Models\likes;
use App\Models\ingredients;
use App\Models\socmed;
use App\Models\classroom;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Route;

class ProfileController extends Controller
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

        //Show public recipe in profile.
        $recipeId = DB::table('recipes')
            ->join('users', 'users.id', '=', 'recipes.user_id')
            ->where('username', session()->get('usernameKey'))
            ->where('recipe_visibility', 'Public')
            ->orderBy('recipes.updated_at', 'ASC')->get();

        //Show classroom in profile.
        $classId = DB::table('classroom')
            ->join('users', 'users.id', '=', 'classroom.users_id')
            ->where('username', session()->get('usernameKey'))
            ->orderBy('classroom.updated_at', 'ASC')->get();

        //Show social media in profile.
        $socmedId = DB::table('socmed')
            ->join('users', 'users.id', '=', 'socmed.users_id')
            ->where('username', session()->get('usernameKey'))->get();

        //Show user login data in profile.
        $userId = DB::table('users')
            ->where('username', session()->get('usernameKey'))->get();

        return view ('ProfilePage')
            ->with('userId', $userId)
            ->with('recipeId', $recipeId)
            ->with('classId', $classId)
            ->with('recipe', $recipe)
            ->with('user', $user)
            ->with('socmedId', $socmedId);
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
    public function updateSocmed(Request $request, $id)
    {
        socmed::where('id', $id)->update([
            'socmed_facebook' => $request-> socmed_facebook,
            'socmed_youtube' => $request-> socmed_youtube,
            'socmed_tiktok' => $request-> socmed_tiktok,
            'socmed_instagram' => $request-> socmed_instagram,
            'socmed_linkedin' => $request-> socmed_linkedin,
            'updated_at' => date("Y-m-d h:m:i"),
        ]);

        return redirect('/profile')->with('success_message', 'Social Media Updated');
    }

    public function updateProfile(Request $request, $id)
    {
        user::where('id', $id)->update([
            'password' => $request-> password,
            'description' => $request-> description,
            'country' => $request-> country,
            'updated_at' => date("Y-m-d h:m:i"),
        ]);

        return redirect('/profile')->with('success_message', 'Account Updated');
    }

    public function updateImage(Request $request, $id)
    {
        $users_id = DB::table('users')->where('username', session()->get('usernameKey'))->get();
        //Get old image url.
        foreach($users_id as $u){
            $old_image = $u->image_url;
        }

        //Validate image.
        $this->validate($request, [
            'image_url'     => 'required|image|mimes:jpeg,png,jpg|max:5000',
        ]);

        //Upload image.
        $new_image = $request->file('image_url');
        $new_image->storeAs('public', $new_image->hashName());
        $imageURL = $new_image->hashName();

        //Delete old image if new image is uploaded.
        if($request->file('image_url')->isValid()){
            Storage::delete('public/'.$old_image);
        }

        user::where('id', $id)->update([
            'image_url' => $imageURL,
            'updated_at' => date("Y-m-d h:m:i"),
        ]);

        return redirect('/profile')->with('success_message', 'Profile Image Updated');
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
