<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Session;

class HomeController extends Controller
{
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
    public function index()
    {
        return view('home');
    }

    public function Message(){
        $data = Blog::orderBy('id','desc')->get();
      //  dd($data); // explain all the data in our database

        return view ('Message', compact('data'));
    }

    public function submitmessage(Request $request){
        $request->validate([
            'title'=> 'required',
            'body' => 'required'

        ]);
Blog::create([
    'title'=>$request['title'],
    'body'=>$request['body'],
]);
Session::flash('Success','Submitted succesfully');
return redirect('messageall');

    }


    function messageall(){
        return view('messageall');
    }

    function addmessage(){
        return view('addmessage');
    }



function edit($id){
    $data = Blog::where('id',$id)->get();
    return view('edit', compact('data'));
}

function updatemessage(Request $request){

$request->validate([

    'title'=> 'required',
    'body'=>'required'

]);
Blog::where('id',$request['id'])
->update([
    'title'=>$request['title'],
    'body'=>$request['body']

]);

Session::flash('Success','Record Updated Succesfully');
return redirect('Message');


}


public function delete($id){

Blog::where('id',$id)->delete();

Session::flash('error','Record Deleted Succesfully');

return redirect('Message');
}











}
