<?php

namespace App\Http\Controllers;

use App\Tamu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TamuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tanggal = $request->tanggal ?? now();

        $datas = [
            'tanggal' => $tanggal,
            'datas' => Tamu::orderBy('created_at', 'DESC')->whereDate('created_at', $tanggal)->get()
        ];
        return view('tamu.index', $datas);
    }

    public function getall()
    {
        $datas = [
            'datas' => Tamu::all()
        ];
        return view('tamu.getall', $datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tamu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $base64_image = $request->snapphoto;

        //return $base64_image;

        if ($base64_image) {
            $filename = uniqid();

            if (preg_match('/^data:image\/(\w+);base64,/', $base64_image)) {
                $data = substr($base64_image, strpos($base64_image, ',') + 1);

                $data = base64_decode($data);
                Storage::disk('local')->put('evidence/'.$filename.".jpg", $data);
                $upload = 'evidence/'.$filename.'.jpg';
            }
        }

        $datainsert = [
            'name' => $request->name,
            'phone' => $request->phone,
            'meet_who' => $request->meet_who ?? "-",
            'purpose' => $request->purpose,
            'photo' => $upload ?? "",
            'masuk' => now()
        ];
        Tamu::create($datainsert);
        return redirect()->route('tamu.index');

        //return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tamu  $tamu
     * @return \Illuminate\Http\Response
     */
    public function show(Tamu $tamu)
    {
        $datas = [
            'data' => $tamu
        ];

        return view('tamu.show', $datas);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tamu  $tamu
     * @return \Illuminate\Http\Response
     */
    public function edit(Tamu $tamu)
    {
        $datas = [
            'data' => $tamu
        ];
        return view('tamu.edit', $datas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tamu  $tamu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tamu $tamu)
    {
        $base64_image = $request->snapphoto;

        //return $base64_image;

        if ($base64_image) {
            $filename = uniqid();

            if (preg_match('/^data:image\/(\w+);base64,/', $base64_image)) {
                $data = substr($base64_image, strpos($base64_image, ',') + 1);

                $data = base64_decode($data);
                Storage::disk('local')->put('evidence/'.$filename.".jpg", $data);
                $upload = 'evidence/'.$filename.'.jpg';
            }
        }

        $dataupdate = [
            'name' => $request->name,
            'phone' => $request->phone,
            'meet_who' => $request->meet_who ?? "-",
            'purpose' => $request->purpose,
            'photo' => $upload ?? $tamu->photo,
        ];
        Tamu::find($tamu->id)->update($dataupdate);
        return redirect()->route('tamu.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tamu  $tamu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tamu $tamu)
    {
        Storage::delete($tamu->photo);
        Tamu::find($tamu->id)->delete();
        return back();
    }

    public function keluar(Request $request, Tamu $tamu)
    {
        Tamu::find($tamu->id)->update($request->all());
        return redirect()->route('tamu.index');
    }
}
