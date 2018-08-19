<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comments;
use App\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index()
   {
        $id = Auth::id();
       $comments = Comments::where('user_id', $id)->get()->toArray();
       return view('home', compact('comments'));

   }
   public function store(Request $request)
   {
    $userId=$request->user()->id;
       $value = $request->value;
       $userName = User::where('id', $userId)->first();

       $comment = [
           'value' => $value,
           'user_id' => $userId,
           'user_name' => $userName->name,
       ];

       Comments::create($comment);
       return redirect('home');

   }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
}

