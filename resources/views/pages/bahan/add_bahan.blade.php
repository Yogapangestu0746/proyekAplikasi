@extends('layout.master')

@section('content')
<nav class="page-breadcrumb">
  
</nav>

<div class="row">
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Tambah Data Bahan</h6>
        <form class="forms-sample">
          <div class="form-group">
            <label for="exampleInputUsername1">ID</label>
            <input type="" class="form-control" id="" autocomplete="off" placeholder="ID">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="email" class="form-control" id="" placeholder="Nama">
          </div>
          <div class="from-group">
       
            <label for="exampleInputEmail1">Kondisi</label>
            <input type="email" class="form-control" id="" placeholder="Kondisi">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Stok</label>
            <input type="" class="form-control" id="exampleInputPassword1" autocomplete="off" placeholder="Stok">
          </div>
          <div class="form-check form-check-flat form-check-primary">

          <div class="form-group">
          <label>Persetujuan</label>
          <select class="form-control form-control-sm mb-3">
            <option selected>Pilih Persetujuan</option>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
        </div>


          <div class="form-group">
            <label for="exampleInputPassword1">Keterangan</label>
            <input type="" class="form-control" id="exampleInputPassword1" autocomplete="off" placeholder="Keterangan">
          </div>
          <div class="form-check form-check-flat form-check-primary">
           
          </div>
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>

  @endsection