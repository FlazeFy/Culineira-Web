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
use App\Models\groups_rel;
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
        $groupId = DB::table('groups-rel')
            ->select('groups.id as id', 'groups_name', 'groups_description', 'groups_image' ,'groups.created_at as created_at', 'groups.groups_type as groups_type', 'groups.users_id as founder_id')
            ->join('groups', 'groups.id', '=', 'groups-rel.groups_id')
            ->join('users', 'users.id', '=', 'groups-rel.users_id')
            ->where('username', session()->get('usernameKey'))
            ->orderBy('groups-rel.created_at', 'ASC')->get();

        //Show last message
        $lastMsg = DB::table('message')
            ->select('groups.id as id', 'message.message_body as message_body', 'message.created_at as created_at', 'users.username')
            ->join('groups', 'groups.id', '=', 'message.groups_id')
            ->join('users', 'users.id', '=', 'message.users_id')
            ->orderBy('message.created_at', 'DESC')->get();

        //Show community detail //CHECK AGAIN...
        if(session()->get('groupKey')){
            $member = DB::table('groups-rel')
            ->select('groups.id as id', 'users.username', 'users.image_url  as image_url', 'groups.id as id', 'groups.users_id as founder_id')
            ->join('groups', 'groups.id', '=', 'groups-rel.groups_id')
            ->join('users', 'users.id', '=', 'groups-rel.users_id')
            ->where('groups-rel.groups_id', session()->get('groupKey'))
            ->orderBy('groups-rel.created_at', 'ASC')->get();

            $message = DB::table('message')
            ->select('message.id as id', 'message.groups_id as groups_id',  'users.username', 'users.id as users_id' ,'users.image_url  as image_url', 'message.created_at', 'message.message_body', 'message.message_type')
            ->join('groups', 'groups.id', '=', 'message.groups_id')
            ->join('users', 'users.id', '=', 'message.users_id')
            ->where('message.groups_id', session()->get('groupKey'))
            ->orderBy('message.created_at', 'ASC')->get();
        } else {
            //Initial state.
            $member = DB::table('groups-rel')
            ->select('groups.id as id', 'users.username', 'users.image_url as image_url', 'groups.id as id', 'groups.users_id as founder_id')
            ->join('groups', 'groups.id', '=', 'groups-rel.groups_id')
            ->join('users', 'users.id', '=', 'groups-rel.users_id')
            ->orderBy('groups-rel.created_at', 'ASC');

            $message = DB::table('message')
            ->select('message.id as id', 'message.groups_id as groups_id',  'users.username', 'users.id as users_id' , 'users.image_url  as image_url', 'message.created_at', 'message.message_body', 'message.message_type')
            ->join('groups', 'groups.id', '=', 'message.groups_id')
            ->join('users', 'users.id', '=', 'message.users_id')
            ->orderBy('message.created_at', 'ASC')
            ->limit(1)->get();
        }

        return view ('community.index')
            ->with('user', $user)
            ->with('recipe', $recipe)
            ->with('groupId', $groupId)
            ->with('member', $member)
            ->with('message', $message)
            ->with('lastMsg', $lastMsg)
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
            'users_id' => 1, //For testing
            'groups_name' => $request->group_name,
            'groups_type' => $request->group_type,
            'groups_description' => $request->group_description,
            'groups_image' => $image->hashName(),
            'created_at' => date("Y-m-d h:m:i"),
            'updated_at' => date("Y-m-d h:m:i"),
        ]);

        //Group Relation
        groups_rel::create([
            'users_id' => 1, //For testing
            'groups_id' => $group->id,
            'created_at' => date("Y-m-d h:m:i"),
            'updated_at' => date("Y-m-d h:m:i"),
            'groups_role' => 'founder',
        ]);

        //Activity record
        activity::create([
            'users_id' => 1,
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

            if($request->hasFile('message_image')){
                //Validate image.
                $this->validate($request, [
                    'message_image'     => 'required|image|mimes:jpeg,png,jpg|max:5000',
                ]);

                //Store image.
                $image = $request->file('message_image');
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
            'users_id' => 1, //For now.
            'activity_from' => $id,
            'activity_type' => 'group',
            'activity_description' => 'modified group profile',
            'created_at' => date("Y-m-d h:m:i"),
            'updated_at' => date("Y-m-d h:m:i"),
        ]);

        //Show record to group chat
        message::create([
            'users_id' => 1, //For now
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
        message::destroy($id);
        return redirect('/community')->with('success_message', 'Message unsend');
    }
}
