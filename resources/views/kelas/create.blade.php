@extends('template.master')

@section('judul')
<h1>Manajemen Kelas</h1>
@endsection

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add new kelas</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/kelas" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="InputKelas">Nama kelas</label>
                    <input type="text" name="nama_kelas" class="form-control" id="InputKelas" placeholder="Enter Your Class">
                  </div>

                <div class="form-group">
                    <label for="InputJurusan">jurusan</label>
                    <input type="text" name="jurusan" class="form-control" id="InputJurusan" placeholder="Enter your jurusan">
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
@endsection