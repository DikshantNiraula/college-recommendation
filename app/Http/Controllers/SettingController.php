<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'phone_1' => 'required',
            'phone_2' => 'nullable',
            'address_1' => 'required',
            'address_2' => 'nullable',
            'email_1' => 'required|email',
            'email_2' => 'nullable|email',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'company_name' => 'required',
        ]);

        $setting = new Setting();

        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $setting->logo = $imageName;
        }

        $setting->phone_1 = $request->input('phone_1');
        $setting->phone_2 = $request->input('phone_2');
        $setting->address_1 = $request->input('address_1');
        $setting->address_2 = $request->input('address_2');
        $setting->email_1 = $request->input('email_1');
        $setting->email_2 = $request->input('email_2');
        $setting->company_name = $request->input('company_name');

        $setting->save();

        return redirect()->route('admin.admin.settings.index')
            ->with('success', 'Setting created successfully.');
    }

    public function edit(Setting $setting)
    {
        return view('admin.settings.edit', compact('setting'));
    }

    public function update(Request $request, Setting $setting)
    {
        $validatedData = $request->validate([
            'phone_1' => 'required',
            'phone_2' => 'nullable',
            'address_1' => 'required',
            'address_2' => 'nullable',
            'email_1' => 'required|email',
            'email_2' => 'nullable|email',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'company_name' => 'required',
        ]);

        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $setting->logo = $imageName;
        }
        $data= $request->all();
        $setting->fill($data);

        $setting->save();

        return redirect()->back()
            ->with('success', 'Setting updated successfully.');
    }
}
   
