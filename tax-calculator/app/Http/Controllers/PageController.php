<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class PageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function home()
    {
        $news = News::all();
        return view('admin', compact('news'));
    }

    public function store(Request $request)
    {
        $news = new News;
        $news->title = $request->title;
        $news->description = $request->description;
        $news->save();

        return back()->with('success');
    }

    public function update(Request $request, $id)
    {
        $news = News::find($id);
        $news->title = $request->title;
        $news->description = $request->description;
        $news->save();

        return back()->with('success');
    }

    public function destroy($id)
    {
        $news = News::find($id);
        $news->delete();

        return back()->with('success');
    }
}
