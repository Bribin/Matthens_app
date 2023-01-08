<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users =  User::orderBy('created_at','DESC')->paginate(10);
        $data = [
            'page_title' => 'Manage Users'
        ];

        return view('dashboard.users.index',compact('users'),$data );
    }

    public function mentors()
    {

        $users =  User::where('type','1')->orderBy('created_at','DESC')->paginate(10);
        $data = [
            'page_title' => 'Manage Users'
        ];

        return view('dashboard.users.index',compact('users'),$data );
    }



}
