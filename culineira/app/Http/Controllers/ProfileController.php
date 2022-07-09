<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\recipe;
use App\Models\comment;
use App\Models\user;
use App\Models\steps;
use App\Models\likes;
use App\Models\ingredients;
use Illuminate\Support\Facades\DB;
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
        $userId = DB::table('users')->where('username', session()->get('usernameKey'))->get();
        $steps = DB::table('steps')->orderBy('id', 'ASC')->get();
        $ingredients = ingredients::all();

        return view ('ProfilePage')
        ->with('userId', $userId)
        ->with('recipe', $recipe)
        ->with('user', $user)
        ->with('steps', $steps)
        ->with('ingredients', $ingredients);
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
