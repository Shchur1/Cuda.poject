<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth:admin');
    }

    public function index() {
        $admin_data = new Admin;
        $admin = $admin_data->getAuthenticatedAdmin();

        return view('admin.profile_list', compact('admin'));
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:191',
            'avatar' => 'required|string|max:191',
        ]);

        $admin = new Admin;
        $adminObj = $admin->getAuthenticatedAdmin();
        $admin->updateAdmin($adminObj->id, $request);
        return redirect()->back();
    }

    public function destroy($id) {
        $admin = Admin::findOrFail($id);
        $admin->avatar = null;
        $admin->save();

        return redirect()->back()->with(['message' => Lang::get('messages.entry_deleted')]);
    }
}
