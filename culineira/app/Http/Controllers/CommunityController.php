<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\recipe;
use App\Models\user;
use App\Models\activity;
use App\Models\socmed;
use App\Models\classroom;
use App\Models\message;
use App\Models\likes;
use App\Models\groups;
use App\Models\follower;
use App\Models\groups_rel;
use App\Models\invitation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

class CommunityController extends Controller
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

        //Show user login data.
        $userId = DB::table('users')
            ->where('username', session()->get('usernameKey'))->get();

        //Show user's groups.
        $groupId = DB::table('groups_rel')
            ->select('groups.id as id', 'groups_name', 'groups_description', 'groups_image' ,'groups.created_at as created_at', 'groups.groups_type as groups_type', 'groups.users_id as founder_id')
            ->join('groups', 'groups.id', '=', 'groups_rel.groups_id')
            ->join('users', 'users.id', '=', 'groups_rel.users_id')
            ->where('username', session()->get('usernameKey'))
            ->orderBy('groups_rel.created_at', 'ASC')->get();

        //Show last message
        $lastMsg = DB::table('message')
            ->select('groups.id as id', 'message.message_body as message_body', 'message.created_at as created_at', 'users.username')
            ->join('groups', 'groups.id', '=', 'message.groups_id')
            ->join('users', 'users.id', '=', 'message.users_id')
            ->orderBy('message.created_at', 'DESC')->get();

        //Show community detail //CHECK AGAIN...
        if(session()->get('groupKey')){
            $member = DB::table('groups_rel')
            ->select('groups.id as id', 'groups_rel.id as id_rel', 'users.username', 'users.id as id_user', 'users.image_url  as image_url', 'groups.id as id', 'groups.users_id as founder_id', 'groups_rel.created_at as joined_at', 'groups_rel.groups_role as role')
            ->join('groups', 'groups.id', '=', 'groups_rel.groups_id')
            ->join('users', 'users.id', '=', 'groups_rel.users_id')
            ->where('groups_rel.groups_id', session()->get('groupKey'))
            ->orderBy('groups_rel.created_at', 'ASC')->get();

            $message = DB::table('message')
            ->select('message.id as id', 'message.groups_id as groups_id',  'users.username', 'users.id as users_id' ,'users.image_url  as image_url', 'message.created_at', 'message.message_body', 'message.message_type')
            ->join('groups', 'groups.id', '=', 'message.groups_id')
            ->join('users', 'users.id', '=', 'message.users_id')
            ->where('message.groups_id', session()->get('groupKey'))
            ->orderBy('message.created_at', 'ASC')->get();
        } else {
            //Initial state.
            $member = DB::table('groups_rel')
            ->select('groups.id as id', 'groups_rel.id as id_rel', 'users.username', 'users.id as id_user', 'users.image_url as image_url', 'groups.id as id', 'groups.users_id as founder_id', 'groups_rel.created_at as joined_at', 'groups_rel.groups_role as role')
            ->join('groups', 'groups.id', '=', 'groups_rel.groups_id')
            ->join('users', 'users.id', '=', 'groups_rel.users_id')
            ->orderBy('groups_rel.created_at', 'ASC');

            $message = DB::table('message')
            ->select('message.id as id', 'message.groups_id as groups_id',  'users.username', 'users.id as users_id' , 'users.image_url  as image_url', 'message.created_at', 'message.message_body', 'message.message_type')
            ->join('groups', 'groups.id', '=', 'message.groups_id')
            ->join('users', 'users.id', '=', 'message.users_id')
            ->orderBy('message.created_at', 'ASC')
            ->limit(1)->get();
        }

        $allFollower = follower::all();

        $allRecipes = DB::table('recipes')
            ->where('user_id', '!=' ,session()->get('idKey'))->get();

        //For sidebar mini profile
        $following = DB::table('follower')
            ->where('user_id_1', session()->get('idKey'))->get();

        $followers = DB::table('follower')
            ->where('user_id_2', session()->get('idKey'))->get();

        $myrecipes = DB::table('recipes')
            ->where('user_id', session()->get('idKey'))->get();

        //For invitation
        $invitWait = DB::table('invitation')
            ->where('users_id', session()->get('idKey'))
            ->where('groups_id', session()->get('groupKey'))->get();

        $myInvit =  DB::table('invitation')
            ->select('groups.id as groups_id', 'invitation.id as invit_id', 'groups.groups_name', 'groups.groups_type')
            ->join('groups', 'groups.id', '=', 'invitation.groups_id')
            ->where('users_id_2', session()->get('idKey'))->get();

        //Set active nav
        session()->put('active_nav', 'community');

        return view ('community.index')
            ->with('user', $user)
            ->with('recipe', $recipe)
            ->with('groupId', $groupId)
            ->with('member', $member)
            ->with('message', $message)
            ->with('lastMsg', $lastMsg)
            ->with('following', $following)
            ->with('followers', $followers)
            ->with('myrecipes', $myrecipes)
            ->with('invitWait', $invitWait)
            ->with('myInvit', $myInvit)
            ->with('userId', $userId);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createGroup(Request $request)
    {
        //validate image
        $this->validate($request, [
            'group_image'     => 'required|image|mimes:jpeg,png,jpg|max:5000',
        ]);

        //upload image
        $image = $request->file('group_image');
        $image->storeAs('public', $image->hashName());

        //Create group
        $group = groups::create([
            'users_id' => session()->get('idKey'),
            'groups_name' => $request->group_name,
            'groups_type' => $request->group_type,
            'groups_description' => $request->group_description,
            'groups_image' => $image->hashName(),
            'created_at' => date("Y-m-d h:m:i"),
            'updated_at' => date("Y-m-d h:m:i"),
        ]);

        //Group Relation
        groups_rel::create([
            'users_id' => session()->get('idKey'),
            'groups_id' => $group->id,
            'created_at' => date("Y-m-d h:m:i"),
            'updated_at' => date("Y-m-d h:m:i"),
            'groups_role' => 'founder',
        ]);

        //Activity record
        activity::create([
            'users_id' => session()->get('idKey'),
            'activity_from' => $group->id,
            'activity_type' => 'group',
            'activity_description' => 'created a group called "'.$request->group_name.'"',
            'created_at' => date("Y-m-d h:m:i"),
            'updated_at' => date("Y-m-d h:m:i"),
        ]);

        $request->session()->put('groupKey', $group->id);
        return redirect('/community')->with('success_message', 'Successfully created new '.$request->group_name.' group');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sendChat(Request $request, $id)
    {
        //Send chat validator
        $validator = Validator::make($request->all(), [
            'message_body' => 'required',
        ]);

        if (!$validator->fails()) {
            //Get id
            $users_id = DB::table('users')->where('username', session()->get('usernameKey'))->get();
            foreach($users_id as $u){
                $id_user = $u->id;
            }

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
                $imageURL = "text";
            }

            message::create([
                'users_id' => $id_user,
                'groups_id' => $id,
                'message_body' => $request->message_body,
                'message_type' => $imageURL,
                'created_at' => date("Y-m-d h:m:i"),
                'updated_at' => date("Y-m-d h:m:i"),
            ]);

            return redirect()->back();
        } else {
            return redirect()->back()->with('failed_message', 'Message cannot be empty!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function promote(Request $request ,$id)
    {
        //Role 0 = Login user's role
        //Role 1 = Target member's role

        $newFounder = 0;

        if($request->role1 == "founder"){
            if($request->role0 == "member"){
                //Promote to admin
                $newrole = "admin";
                groups_rel::where('id', $id)->update([
                    'groups_role' => $newrole,
                    'updated_at' => date("Y-m-d h:m:i"),
                ]);
            } else if($request->role0 == "admin"){
                //Promote to founder
                $newrole = "founder";
                groups_rel::where('id', $id)->update([
                    'groups_role' => $newrole,
                    'updated_at' => date("Y-m-d h:m:i"),
                ]);

                //Get user login id & demote
                $users_id = DB::table('groups_rel')
                    ->select('groups_rel.id as id')
                    ->join('users', 'groups_rel.users_id', '=', 'users.id')
                    ->where('users.username', session()->get('usernameKey'))
                    ->where('groups_rel.groups_id', session()->get('groupKey'))->get();

                foreach($users_id as $u){
                    $id_rel = $u->id;
                }

                //Demote to admin
                groups_rel::where('id', $id_rel)->update([
                    'groups_role' => "admin",
                    'updated_at' => date("Y-m-d h:m:i"),
                ]);

                $newFounder = 1;
            }
        } else if($request->role1 == "admin"){
            if($request->role0 == "member"){
                //Promote to admin
                $newrole = "admin";
                groups_rel::where('id', $id)->update([
                    'groups_role' => $newrole,
                    'updated_at' => date("Y-m-d h:m:i"),
                ]);
            }
        }

        //Get target user's username by relation id
        $users = DB::table('users')
            ->where('id', $request->id_member)->get();

        foreach($users as $us){
            $username = $us->username;
        }

        //Show record to group chat
        message::create([
            'users_id' => session()->get('idKey'),
            'groups_id' => session()->get('groupKey'),
            'message_body' => $username.' is now a '.$newrole.'  ',
            'message_type' => 'role',
            'created_at' => date("Y-m-d h:m:i"),
            'updated_at' => date("Y-m-d h:m:i"),
        ]);

        if($newFounder == 1){
            //Show record to group chat if there's a new founder
            message::create([
                'users_id' => session()->get('idKey'),
                'groups_id' => session()->get('groupKey'),
                'message_body' => session()->get('usernameKey').' is no longer a founder ',
                'message_type' => 'role',
                'created_at' => date("Y-m-d h:m:i"),
                'updated_at' => date("Y-m-d h:m:i"),
            ]);
        }

        return redirect()->back()->with('success_message', 'Group member updated!');
    }

    public function demote(Request $request ,$id)
    {
        //Role 0 = Login user's role
        //Role 1 = Target member's role

        if($request->role1 == "founder"){
            if($request->role0 == "admin"){
                //Promote to admin
                $newrole = "member";
                groups_rel::where('id', $id)->update([
                    'groups_role' => $newrole,
                    'updated_at' => date("Y-m-d h:m:i"),
                ]);
            }
        }

        //Get target user's username by relation id
        $users = DB::table('users')
            ->where('id', $request->id_member)->get();

        foreach($users as $us){
            $username = $us->username;
        }

        //Show record to group chat
        message::create([
            'users_id' => session()->get('idKey'),
            'groups_id' => session()->get('groupKey'),
            'message_body' => $username.' is now a '.$newrole.'  ',
            'message_type' => 'role',
            'created_at' => date("Y-m-d h:m:i"),
            'updated_at' => date("Y-m-d h:m:i"),
        ]);

        return redirect()->back()->with('success_message', 'Group member updated!');
    }

    public function kick(Request $request ,$id)
    {
        //Role 0 = Login user's role
        //Role 1 = Target member's role

        if($request->role1 == "founder"){
            if($request->role0 == "member"){
                groups_rel::destroy($id);
            }
        } else if($request->role1 == "admin"){
            if($request->role0 == "member"){
                groups_rel::destroy($id);
            }
        }

        //Get target user's username by relation id
        $users = DB::table('users')
            ->where('id', $request->id_member)->get();

        foreach($users as $us){
            $username = $us->username;
        }

        //Show record to group chat
        message::create([
            'users_id' => session()->get('idKey'),
            'groups_id' => session()->get('groupKey'),
            'message_body' => $username.' has been kicked out',
            'message_type' => 'role',
            'created_at' => date("Y-m-d h:m:i"),
            'updated_at' => date("Y-m-d h:m:i"),
        ]);

        //Activity record
        activity::create([
            'users_id' => $request->id_member,
            'activity_from' => session()->get('idKey'),
            'activity_type' => 'group-kick',
            'activity_description' => 'has been kicked out from "'.session()->get('groupKey').'" group',
            'created_at' => date("Y-m-d h:m:i"),
            'updated_at' => date("Y-m-d h:m:i"),
        ]);

        return redirect()->back()->with('success_message', 'Group member updated!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editGroup(Request $request, $id)
    {
        if($request->hasFile('group_image')){
            //Validate image.
            $this->validate($request, [
                'group_image'     => 'required|image|mimes:jpeg,png,jpg|max:5000',
            ]);

            $groups_id = DB::table('groups')->where('id', $id)->get();

            //Get old image url.
            foreach($groups_id as $g){
                $old_image = $g->groups_image;
            }

            //Upload new image.
            $image = $request->file('group_image');
            $image->storeAs('public', $image->hashName());

            //Delete old image if new image is uploaded.
            if($request->file('group_image')->isValid()){
                Storage::delete('public/'.$old_image);
            }

            //Update data.
            groups::where('id', $id)->update([
                'groups_name' => $request-> group_name,
                'groups_description' => $request-> group_description,
                'groups_type' => $request-> group_type,
                'groups_image' => $image->hashName(),
                'updated_at' => date("Y-m-d h:m:i"),
            ]);
        } else {
            //Update data.
            groups::where('id', $id)->update([
                'groups_name' => $request-> group_name,
                'groups_description' => $request-> group_description,
                'groups_type' => $request-> group_type,
                'updated_at' => date("Y-m-d h:m:i"),
            ]);
        }

        //Activity record
        activity::create([
            'users_id' => session()->get('idKey'),
            'activity_from' => $id,
            'activity_type' => 'group',
            'activity_description' => 'modified group profile',
            'created_at' => date("Y-m-d h:m:i"),
            'updated_at' => date("Y-m-d h:m:i"),
        ]);

        //Show record to group chat
        message::create([
            'users_id' => session()->get('idKey'),
            'groups_id' => $id,
            'message_body' => 'changed group profile',
            'message_type' => 'notification',
            'created_at' => date("Y-m-d h:m:i"),
            'updated_at' => date("Y-m-d h:m:i"),
        ]);

        return redirect('/community')->with('success_message', 'Group Updated');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function openChat(Request $request, $id)
    {
        $request->session()->put('groupKey', $id);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function unsendChat($id)
    {
        //Delete message image if exist.
        $message = DB::table('message')->where('id', $id)->get();
        foreach($message as $m){
            $image = $m->message_type;
        }
        if(($image != 'text')&&($image != 'notification')&&($image != 'forward-recipe')){
            Storage::delete('public/'.$image);
        }

        message::destroy($id);
        return redirect('/community')->with('success_message', 'Message unsend');
    }

    public function invite(Request $request, $id)
    {
        invitation::create([
            'users_id' => session()->get('idKey'),
            'groups_id' => session()->get('groupKey'),
            'users_id_2' => $id,
            'created_at' => date("Y-m-d h:m:i"),
            'updated_at' => date("Y-m-d h:m:i"),
        ]);

        return redirect('/community')->with('success_message', 'You have sended invitation to '.$request->username.' ');
    }

    public function uninvite(Request $request, $id)
    {
        invitation::destroy($id);

        return redirect('/community')->with('success_message', 'You have unsend invitation to '.$request->username.' ');
    }

    public function leave($id)
    {
        groups_rel::destroy($id);

        //Show record to group chat
        message::create([
            'users_id' => session()->get('idKey'),
            'groups_id' => session()->get('groupKey'),
            'message_body' => session()->get('usernameKey').' has been leave this group',
            'message_type' => 'role',
            'created_at' => date("Y-m-d h:m:i"),
            'updated_at' => date("Y-m-d h:m:i"),
        ]);

        //Activity record
        activity::create([
            'users_id' => session()->get('idKey'),
            'activity_from' => session()->get('idKey'),
            'activity_type' => 'group-leave',
            'activity_description' => 'has been leave from "'.session()->get('groupKey').'" group',
            'created_at' => date("Y-m-d h:m:i"),
            'updated_at' => date("Y-m-d h:m:i"),
        ]);

        //Get group name
        $groups = DB::table('groups')
            ->where('id', session()->get('groupKey'))->get();

        foreach($groups as $g){
            $groupname = $g->groups_name;
        }

        return redirect()->back()->with('success_message', 'You are no longer a part of "'.$groupname.'" group');
    }

    public function accept(Request $request, $id)
    {
        //Auto open group
        $request->session()->put('groupKey', $id);

        //Delete invitation
        invitation::destroy($request->invitation_id);

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

    public function reject(Request $request, $id)
    {
        invitation::destroy($id);

        return redirect()->back()->with('success_message', 'You have rejected invitation from "'.$request->groupname.'" group');
    }

    public function acceptReq(Request $request, $id)
    {
        //Get id
        $users_id = DB::table('users')->where('username', $request->username)->get();
        foreach($users_id as $u){
            $id_user = $u->id;
        }

        //Delete invitation
        message::destroy($id);

        //Group relation
        groups_rel::create([
            'users_id' => $id_user,
            'groups_id' => session()->get('groupKey'),
            'created_at' => date("Y-m-d h:m:i"),
            'updated_at' => date("Y-m-d h:m:i"),
            'groups_role' => 'member',
        ]);

        //Show record to group chat
        message::create([
            'users_id' => $id_user,
            'groups_id' => session()->get('groupKey'),
            'message_body' => $request->username.' has joined to the group',
            'message_type' => 'role',
            'created_at' => date("Y-m-d h:m:i"),
            'updated_at' => date("Y-m-d h:m:i"),
        ]);

        //Activity record
        activity::create([
            'users_id' => $id_user,
            'activity_from' => session()->get('groupKey'),
            'activity_type' => 'group-join',
            'activity_description' => 'has been joined "'.session()->get('groupKey').'" group',
            'created_at' => date("Y-m-d h:m:i"),
            'updated_at' => date("Y-m-d h:m:i"),
        ]);

        return redirect()->back()->with('success_message', 'You have accepted the request from '.$request->username.' ');
    }

    public function rejectReq(Request $request, $id)
    {
        message::destroy($id);

        return redirect()->back()->with('success_message', 'You have rejected the request from '.$request->username.'');
    }

    public function deleteGroup(Request $request){
        //Get group name
        $groups = DB::table('groups')
            ->where('id', session()->get('groupKey'))->get();

        foreach($groups as $g){
            $groupname = $g->groups_name;
            $image = $g->groups_image;
        }

        //Delete group message image
        $msg = DB::table('message')
            ->where('groups_id', session()->get('groupKey'))->get();

        foreach($msg as $m){
            $msgimage = $m->message_type;
            if(($msgimage != "text")&&($msgimage != "role")||($msgimage != "notification")||($msgimage != "forward-recipe")){
                Storage::delete('public/'.$msgimage);
            }
        }

        //Delete group, message, and relation
        DB::table('groups_rel')->where('groups_id', session()->get('groupKey'))->delete();
        DB::table('message')->where('groups_id', session()->get('groupKey'))->delete();
        groups::destroy(session()->get('groupKey'));

        //Activity record
        activity::create([
            'users_id' => session()->get('idKey'),
            'activity_from' => session()->get('groupKey'),
            'activity_type' => 'group-delete',
            'activity_description' => 'deleted "'.$groupname.'" group',
            'created_at' => date("Y-m-d h:m:i"),
            'updated_at' => date("Y-m-d h:m:i"),
        ]);

        //Delete session key
        $request->session()->forget('groupKey');

        //Delete group image
        Storage::delete('public/'.$image);

        return redirect('/community')->with('success_message', $groupname.' group has been deleted!');
    }
}
