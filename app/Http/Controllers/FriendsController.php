<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Friend;

class FriendsController extends Controller
{
    //Show all friends contacts GET /friends (index)
    public function index() {
    	$friends = Friend::all();
    	return view('friends.index',compact('friends'));
    }

    //Create a new Friend GET /friend/create (create)
    public function create() {
    	return view('friends.create');
    }

    //Store Friend in a database POST /friends (store)
    public function store() {
    	$friend = new Friend;
    	$friend->fname = request('fname');
    	$friend->age = request('age');
    	$friend->gender = request('gender');
    	$friend->phone = request('phone');
    	$friend->about = request('about');
    	$friend->save();

    	return redirect ('/friends');
    }

    //Edit a single record GET /friends/{friend}/edit (edit)
    public function edit($id) {
    	$friend = Friend::find($id);
    	return view('friends.edit', compact('friend'));
    }

    //Update a Record PATCH /friends/{friend} (update)
    public function update($id) {
    	$friend = Friend::find($id);
    	$friend->fname = request('fname');
    	$friend->phone = request('phone');
    	$friend->about = request('about');
    	$friend->save();
    	return redirect('/friends');
    }
    
    //Show a Single Friend GET /friends/{friend}
    public function show($id) {
    	$friend = Friend::find($id);
    	return view ('friends.show',compact('friend'));
    }

    //Delete a Record Friend DELETE /friends/{friend}
    public function destroy ($id) {
    	$friend = Friend::find($id);
    	$friend->delete();
    	return redirect("/friends");
    }
}
