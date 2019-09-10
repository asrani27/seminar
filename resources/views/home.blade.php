@extends('layouts.master')

@push('add_css')

@endpush

@section('title')
<div class="app-title">
  <div>
    <h1><i class="fa fa-dashboard"></i> Beranda</h1>
    <p>Selamat Datang Di Aplikasi</p>
  </div>
</div>
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="tile-body">
        <h3 class="tile-title">Data Pendaftar</h3>
        <div class="table-responsive">
        <table class="table table-hover table-bordered" id="sampleTable">
          <thead>
            <tr>
              <th>No</th>
              <th>Tiket</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>Gender</th>
              <th>Status</th>
              <th>Instansi</th>
              <th>Jabatan</th>
              <th>Telp</th>
              <th>Email</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <?php
          $no = 1;
          ?>
          <tbody>
              @foreach ($data as $dt)
              <tr>
                <td>{{$no++}}</td>
                <td>#000{{$dt->id}}</td>
                <td>{{$dt->nama}}</td>
                <td>{{$dt->alamat}}</td>
                <td>{{$dt->jkel}}</td>
                <td>{{$dt->status}}</td>
                <td>{{$dt->instansi}}</td>
                <td>{{$dt->jabatan}}</td>
                <td>{{$dt->telp}}</td>
                <td>{{$dt->email}}</td>
                <td><a href={{url("registrasi/delete/{$dt->id}")}}>Delete</a></td>
              </tr>
              @endforeach
          </tbody>
        </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('add_js')
    <!-- Data table plugin-->
    <script type="text/javascript" src="{{url('vali/js/plugins/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{url('vali/js/plugins/dataTables.bootstrap.min.js')}}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
@endpush
