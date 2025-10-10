<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class PasswordController extends Controller
{
    public function index(){
        return view('pages.admin.settings');
    }
    /**
     * Update the user's password.
     */
    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validateWithBag('updatePassword', [
            'current_password' => ['required', 'current_password'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);

        try{
            $request->user()->update([
            'password' => Hash::make($validated['password']),
            ]);

            return redirect()->back()->with('success', 'Your password has been updated successfully.');
        }catch(\Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
