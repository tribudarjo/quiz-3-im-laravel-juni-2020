@extends('layouts.master')

@section('content')
<div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">
<div class="row">
<div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Form Artikel</h1>
                  </div>
                  <form action="{{ url('artikel') }}" method="POST">
                  	@csrf
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="artikel_judul" placeholder="Masukkan judul artikel">
                    </div>
                    <div class="form-group">
                    	<textarea class="form-control form-control-user" name="artikel_isi" placeholder="Masukkan artikel"></textarea>
                    </div>
                    <div class="form-group">
                    	<label>Pilih Tag</label><br>
                    		<input type="radio" name="artikel_tag" class="form-control-user" value="hobi" selected><label>Hobi</label><br>
                    		<input type="radio" name="artikel_tag" class="form-control-user" value="makanan"><label>Makanan</label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Tambah Artikel
                    </button>
                  </form>
                </div>
              </div>
</div>
</div>
</div>
@endsection