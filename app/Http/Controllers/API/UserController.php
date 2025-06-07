<?php

namespace App\Http\Controllers\API;
//import classes or functionalaties
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        return user::all();
    }

   

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        //
         $validated = $request->validated();
         $validated['password'] = Hash::make($validated['password']);

         $user = User::create($validated);

         return $user;
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
         return User::findOrFail($id);
    }

  

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $user =  User::findOrFail($id);
         $user ->delete();

         return $user;

    }
}
