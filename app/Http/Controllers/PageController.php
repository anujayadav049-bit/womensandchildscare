<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    public function edit($slug)
    {
        // Agar page DB me nahi hai to bana do
        $page = Page::firstOrCreate(
            ['slug' => $slug],
            ['title' => ucfirst($slug).' Page', 'content' => '']
        );

        return view('admin.pages.edit', compact('page'));
    }

    public function update(Request $request, $slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();

        // Jo bhi form me aaya, sab save kar do
        $data = $request->except(['_token', '_method']);
        $page->update($data);

        return back()->with('success', ucfirst($slug).' Page Updated Successfully!');
    }
}