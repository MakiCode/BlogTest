<?php

namespace App\Http\Controllers;

use App\BlogPost;
use App\Http\Requests;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogPostController extends Controller
{

    use ValidatesRequests;

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {

        $allPosts = BlogPost::orderBy('created_at', 'desc')->paginate(15);

        if ($request->ajax() || $request->wantsJson()) {
            return $allPosts;
        }

        return view("blog.all", ['posts' => $allPosts]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        BlogPost::create([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'user_id' => Auth::user()->id
        ]);

        return redirect("/");
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        try {
            return view("blog.one", ['post' => BlogPost::findOrFail($id)]);
        } catch (ModelNotFoundException $e) {
            abort(404);
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        try {
            $post = BlogPost::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
        return view('blog.update', ['post' => $post]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'max:255',
        ]);
        try {
            $post = BlogPost::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
        $post->title = $request->has('title') ? $request->input('title') : $post->title;
        $post->body = $request->has('body') ? $request->input('body') : $post->body;

        $post->save();

        return redirect("/" . $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        BlogPost::destroy($id);

        return view('blog.delete');
    }
}
