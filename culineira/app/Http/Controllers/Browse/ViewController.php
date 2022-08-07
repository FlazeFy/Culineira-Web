<?php

namespace App\Http\Controllers\Browse;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\user;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

use App\Models\follower;

class ViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($name)
    {
        $user = user::all();

        //Show public recipe in profile.
        $recipeId = DB::table('recipes')
            ->join('users', 'users.id', '=', 'recipes.user_id')
            ->where('username', $name)
            ->where('recipe_visibility', 'Public')
            ->orderBy('recipes.updated_at', 'ASC')->get();

        //Show classroom in profile.
        $classId = DB::table('classroom')
            ->join('users', 'users.id', '=', 'classroom.users_id')
            ->where('username', $name)
            ->orderBy('classroom.updated_at', 'ASC')->get();

        //Show user's groups.
        $groupId = DB::table('groups_rel')
            ->select('groups.id as id', 'groups_name', 'groups_description', 'groups_image' ,'groups.created_at as created_at', 'groups.groups_type as groups_type', 'groups.users_id as founder_id')
            ->join('groups', 'groups.id', '=', 'groups_rel.groups_id')
            ->join('users', 'users.id', '=', 'groups_rel.users_id')
            ->where('username', $name)
            ->orderBy('groups_rel.created_at', 'ASC')->get();

        //Show social media in profile.
        $socmedId = DB::table('socmed')
            ->join('users', 'users.id', '=', 'socmed.users_id')
            ->where('username', $name)->get();

        //Show user login data in profile.
        $userId = DB::table('users')
            ->where('username', $name)->get();

        //For user mini profile
        // $userfollowing = DB::table('follower')
        //     ->join('users', 'users.id', '=', 'follower.user_id_1')
        //     ->where('username', $name)->get();

        // $userfollowers = DB::table('follower')
        //     ->join('users', 'users.id', '=', 'follower.user_id_2')
        //     ->where('username', $name)->get();

        // $userrecipes = DB::table('recipes')
        //     ->join('users', 'users.id', '=', 'recipes.user_id')
        //     ->where('username', $name)->get();

        //For sidebar mini profile
        $following = DB::table('follower')
            ->where('user_id_1', session()->get('idKey'))->get();

        $followers = DB::table('follower')
            ->where('user_id_2', session()->get('idKey'))->get();

        $myrecipes = DB::table('recipes')
            ->where('user_id', session()->get('idKey'))->get();

        return view ('viewuser.index')
            ->with('userId', $userId)
            ->with('recipeId', $recipeId)
            ->with('classId', $classId)
            ->with('groupId', $groupId)
            ->with('user', $user)
            ->with('socmedId', $socmedId)
            ->with('following', $following)
            ->with('followers', $followers)
            ->with('myrecipes', $myrecipes)
            // ->with('userfollowing', $userfollowing)
            // ->with('userfollowers', $userfollowers)
            // ->with('userrecipes', $userrecipes)
            ->with('achievement1', $this->achievement1($name))
            ->with('achievement2', $this->achievement2($name))
            ->with('achievement3', $this->achievement3($name))
            ->with('achievement4', $this->achievement4($name))
            ->with('achievement5', $this->achievement5($name))
            ->with('achievement6', $this->achievement6($name))
            ->with('achievement7', $this->achievement7($name))
            ->with('achievement8', $this->achievement8($name))
            ->with('achievement9', $this->achievement9($name))
            ->with('achievement10', $this->achievement10($name))
            ->with('achievement11', $this->achievement11($name));
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

    public function achievement1($name)
    {
        $check = DB::table('recipes')
            ->join('users', 'users.id', '=', 'recipes.user_id')
            ->join('likes', 'recipes.id', '=', 'likes.recipe_id')
            ->where('username', $name)
            ->get();
        if(count($check) > 0){
            return 'http://127.0.0.1:8000/assets/achievement/achievement-1.png';
        } else {
            return 'http://127.0.0.1:8000/assets/achievement/achievement-lock.png';
        }
    }
    public function achievement2($name)
    {

    }
    public function achievement3($name)
    {

    }
    public function achievement4($name)
    {

    }
    public function achievement5($name)
    {

    }
    public function achievement6($name)
    {

    }
    public function achievement7($name)
    {
        $check = DB::table('recipes')
            ->select('recipes.id')
            ->join('users', 'users.id', '=', 'recipes.user_id')
            ->join('steps', 'recipes.id', '=', 'steps.recipe_id')
            ->join('ingredients', 'recipes.id', '=', 'ingredients.recipe_id')
            ->where('username', $name)
            ->where('recipe_type', 'Desserts')
            ->groupBy('recipes.id')
            ->get();
        if(count($check) > 0){
            return 'http://127.0.0.1:8000/assets/achievement/achievement-7.png';
        } else {
            return 'http://127.0.0.1:8000/assets/achievement/achievement-lock.png';
        }
    }
    public function achievement8($name)
    {

    }
    public function achievement9($name)
    {
        $check = DB::table('recipes')
            ->select('recipes.id')
            ->join('users', 'users.id', '=', 'recipes.user_id')
            ->join('steps', 'recipes.id', '=', 'steps.recipe_id')
            ->join('ingredients', 'recipes.id', '=', 'ingredients.recipe_id')
            ->where('username', $name)
            ->groupBy('recipes.id')
            ->get();
        if(count($check) >= 5){
            return 'http://127.0.0.1:8000/assets/achievement/achievement-9.png';
        } else {
            return 'http://127.0.0.1:8000/assets/achievement/achievement-lock.png';
        }
    }
    public function achievement10($name)
    {
        $check = DB::table('recipes')
            ->select('recipes.id')
            ->join('users', 'users.id', '=', 'recipes.user_id')
            ->join('steps', 'recipes.id', '=', 'steps.recipe_id')
            ->join('ingredients', 'recipes.id', '=', 'ingredients.recipe_id')
            ->where('username', $name)
            ->where('recipe_time_spend', '<=' , 15)
            ->groupBy('recipes.id')
            ->get();
        if(count($check) > 0){
            return 'http://127.0.0.1:8000/assets/achievement/achievement-10.png';
        } else {
            return 'http://127.0.0.1:8000/assets/achievement/achievement-lock.png';
        }
    }
    public function achievement11($name)
    {
        $check = DB::table('recipes')
            ->select('recipes.id')
            ->join('users', 'users.id', '=', 'recipes.user_id')
            ->join('steps', 'recipes.id', '=', 'steps.recipe_id')
            ->join('ingredients', 'recipes.id', '=', 'ingredients.recipe_id')
            ->where('username', $name)
            ->where('recipe_time_spend', '>=' , 60)
            ->groupBy('recipes.id')
            ->get();
        if(count($check) > 0){
            return 'http://127.0.0.1:8000/assets/achievement/achievement-11.png';
        } else {
            return 'http://127.0.0.1:8000/assets/achievement/achievement-lock.png';
        }
    }

    public function follow(Request $request, $id)
    {
        follower::create([
            'user_id_1' => session()->get('idKey'),
            'user_id_2' => $id,
            'created_at' => date("Y-m-d h:m:i"),
            'updated_at' => date("Y-m-d h:m:i"),
        ]);

        return redirect()->back()->with('success_message', 'You have followed '.$request->username.' ');
    }

    public function unfollow(Request $request, $id)
    {
        follower::destroy($id);
        return redirect()->back()->with('success_message', 'You have unfollowed '.$request->username.' ');
    }
}
