<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\recipe;
use App\Models\comment;
use App\Models\user;
use App\Models\steps;
use App\Models\likes;
use App\Models\message;
use App\Models\list;
use App\Models\list_rel;
use App\Models\ingredients;
use App\Models\activity;
use App\Models\follower;
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

        $listRel = DB::table('list-rel')
            ->join('recipes', 'recipes.id', '=', 'list-rel.recipe_id')
            ->where('list-rel.recipe_id', $id)
            ->get();

        $list = DB::table('list')
            ->select('list.id', 'list_name', 'list_name', 'list_status', 'list_description', 'list.created_at as created_at', 'list.updated_at as updated_at')
            ->join('users', 'users.id', '=', 'list.user_id')
            ->where('username', session()->get('usernameKey'))
            ->orderBy('list.updated_at', 'ASC')
            ->get();

        //Show user's groups.
        $groupId = DB::table('groups_rel')
            ->select('groups.id as id', 'groups_name', 'groups_description', 'groups_image' ,'groups.created_at as created_at', 'groups.groups_type as groups_type', 'groups.users_id as founder_id')
            ->join('groups', 'groups.id', '=', 'groups_rel.groups_id')
            ->join('users', 'users.id', '=', 'groups_rel.users_id')
            ->where('username', session()->get('usernameKey'))
            ->orderBy('groups_rel.created_at', 'ASC')->get();

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

        //Retrive likes by recipe id and user id
        $likesUser = DB::table('likes')->where('recipe_id', $id)->where('users_id', session()->get('idKey'))->get();
        $likesId = DB::table('likes')->where('recipe_id', $id)->get();

        //For sidebar mini profile
        $following = DB::table('follower')
            ->where('user_id_1', session()->get('idKey'))->get();

        $followers = DB::table('follower')
            ->where('user_id_2', session()->get('idKey'))->get();

        $myrecipes = DB::table('recipes')
            ->where('user_id', session()->get('idKey'))->get();

        //Set active nav
        session()->put('active_nav', 'recipe');

        return view ('recipe.detail.index')
            ->with('recipeId', $recipeId)
            ->with('recipe', $recipe)
            ->with('comment', $comment)
            ->with('user', $user)
            ->with('steps', $steps)
            ->with('ingredients', $ingredients)
            ->with('mayLikeRecipe', $mayLikeRecipe)
            ->with('similar', $results)
            ->with('likesUser', $likesUser)
            ->with('list', $list)
            ->with('listRel', $listRel)
            ->with('groupId', $groupId)
            ->with('following', $following)
            ->with('followers', $followers)
            ->with('myrecipes', $myrecipes)
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
        //Check if recipe is liked or not
        $check = DB::table('likes')->where('recipe_id', $id)->where('users_id', session()->get('idKey'))->get();
        if($check->count() == 0){
            //Likes.
            likes::create([
                'recipe_id' => $id,
                'users_id' => session()->get('idKey'),
                'created_at' => date("Y-m-d h:m:i"),
                'updated_at' => date("Y-m-d h:m:i"),
            ]);

            //Activity record
            activity::create([
                'users_id' => session()->get('idKey'),
                'activity_from' => $id,
                'activity_type' => 'recipes',
                'activity_description' => 'liked your recipes',
                'created_at' => date("Y-m-d h:m:i"),
                'updated_at' => date("Y-m-d h:m:i"),
            ]);

            return redirect()->route('detail', ['id' => $id])->with('success_message', 'Recipe liked!');
        } else {
            //Disliked.
            foreach($check as $c){
                $id_likes = $c->id;
            }

            $activity_id = DB::table('activity')->where('activity_from', $id)->where('users_id', session()->get('idKey'))->get();
            foreach($activity_id as $as){
                $ac_id = $as->id;
            }

            //Activity record
            activity::destroy($ac_id);

            likes::destroy($id_likes);
            return redirect()->route('detail', ['id' => $id])->with('success_message', 'Recipe disliked!');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function forwardRecipe(Request $request, $id)
    {
        //Get group name.
        $check = DB::table('groups')
            ->where('id', $request->group_id)
            ->get();

        foreach($check as $c){
            $group_name = $c->groups_name;
        }

        message::create([
            'users_id' => session()->get('idKey'),
            'groups_id' => $request->group_id,
            'message_body' => $id,
            'message_type' => "forward-recipe",
            'created_at' => date("Y-m-d h:m:i"),
            'updated_at' => date("Y-m-d h:m:i"),
        ]);

        return redirect()->back()->with('success_message', 'Recipe has forwaded to "'.$group_name.'" group');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function compare(Request $request, $id)
    {
        if($request->section == 1){
            $request->session()->put('compare1Key', $id);
        } else {
            $request->session()->put('compare2Key', $id);
        }
        return redirect()->back()->with('success_message', 'Recipe added to compare');;
    }

    public function updateList(Request $request, $id)
    {
        //Get list id.
        $checkList = DB::table('list')
            ->where('list_name', $request->list_name)
            ->get();

        foreach($checkList as $c){
            $list_id = $c->id;
        }

        //Check recipe in list relation.
        $checkRel = DB::table('list-rel')
            ->where('recipe_id', $id)
            ->where('list_id', $list_id)
            ->get();

        if(count($checkRel) != 0){
            //If there's a relation between recipe and list.
            //Delete relation.
            foreach($checkRel as $r){
                $idRel = $r->id;
            }
            list_rel::destroy($idRel);
            return redirect()->route('detail', ['id' => $id])->with('success_message', 'Recipe removed from '.$request->list_name.' list!');
        } else {
            //If there's no relation between recipe and list.
            //Create relation.
            list_rel::create([
                'list_id' => $list_id,
                'recipe_id' => $id,
                'created_at' => date("Y-m-d h:m:i"),
                'updated_at' => date("Y-m-d h:m:i"),
            ]);
            return redirect()->route('detail', ['id' => $id])->with('success_message', 'Recipe added to '.$request->list_name.' list!');
        }
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
        if($request->hasFile('image')){
            //Validate image.
            $this->validate($request, [
                'image'     => 'required|image|mimes:jpeg,png,jpg|max:5000',
            ]);

            //Store image.
            $image = $request->file('image');
            $image->storeAs('public', $image->hashName());
            $imageURL = $image->hashName();
        } else {
            $imageURL = "null";
        }

        comment::create([
            'recipe_id' => $id,
            'steps_id' => $request->steps_id,
            'users_id' => session()->get('idKey'),
            'comment_body' => $request->comment_body,
            'comment_image' => $imageURL,
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
