<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Http\Requests\StoreSettingRequest;
use App\Http\Requests\UpdateSettingRequest;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setting = Setting::findORFail(1);
        return view('admin.settings.index', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSettingRequest $request, Setting $setting)
    {
        $setting->update($request->validated());
        return back()->with('success', __('keywords.settings_updated_successfully'));
    }

}
