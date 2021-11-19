<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;

class BlogController extends Controller
{
    public function submit(BlogRequest $request) {

        $blog = new Blog();
        $blog->title = $request->input('title');
        $blog->photo = $request->input('photo');
        $blog->text = $request->input('text');
        $blog->author = $request->input('author');

        $blog->save();

        return redirect()->route('blog-add');


    }

    public function blogAll() {
        return view('blog_all', ['data' => Blog::all()]);
    }

    public function showOne($id) {
        $blog = new Blog();
        return view('blog_one', ['data' => $blog->find($id)]);

    }

    public function updateOne($id) {
        $blog = new Blog();
        return view('blog_update', ['data' => $blog->find($id)]);
    }

    public function updateOneSubmit($id, BlogRequest $request) {

        $blog = Blog::find($id);
        $blog->title = $request->input('title');
        $blog->photo = $request->input('photo');
        $blog->text = $request->input('text');
        $blog->author = $request->input('author');

        $blog->save();

        return redirect()->route('blog-one', $id)->with('success', 'Запись обновлена!');


    }
}
