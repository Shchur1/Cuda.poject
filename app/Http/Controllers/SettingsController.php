<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Settings;
use Illuminate\Support\Facades\Lang;

class SettingsController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth:admin');
    }

    public function index() {
        $get_settings = new Settings;
        $settings = $get_settings->getSettings();
        return view('admin.settings_list', compact('settings'));
    }

    public function store(Request $request) {
        $request->validate([
            'site_name' => 'required|string|max:191',
            'admin_email' => 'required|string|email|max:191',
            'default_meta_keywords' => 'required|string|max:191',
            'default_meta_description' => 'required|string|max:191',
        ]);

        Settings::where('key', 'site_name')
            ->update(['value' => $request->site_name]);
        Settings::where('key', 'admin_email')
            ->update(['value' => $request->admin_email]);
        Settings::where('key', 'default_meta_keywords')
            ->update(['value' => $request->default_meta_keywords]);
        Settings::where('key', 'default_meta_description')
            ->update(['value' => $request->default_meta_description]);

        return redirect()->back()->with(['message' => Lang::get('messages.updated_settings')]);
    }
}
