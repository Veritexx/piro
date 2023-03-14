<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->get();

        return view('users.index', compact('users'));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',

        ]);



        $hash = randomString();

        $user = new User();
        $user->user_id = $request->user_id;
        $user->lastname = $request->lastname;
        $user->firstname = $request->firstname;
        $user->job_title = $request->job_title;
        $user->department = $request->department;
        $user->company = $request->company;
        $user->location = $request->location;
        $user->email = $request->email;
        $user->description = $request->description;
        $user->user_hash = $hash;

        $user->save();

        return redirect()->route('users.index')
            ->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function show($hash)
    {
        $user = User::where('user_hash', $hash)->first();

        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function edit($hash)
    {
        $user = User::where('user_hash', $hash)->first();

        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $hash)
    {

        $request->validate([
            'user_id' => 'required',
        ]);

        User::where('user_hash', $hash)->update([
            'user_id' => $request->user_id,
            'lastname' => $request->lastname,
            'firstname' => $request->firstname,
            'job_title' => $request->job_title,
            'department' => $request->department,
            'company' => $request->company,
            'location' => $request->location,
            'email' => $request->email,
            'description' => $request->description

        ]);

        return redirect()->route('users.index')
            ->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($hash)
    {
        $user = User::where('user_hash', $hash)->first();
        $user->delete();

        return redirect()->route('users.index')
            ->with('success', 'User deleted successfully');
    }
}
