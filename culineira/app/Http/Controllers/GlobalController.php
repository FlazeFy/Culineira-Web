<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\user;
use App\Models\follower;
use App\Models\groups_rel;
use App\Models\activity;
use App\Models\message;

class GlobalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = user::all();

        //For sidebar mini profile
        $following = DB::table('follower')
            ->where('user_id_1', session()->get('idKey'))->get();

        $followers = DB::table('follower')
            ->where('user_id_2', session()->get('idKey'))->get();

        $myrecipes = DB::table('recipes')
            ->where('user_id', session()->get('idKey'))->get();

        $global_group = DB::table('groups')
        ->select(
            DB::raw('
                groups.id as id,
                groups.groups_name as name,
                groups.groups_description as description,
                1 as cat,
                users.username as context,
                groups.groups_type as context2,
                groups.created_at as created_at,
                groups.groups_image as image,
                users.image_url as image2'
            )
        )
        ->join('groups_rel', 'groups.id', '=', 'groups_rel.groups_id')
        ->join('users', 'users.id', '=', 'groups.users_id');

        $global = DB::table('users')
        ->select(
            DB::raw('
                id as id,
                username as name,
                description,
                2 as cat,
                country as context,
                null as context2,
                created_at as created_at,
                image_url as image,
                null as image2'
            )
        )
        ->union($global_group)
        ->get();

        //Show user's groups.
        $groupId = DB::table('groups_rel')
            ->select('groups.id as id', 'groups_name', 'groups_description', 'groups_image' ,'groups.created_at as created_at', 'groups.groups_type as groups_type', 'groups.users_id as founder_id')
            ->join('groups', 'groups.id', '=', 'groups_rel.groups_id')
            ->join('users', 'users.id', '=', 'groups_rel.users_id')
            ->where('username', session()->get('usernameKey'))
            ->orderBy('groups_rel.created_at', 'ASC')->get();

        $allFollower = follower::all();

        $allRecipes = DB::table('recipes')
            ->where('user_id', '!=' ,session()->get('idKey'))->get();

        //Set active nav
        session()->put('active_nav', 'global');

        return view ('global.index')
            ->with('global', $global)
            ->with('following', $following)
            ->with('followers', $followers)
            ->with('myrecipes', $myrecipes)
            ->with('groupId', $groupId)
            ->with('allFollower', $allFollower)
            ->with('allRecipes', $allRecipes)
            ->with('user', $user);
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

    public function join(Request $request, $id)
    {
        //Auto open group
        $request->session()->put('groupKey', $id);

        //Group relation
        groups_rel::create([
            'users_id' => session()->get('idKey'),
            'groups_id' => session()->get('groupKey'),
            'created_at' => date("Y-m-d h:m:i"),
            'updated_at' => date("Y-m-d h:m:i"),
            'groups_role' => 'member',
        ]);

        //Show record to group chat
        message::create([
            'users_id' => session()->get('idKey'),
            'groups_id' => session()->get('groupKey'),
            'message_body' => session()->get('usernameKey').' has joined to the group',
            'message_type' => 'role',
            'created_at' => date("Y-m-d h:m:i"),
            'updated_at' => date("Y-m-d h:m:i"),
        ]);

        //Activity record
        activity::create([
            'users_id' => session()->get('idKey'),
            'activity_from' => session()->get('groupKey'),
            'activity_type' => 'group-join',
            'activity_description' => 'has been joined "'.session()->get('groupKey').'" group',
            'created_at' => date("Y-m-d h:m:i"),
            'updated_at' => date("Y-m-d h:m:i"),
        ]);

        return redirect()->back()->with('success_message', 'You are now a member of "'.$request->groupname.'" group');
    }

    public function request(Request $request, $id)
    {
        //Show record to group chat
        message::create([
            'users_id' => session()->get('idKey'),
            'groups_id' => $id,
            'message_body' => session()->get('usernameKey').' want to join this group',
            'message_type' => 'request',
            'created_at' => date("Y-m-d h:m:i"),
            'updated_at' => date("Y-m-d h:m:i"),
        ]);

        return redirect()->back()->with('success_message', 'Request sended to "'.$request->groupname.'" group');
    }
}
