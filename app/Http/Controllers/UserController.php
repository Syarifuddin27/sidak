<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Profile;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//         $user = Auth::user()->admin;

// // Get the currently authenticated user's ID...
//         // $id = Auth::id();

//         dd($user);
        $users = new User;
//         if (Auth::user()->admin == 1) {
//              $users = $users->all();
//         } 
        if (Auth::user()->admin == 1) {
            $users = $users->all();
        } else {
            $users = $users->where('admin', '=', '0')->get();
        }
        $users = $users;
        
        // $users = User::paginate(10);
        return view('users.index', compact('users', $users));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request['password']),
        ]);

        $profile = Profile::create([
            'user_id' => $user->id,
            'avatar' => 0
        ]);


        flashy()->success('Created User Successfully');
        return redirect('admin/users');
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
    public function edit(Request $request, User $user)
    {
        if ($user->admin == 1) {
            $user->admin = 0;
        } else {
            $user->admin = 1;
        }

        $user->save();

        //return redirect()->back();
        return redirect('admin/users');
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
        $user = User::find($id);
        $user->profile->delete();
        $user->delete();


        return redirect()->back();
    }
}
