<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\User;

class PostController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $posts = Post::orderBy('id','DESC')->paginate(5);
        $posts = $request->user()->posts()->orderBy('id','DESC')->paginate(5);
        return view('posts.index',compact('posts'))            
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);

    	$request->user()->posts()->create([
    		'title' => $request->title,
    		'description' => $request->description,    		
    		]);
        
        return redirect()->route('posts.index')                        
                        ->with('success','Post created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {    	
        $post = Post::find($id);
        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);

		$request->user()->posts()->update([
    		'title' => $request->title,
    		'description' => $request->description,    		
    		]);


        return redirect()->route('posts.index')
                        ->with('success','Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::find($id)->delete();
        return redirect()->route('posts.index')
                        ->with('success','Post deleted successfully');
    }
}
