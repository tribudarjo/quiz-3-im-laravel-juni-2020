<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\ArtikelModel;

class ArtikelController extends Controller
{
    public function artikel(){
    	$artikel = ArtikelModel::get_all();
    	return view('artikel.index', compact('artikel'));
    }

    public function create(){
    	return view('artikel.form');
    }

    public function store(Request $request)
    {
    	$data = [
    				'artikel_judul' => $request->artikel_judul,
    				'artikel_isi' => $request->artikel_isi,
    				'artikel_tag' => $request->artikel_tag,
    				'artikel_slug' => Str::slug($request->artikel_judul),
    				'artikel_id_user' => '1',
    				'created_at' => NOW()
    	];

    	$artikel = ArtikelModel::store($data);
    	return redirect('artikel');
    }

    public function detail($id_artikel)
    {
    	$artikel = ArtikelModel::detail_artikel($id_artikel);
 
    	return view('artikel.detail', compact('artikel'));
    }

    public function edit($id_artikel)
    {
    	$artikel = ArtikelModel::detail_artikel($id_artikel);
    	return view('artikel.edit', compact('artikel'));
    }

    public function update($id_artikel, Request $request)
    {
    	$artike = ArtikelModel::update($id_artikel, $request->all());
    	return redirect('artikel');
    }

    public function delete($id_artikel)
    {
    	$hapus = ArtikelModel::delete($id_artikel);
    	return redirect('artikel');
    }
}
