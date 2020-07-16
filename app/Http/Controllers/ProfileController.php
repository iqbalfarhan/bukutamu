<?php

namespace App\Http\Controllers;

use App\Jurusan;
use App\Siswa;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Show the form for editing the profile.
     *
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        $datas = [
            'jurusans' => Jurusan::all()
        ];
        return view('profile.edit', $datas);
    }

    /**
     * Update the profile
     *
     * @param  \App\Http\Requests\ProfileRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProfileRequest $request)
    {
        auth()->user()->update($request->all());

        return back()->withStatus(__('Profile successfully updated.'));
    }

    /**
     * Change the password
     *
     * @param  \App\Http\Requests\PasswordRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function password(PasswordRequest $request)
    {
        auth()->user()->update(['password' => Hash::make($request->get('password'))]);

        return back()->withPasswordStatus(__('Password successfully updated.'));
    }

    public function editdetail(Request $request)
    {
        if (auth()->user()->role == "2") {
            Guru::all();
        }
        elseif (auth()->user()->role == "3") {
            Siswa::find($request->siswa_id)->update(['tingkat' => $request->tingkat, 'jurusan_id' => $request->jurusan_id]);
        }

        return back();

    }
}
