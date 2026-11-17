<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function edit($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();
        return view('admin.pages.edit', compact('page'));
    }
    public function update(Request $request, $slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();
        $page->update($request->only(['title','content','content2']));
        return back()->with('success','Page Updated!');
    }
}