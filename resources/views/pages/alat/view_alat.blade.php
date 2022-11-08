@extends('layout.master')

@section('content')
<div class="row">
  <div class="col-lg-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Kelola Alat</h4>
        <p class="card-description">
        
        <a href="{{ url('/alat/add_alat') }}" type="button" class="btn btn-danger">Tambah Data</a>
          
        </p>
        <div class="table-responsive pt-3">
        <table class="table table-dark">
            <thead>
              <tr>
                <th>
                  No
                </th>
                <th>
                  Nama
                </th>
                <th>
                  Kondisi
                </th>
                <th>
                  Stok
                </th>
                <th>
                  Persetujuan
                </th>
                <th>
                  Keterangan
                </th>
                <th>
                  Aksi
</th>

            
            
</tr>
</thead>
<tbody>
 
  <tr>
    <td>1</td>
    <td>Super Pel</td>
    <td>Baik</td>
    <td>3</td>
    <td> Ya </td>
 
    <td>Stok tinggal sedikit</td>
    <td>
      <a class="btn btn-success" href="{{ url('/alat/edit_alat') }}">Edit</a>
      <a class="btn btn-success" href="">Delete</a>
    </td>
</tr>

</tbody>
    
@endsection


