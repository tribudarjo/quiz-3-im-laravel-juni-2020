@extends('layouts.master')



@section('content')
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush

<a href="{{ url('artikel/create') }}" class="btn btn-primary">Tambah Artikel</a>

<table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Judul Artikel</th>
                      <th>Isi Artikel</th>
                      <th>Slug</th>
                      <th>Tag Artikel</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  	<?php
                  	if(count($artikel) != 0){
                  		?>
                  	@foreach($artikel as $a)
                    <tr>
                      <td>{{ $a->id_artikel }}</td>
                      <td>{{ $a->artikel_judul }}</td>
                      <td>{{ $a->artikel_isi }}</td>
                      <td>{{ $a->artikel_slug }}</td>
                      <td>{{ $a->artikel_tag }}</td>
                      <td>
                      	<a href="artikel/{{ $a->id_artikel }}" class="btn btn-sm btn-success m-1">Detail</a>
                      	<a href="artikel/{{ $a->id_artikel }}/edit" class="btn btn-sm btn-warning m-1" name="edit">Edit</a>
                      	<form action="{{ url('artikel') }}/{{ $a->id_artikel }}" method="POST" style="display: inline;">
                      		@csrf
                      		@method('DELETE')
                      		<button type="submit" class="btn btn-sm btn-danger m-1">delete</button>
                      	</form>
                      </td>
                    </tr>
                    @endforeach
                    <?php
                  	}
              		else {
              			?>
              			<tr><td colspan="6">No Data</td></tr>
              		<?php
              	}?>
                  </tbody>
                </table>
@endsection
