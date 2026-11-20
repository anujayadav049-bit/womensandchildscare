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

    $data = $request->except(['_token', '_method', 'hero_image']);

    if ($request->hasFile('hero_image')) {
        $file = $request->file('hero_image');
        $name = 'hero-' . time() . '.' . $file->getClientOriginalExtension();

        $destination = public_path('images/banner');
        if (!is_dir($destination)) {
            mkdir($destination, 0777, true);
        }

        // move() ki jagah copy() - Permission wali problem bypass ho jayegi
        copy($file->getRealPath(), $destination . '/' . $name);

        $data['hero_image'] = 'images/banner/' . $name;
    }

    $page->update($data);

    return back()->with('success', ucfirst($slug).' Page Updated Successfully!');
}
}