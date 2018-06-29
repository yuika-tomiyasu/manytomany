<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Message;

class UsersController extends Controller
{
    public function index(){
        $users = User::all();
        return view('users.index',[
            'users' => $users,
            ]);
    }
    
    public function show(){
        $user = User::find($id);
        $messages = $user->messages()->orderBy('created_at', 'desc')->paginate(10);
        
        $data = [
            'user'=>$user,
            'messages'=>$messages,
            ];
            
        $data += $this->counts($user);
        return view(users.show, $data);
    }

    

}
