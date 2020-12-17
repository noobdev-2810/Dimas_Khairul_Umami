<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class Beritacontroller extends Controller
{

    public function index()
    {
        $beritas = Berita::all(); // select * from berita

        return view('berita.index',compact('beritas'));
    }


    public function create()
    {
        return view('berita.create');
    }

    public function store(Request $request)
    {
        $input=$request->all();

        Berita::create($input); // insert into ... ... 
        
        return redirect()->route('berita.index');
    }
   
    public function show($id)
    {
        $berita=Berita::find($id);
        return view ('berita.show',compact ('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(Berita $berita)
    {
            
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Berita $berita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita $berita)
    {
        //
    }
}
