<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\recipe;
use App\Models\comment;
use App\Models\user;
use App\Models\steps;
use App\Models\activity;
use App\Models\likes;
use App\Models\ingredients;
use App\Models\socmed;
use App\Models\classroom;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

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

        //Show user's groups in profile.
        $groupId = DB::table('groups-rel')
            ->select('groups_name', 'groups.created_at as created_at', 'groups.groups_type as groups_type', 'groups.users_id as founder_id')
            ->join('groups', 'groups.id', '=', 'groups-rel.groups_id')
            ->join('users', 'users.id', '=', 'groups-rel.users_id')
            ->where('username', session()->get('usernameKey'))
            ->orderBy('groups-rel.created_at', 'ASC')->get();

        //Show social media in profile.
        $socmedId = DB::table('socmed')
            ->join('users', 'users.id', '=', 'socmed.users_id')
            ->where('username', session()->get('usernameKey'))->get();

        //Show user login data in profile.
        $userId = DB::table('users')
            ->where('username', session()->get('usernameKey'))->get();

        //Show user login data in profile.
        $activityId = DB::table('activity')
            ->join('users', 'users.id', '=', 'activity.users_id')
            ->where('username', session()->get('usernameKey'))->get();

        return view ('profile.index')
            ->with('userId', $userId)
            ->with('recipeId', $recipeId)
            ->with('classId', $classId)
            ->with('groupId', $groupId)
            ->with('recipe', $recipe)
            ->with('user', $user)
            ->with('socmedId', $socmedId)
            ->with('activityId', $activityId)
            ->with('achievement1', $this->achievement1())
            ->with('achievement2', $this->achievement2())
            ->with('achievement3', $this->achievement3())
            ->with('achievement4', $this->achievement4())
            ->with('achievement5', $this->achievement5())
            ->with('achievement6', $this->achievement6())
            ->with('achievement7', $this->achievement7())
            ->with('achievement8', $this->achievement8())
            ->with('achievement9', $this->achievement9())
            ->with('achievement10', $this->achievement10())
            ->with('achievement11', $this->achievement11());
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
    public function achievement1()
    {
        $check = DB::table('recipes')
            ->join('users', 'users.id', '=', 'recipes.user_id')
            ->join('likes', 'recipes.id', '=', 'likes.recipe_id')
            ->where('username', session()->get('usernameKey'))
            ->get();
        if(count($check) > 0){
            return 'http://127.0.0.1:8000/assets/achievement/achievement-1.png';
        } else {
            return 'http://127.0.0.1:8000/assets/achievement/achievement-lock.png';
        }
    }
    public function achievement2()
    {

    }
    public function achievement3()
    {

    }
    public function achievement4()
    {

    }
    public function achievement5()
    {

    }
    public function achievement6()
    {

    }
    public function achievement7()
    {
        $check = DB::table('recipes')
            ->select('recipes.id')
            ->join('users', 'users.id', '=', 'recipes.user_id')
            ->join('steps', 'recipes.id', '=', 'steps.recipe_id')
            ->join('ingredients', 'recipes.id', '=', 'ingredients.recipe_id')
            ->where('username', session()->get('usernameKey'))
            ->where('recipe_type', 'Desserts')
            ->groupBy('recipes.id')
            ->get();
        if(count($check) > 0){
            return 'http://127.0.0.1:8000/assets/achievement/achievement-7.png';
        } else {
            return 'http://127.0.0.1:8000/assets/achievement/achievement-lock.png';
        }
    }
    public function achievement8()
    {

    }
    public function achievement9()
    {
        $check = DB::table('recipes')
            ->select('recipes.id')
            ->join('users', 'users.id', '=', 'recipes.user_id')
            ->join('steps', 'recipes.id', '=', 'steps.recipe_id')
            ->join('ingredients', 'recipes.id', '=', 'ingredients.recipe_id')
            ->where('username', session()->get('usernameKey'))
            ->groupBy('recipes.id')
            ->get();
        if(count($check) >= 5){
            return 'http://127.0.0.1:8000/assets/achievement/achievement-9.png';
        } else {
            return 'http://127.0.0.1:8000/assets/achievement/achievement-lock.png';
        }
    }
    public function achievement10()
    {
        $check = DB::table('recipes')
            ->select('recipes.id')
            ->join('users', 'users.id', '=', 'recipes.user_id')
            ->join('steps', 'recipes.id', '=', 'steps.recipe_id')
            ->join('ingredients', 'recipes.id', '=', 'ingredients.recipe_id')
            ->where('username', session()->get('usernameKey'))
            ->where('recipe_time_spend', '<=' , 15)
            ->groupBy('recipes.id')
            ->get();
        if(count($check) > 0){
            return 'http://127.0.0.1:8000/assets/achievement/achievement-10.png';
        } else {
            return 'http://127.0.0.1:8000/assets/achievement/achievement-lock.png';
        }
    }
    public function achievement11()
    {
        $check = DB::table('recipes')
            ->select('recipes.id')
            ->join('users', 'users.id', '=', 'recipes.user_id')
            ->join('steps', 'recipes.id', '=', 'steps.recipe_id')
            ->join('ingredients', 'recipes.id', '=', 'ingredients.recipe_id')
            ->where('username', session()->get('usernameKey'))
            ->where('recipe_time_spend', '>=' , 60)
            ->groupBy('recipes.id')
            ->get();
        if(count($check) > 0){
            return 'http://127.0.0.1:8000/assets/achievement/achievement-11.png';
        } else {
            return 'http://127.0.0.1:8000/assets/achievement/achievement-lock.png';
        }
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

        //Activity record
        activity::create([
            'users_id' => $id,
            'activity_from' => $id,
            'activity_type' => 'profile',
            'activity_description' => 'modified your social media data',
            'created_at' => date("Y-m-d h:m:i"),
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

        //Activity record
        activity::create([
            'users_id' => $id,
            'activity_from' => $id,
            'activity_type' => 'profile',
            'activity_description' => 'modified your account data',
            'created_at' => date("Y-m-d h:m:i"),
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

        //Activity record
        activity::create([
            'users_id' => $id,
            'activity_from' => $id,
            'activity_type' => 'profile',
            'activity_description' => 'changed your profile image',
            'created_at' => date("Y-m-d h:m:i"),
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
