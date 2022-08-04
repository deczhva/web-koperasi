<?php

namespace App\Http\Controllers;

use App\Models\seragam;
use Illuminate\Http\Request;

class SeragamController extends Controller
{
    
    public function index(Request $request)
    {
        if($request->has('search')){
            $data['seragams'] = seragam::where('seragam', 'LIKE', '%' .$request->search. '%')->paginate(5);
        } else if ($request->has('asc')) {
            $data['seragams'] = seragam::orderBy('seragam', 'asc')->paginate(5);
        }  else if ($request->has('desc')) {
            $data['seragams'] = seragam::orderBy('seragam', 'desc')->paginate(5);
        } else {
            $data['seragams'] = seragam::paginate(5);
        }
        return view('seragam.index', $data);
    }

   
    public function create()
    {
        return view('seragam.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'seragam' => 'required',
            'harga' => 'required',
            'ukuran' => 'required'
        ]);
      
        seragam::create($request->all());
       
        return redirect()->route('seragam.index')
                        ->with('success','Data seragam berhasil ditambahkan.');
    }

    
    public function show(seragam $seragam)
    {
        return view('seragam.show',compact('seragam'));
    }

   
    public function edit(seragam $seragam)
    {
        return view('seragam.edit',compact('seragam'));
    }

    
    public function update(Request $request, seragam $seragam)
    {
        $request->validate([
            'seragam' => 'required',
            'harga' => 'required',
            'ukuran' => 'required'
        ]);
      
        $seragam->update($request->all());
      
        return redirect()->route('seragam.index')
                        ->with('success','Data seragam berhasil diedit');
    }

    
    public function destroy(seragam $seragam)
    {
        $seragam->delete();
       
        return redirect()->route('seragam.index')
                        ->with('success','Data seragam berhasil dihapus');
    }
}
