<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobs;

class JobsController extends Controller
{
    public function index()
    {
         // Fetch the data from the 'users' table
         $Jobs = jobs::select('position', 'company', 'salary')->get();

         // Pass the data to the 'data' view
         return view('jobs', compact('Jobs'));
    }

}
