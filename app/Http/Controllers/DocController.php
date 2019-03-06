<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Doc;

class DocController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('docs.index')->with('docs', Doc::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        if (Auth::user()->admin == 1) {
            return view('docs.create');
        } else {
            return redirect()->back();
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'doc' => 'required'
        ]);

        Doc::create([
            'doc' => $request->doc
        ]);
            flashy()->success('Dokument berhasil ditambah');
        // Alert::success('Dokument berhasil ditambah');
        // flashy()->success('Dokumen Berhasil Ditambah');

        return redirect('/admin/docs');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Doc  $doc
     * @return \Illuminate\Http\Response
     */
    public function show(Doc $doc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Doc  $doc
     * @return \Illuminate\Http\Response
     */
    public function edit(Doc $doc)
    {
        return view('docs.edit', compact('doc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Doc  $doc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doc $doc)
    {

        Request()->validate([
            'doc' => 'required'
        ]);
        $doc->update($request->all());

        flashy()->success('Dokument berhasil Edit');

        return redirect()->route('docs.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Doc  $doc
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doc $doc)
    {
        Doc::destroy($doc);
        flashy()->success('Dokument berhasil dihapus');
        return redirect()->back();
    }
}
