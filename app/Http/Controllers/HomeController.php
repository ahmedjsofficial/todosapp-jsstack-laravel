<?php

namespace App\Http\Controllers;


use App\Models\Todo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */    
    
    public function index()
    {

        // $user_id = Auth::user()->id;
        // $user = User::find($user_id);
        // return view('dashboard')->with('posts', $user->posts);

        
        $user_id = Auth::user()->id;
        $user = User::find($user_id);
        $allTodos = Todo::latest()->get();
        return view('home')->with('todos', $user->todos, $allTodos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create(){}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $todo = Todo::create([ 'title' => $request->title, 'completed' => 0, ]);

        $this->validate($request, ['title' => 'required|max:1999']);
        $todo = new Todo;
        $todo->title = $request->input('title');
        $todo->user_id = auth()->user()->id;
        $todo->save();
        return redirect('/home')->with("success", $todo);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id){}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     $todo = ModelsPost::find($id);
    //     if(auth()->user()->id !== $todo->user_id){
    //     return redirect('/home')->with('error', 'Please Register Your Account TO Perfom This Actions');
    //     }
    //     return view('/home')->with('posts', $todo);
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $todo = Todo::find($id);
        if($todo) {
            $todo->completed = $request->completed ? true : false;
            $todo->save();
            // return $todo; fetch - backend api
            return redirect('/home')->with("success", $todo);
        }

        return "Todo could not update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todo = Todo::find($id);

        if($todo){
            $todo->delete();

            return redirect("/home")->with("success", $todo);
        }

        return "Todo Could Not Deleted";
    }    
}
