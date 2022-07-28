<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\recipe;
use App\Models\user;
use App\Models\activity;
use App\Models\socmed;
use App\Models\classroom;
use App\Models\likes;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Route;

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

        //Show user login data in profile.
        $userId = DB::table('users')
            ->where('username', session()->get('usernameKey'))->get();

        //Show user's groups in profile.
        $groupId = DB::table('groups-rel')
            ->select('groups_name', 'groups.created_at as created_at', 'groups.groups_type as groups_type', 'groups.users_id as founder_id')
            ->join('groups', 'groups.id', '=', 'groups-rel.groups_id')
            ->join('users', 'users.id', '=', 'groups-rel.users_id')
            ->where('username', session()->get('usernameKey'))
            ->orderBy('groups-rel.created_at', 'ASC')->get();

        return view ('community.index')
            ->with('user', $user)
            ->with('groupId', $groupId)
            ->with('userId', $userId);
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
    public function update(Request $request, $id)
    {
        //
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
