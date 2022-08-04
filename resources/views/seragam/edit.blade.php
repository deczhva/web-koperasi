@extends('layout.main')

@section('title', 'FORM EDIT DATA SERAGAM')

@section('container')
    
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="my-5">Form Edit Data Seragam</h1>

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

                <form method="POST" action="{{ route('seragam.update',$seragam->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                      <label for="seragam" class="col-sm-2 col-form-label">Jenis Seragam</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control @error('seragam') is-invalid @enderror" id="seragam" name="seragam" value="{{ $seragam->seragam }}"">
                        @error('seragam')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                        <div class="row mb-3">
                            <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" value="{{ $seragam->harga }}">
                                    @error('harga')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="ukuran" class="col-sm-2 col-form-label">Ukuran</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control @error('ukuran') is-invalid @enderror" id="ukuran" name="ukuran" value="{{ $seragam->ukuran }}">
                                        @error('ukuran')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                        <button type="submit" class="btn btn-primary">kirim</button>
                </form>      
          
@endsection



