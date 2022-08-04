@extends('layout.main')

@section('title', 'FORM TAMBAH DATA SISWA')

@section('container')
    
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="my-5">Form Tambah Data Siswa</h1>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> Sepertinya ada yang salah dengan inputan anda.<br><br>
                        <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('students.store') }}">
                    @csrf
                    <div class="row mb-3">
                      <label for="name" class="col-sm-2 col-form-label">Nama</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama">
                      </div>
                    </div>
                    
                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jk" id="jk" value="perempuan">
                                    <label class="form-check-label" for="jk">Perempuan</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jk" id="jk" value="laki-laki">
                                    <label class="form-check-label" for="jk">Laki-Laki</label>
                                </div>
                            </div>
                        </fieldset>

                        <div class="row mb-3">
                            <label for="nis" class="col-sm-2 col-form-label">NIS</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nis" name="nis" placeholder="Masukkan nis">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="kelas" class="col-sm-2 col-form-label">Kelas Jurusan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Masukkan kelas jurusan">
                                    </div>
                                </div>

                        <button type="submit" class="btn btn-primary">kirim</button>
                </form>      
          
@endsection
