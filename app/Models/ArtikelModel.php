<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

/**
 * ArtikelModel.php
 */
class ArtikelModel
{
	public static function get_all(){
		$artikel = DB::table('artikel')->get();

		return $artikel;
	}

	public static function store($data)
	{
		$artikel = DB::table('artikel')->insert($data);
		return $artikel;
	}

	public static function detail_artikel($id_artikel)
	{
		$artikel = DB::table('artikel')
		->where('id_artikel', $id_artikel)
		->first();

		return $artikel;
	}

	public static function update($id_artikel, $request)
	{
		$artikel = DB::table('artikel')
		->where('id_artikel', $id_artikel)
		->update([
			'artikel_judul' => $request['artikel_judul'],
			'artikel_isi' => $request['artikel_isi'],
			'artikel_tag' => $request['artikel_tag'],
			'artikel_slug' => Str::slug($request['artikel_judul']),
			'updated_at' => NOW()
		]);
		return $artikel;
	}

	public static function delete($id_artikel)
	{
		$hapus = DB::table('artikel')
		->where('id_artikel', $id_artikel)
		->delete();
		return $hapus;
	}
}

?>