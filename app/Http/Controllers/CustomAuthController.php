<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\City;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

/**
 * User
 */
class CustomAuthController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        // render 
        return view(
            'user.dashboard'
        );
    }

    /**
     * Log in the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login() {
        if (Auth::check()) {
            return redirect(
                route('dashboard')
            );
        }
        else {
            // render 
            return view(
                'user.login'
            );
        }
    }

    /**
     * Authenticate the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request) {
        // validate 
        $request->validate([
            'email' => 'required|exists:users',
            'password' => 'required', 
        ]);
        
        $credentials = $request->only('email', 'password');
        
        if(! Auth::validate($credentials)):
            return redirect()->back()->withErrors(trans('passwords.password'))->withInput();
        endif;
        
        // auth session 
        $user = Auth::getProvider()->retrieveByCredentials($credentials);
        Auth::login($user);
        
        // redirect 
        return redirect()->intended(route('dashboard'));
    }

    /**
     * Log out the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout() {
        // logout 
        Auth::logout();
        
        // redirect 
        return redirect(route('login'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register() {
        // render 
        return view(
            'user.register'
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        // validate 
        $request->validate( [
            'name' => 'required|min:2|max:50|exists:students,name', 
            'email' => 'required|email|exists:students,email|unique:users', 
            'password' => 'required|min:6|max:20', 
        ] );
        
        // save user 
        $user = new User;
        $user->fill($request->all());
        $user->password = Hash::make($request->password);
        $user->save();
        
        // save user_id (student) 
        $student = Student::select()->where('email', $user->email)->first();
        $student->user_id = $user->id;
        $student->save();
        
        // redirect 
        return redirect(route('login'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user) {
        // render 
        return view(
            'user.show', [
                'user' => $user, 
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user) {
        // data
        $cities = City::all();
        
        // render 
        return view(
            'user.edit', [
                'user' => $user, 
                'cities' => $cities, 
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user) {
        // validate 
        $request->validate( [
            Rule::unique('students')->ignore($request->id, 'id'), 
            'name' => 'required|min:2|max:50', 
            'birthday' => 'required', 
            'email' => 'required|email|max:60', 
            'phone' => 'required|min:6|max:20', 
            'address' => 'required|max:70', 
            'city_id' => 'required', 
        ] );
        
        // student 
        $student = $user->student;
        
        // format 
        $student->fill($request->all());
        $user->username = $request->email;
        
        // save 
        $student->save();
        $user->save();
        
        // redirect 
        return redirect(
            route('user.show', $user->id)
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user) {
        // logout if user is connected 
        if (Auth::id() == $user['id']) {
            Auth::logout();
        }
        
        // delete user 
        $user->delete();
        
        // redirect 
        return redirect(route('login'));
    }

}
