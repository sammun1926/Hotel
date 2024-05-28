<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;


    class AdminController extends Controller
{
        public function index()
    {
        if(Auth::id())
        
        {
            $usertype = Auth()->user()->usertype;

            if ($usertype == 'User')
            {
                return view('dashboard');
            }

            else if ($usertype == 'admin')
            {
                return view('admin.index');
            }
            
            
        }
     }
 }
