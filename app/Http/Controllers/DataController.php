<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DataController extends Controller
{
    public function index()
    {
         // Fetch the data from the 'users' table
         $users = User::select('name', 'email', 'color', 'age')->get();

         // Pass the data to the 'data' view
         return view('data', compact('users'));
    }

    public function create(Request $request)
    {
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('pass')),
            'color' => $request->input('color'),
            'age' => $request->input('age')
        ]);
        return redirect('/form');
    }
}
