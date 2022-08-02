<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Models\recipe;
use App\Models\user;
use App\Models\feedback;
use App\Models\review;
use App\Models\socmed;
use App\Models\preferred;
use App\Http\Controllers\RecipeController;


class LandingController extends Controller
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
        $review = DB::table('review')
            ->join('users', 'users.id', '=', 'review.users_id')
            ->select('users.username as username','review.review_body as body','users.created_at as joined')
            ->limit(3)
            ->get();

        return view ('landing.index')->with('recipe', $recipe)->with('user', $user)->with('review', $review);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //Create Account validator
        $validator = Validator::make($request->all(), [
            'username' => 'required|max:20|min:5',
            'email' => 'required|email|unique:users',
            'password' => 'required|max:20|min:5',
            'description' => 'required|max:200',
            'country' => 'required',
            'recipe_type_preferred' => 'required',
            'image_url' => 'required',
        ]);

        if (!$validator->fails()) {
            //Check username avaiability
            $check = DB::table('users')
                ->select()
                ->where('username', $request-> username)
                ->get();

            //Validate image
            $this->validate($request, [
                'image_url'     => 'required|image|mimes:jpeg,png,jpg|max:5000',
            ]);

            //Upload image
            $image = $request->file('image_url');
            $image->storeAs('public', $image->hashName());
            $imageURL = $image->hashName();

            if(count($check) == 0){
                //User data.
                $user_id = user::create([
                    'username' => $request-> username,
                    'email' => $request-> email,
                    'password' => $request-> password,
                    'description' => $request-> description,
                    'country' => $request-> country,
                    'image_url' => $imageURL,
                    'created_at' => date("Y-m-d h:m:i"),
                    'updated_at' => date("Y-m-d h:m:i"),
                ]);

                //Preferred data.
                $name_count = count($request->recipe_type_preferred);
                for($j=0; $j < $name_count; $j++){
                    preferred::create([
                        'users_id' => $user_id->id,
                        'recipe_type_preferred' => $request->recipe_type_preferred[$j],
                        'created_at' => date("Y-m-d h:m:i"),
                        'updated_at' => date("Y-m-d h:m:i"),
                    ]);
                }

                //Socmed data.
                socmed::create([
                    'users_id' => $user_id->id,
                    'socmed_facebook' => "null",
                    'socmed_youtube' => "null",
                    'socmed_tiktok' => "null",
                    'socmed_instagram' => "null",
                    'socmed_linkedin' => "null",
                    'created_at' => date("Y-m-d h:m:i"),
                    'updated_at' => date("Y-m-d h:m:i"),
                ]);

                //Pass session data.
                $request->session()->put('usernameKey', $request-> username);
                $request->session()->put('idKey', $user_id->id);
                $request->session()->put('passwordKey', $request-> password);
                return redirect()->route('recipe');
            } else {
                return redirect()->back()->with('failed_message', 'Username already been taken');
            }
        } else {
            return redirect()->back()->with('failed_message', 'Validation failed!, please check your data');
        }
    }

    public function login(Request $request)
    {
        $check = DB::table('users')
            ->select()
            ->where('username', $request-> username)
            ->where('password', $request-> password)
            ->get();
        if(count($check) != 0){
            //Get id
            foreach($check as $c){
                $id = $c->id;
            }

            $request->session()->put('idKey', $id);
            $request->session()->put('usernameKey', $request-> username);
            $request->session()->put('passwordKey', $request-> password);
            return redirect()->route('recipe');
        } else {
            return redirect()->back()->with('failed_message', 'Wrong username or password');
        }
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
    public function postFeedback(Request $request)
    {
        feedback::create([
            'feedback_body' => $request-> feedback_body,
            'created_at' => date("Y-m-d h:m:i"),
            'updated_at' => date("Y-m-d h:m:i"),
        ]);
        return redirect('/')->with('success_message', 'Feedback was posted!');
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
