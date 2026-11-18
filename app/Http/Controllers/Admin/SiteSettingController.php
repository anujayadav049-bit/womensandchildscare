<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\File;

class SiteSettingController extends Controller
{
    public function edit()
    {
        $settings = SiteSetting::firstOrCreate(['id' => 1]);
        return view('admin.settings.edit', compact('settings'));
    }

    public function update(Request $request)
    {
        $settings = SiteSetting::firstOrCreate(['id' => 1]);

        $allColumns = Schema::getColumnListing('site_settings');
        $data = [];
        foreach ($request->except(['_token', '_method', 'logo', 'logo2', 'logo3']) as $key => $value) {
            if (in_array($key, $allColumns)) {
                $data[$key] = $value;
            }
        }

        // Folder pehle se nahi hai to bana do - isse kabhi error nahi aayega
        File::ensureDirectoryExists(public_path('images'));

        if ($request->hasFile('logo') && in_array('logo', $allColumns)) {
            $file = $request->file('logo');
            $name = 'logo1.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $name);
            $data['logo'] = 'images/' . $name;
        }
        if ($request->hasFile('logo2') && in_array('logo2', $allColumns)) {
            $file2 = $request->file('logo2');
            $name2 = 'logo5.' . $file2->getClientOriginalExtension();
            $file2->move(public_path('images'), $name2);
            $data['logo2'] = 'images/' . $name2;
        }
        if ($request->hasFile('logo3') && in_array('logo3', $allColumns)) {
            $file3 = $request->file('logo3');
            $name3 = 'logo_footer.' . $file3->getClientOriginalExtension();
            $file3->move(public_path('images'), $name3);
            $data['logo3'] = 'images/' . $name3;
        }

        $settings->update($data);
        return back()->with('success', 'Header / Footer Updated Successfully!');
    }
}