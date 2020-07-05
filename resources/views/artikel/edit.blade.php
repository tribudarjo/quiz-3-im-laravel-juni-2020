@extends('layouts.master');

@section('content')<div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">
<div class="row">
<div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Edit Artikel</h1>
                  </div>
                  <form action="{{ url('artikel')}}/{{ $artikel->id_artikel }}" method="POST">
                  	@csrf
                  	@method('PUT')
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="artikel_judul" placeholder="Masukkan judul artikel" value="{{ $artikel->artikel_judul }}">
                    </div>
                    <div class="form-group">
                    	<textarea class="form-control form-control-user" name="artikel_isi" placeholder="Masukkan artikel">{{ $artikel->artikel_isi }}</textarea>
                    </div>
                    <div class="form-group">
                    	<label>Pilih Tag</label><br>
                    		<input type="radio" name="artikel_tag" class="form-control-user" value="hobi" {{ $artikel->artikel_tag == 'hobi' ? 'selected' : '' }}><label>Hobi</label><br>
                    		<input type="radio" name="artikel_tag" class="form-control-user" value="makanan" {{ $artikel->artikel_tag == 'makanan' ? 'selected' : '' }}><label>Makanan</label>
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