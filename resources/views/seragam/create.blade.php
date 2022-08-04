@extends('layout.main')

@section('title', 'FORM TAMBAH DATA SERAGAM')

@section('container')
    
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="my-5">Form Tambah Data Seragam</h1>

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

                <form method="POST" action="{{ route('seragam.store') }}">
                    @csrf
                    <div class="row mb-3">
                        <label for="seragam" class="col-sm-2 col-form-label">Jenis Seragam</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="seragam" name="seragam" placeholder="Masukkan jenis seragam">
                        </div>
                    </div>
                        <div class="row mb-3">
                            <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="harga" name="harga" placeholder="Masukkan harga">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="ukuran" class="col-sm-2 col-form-label">Ukuran</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="ukuran" name="ukuran" placeholder="Masukkan ukuran">
                                    </div>
                                </div>

                        <button type="submit" class="btn btn-primary" >kirim</button>
                </form>      
          
@endsection







