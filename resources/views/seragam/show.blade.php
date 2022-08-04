@extends('layout.main')

@section('title', 'DETAIL SERAGAM')

@section('container')
    
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">Detail Seragam</h1>

                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">{{ $seragam->seragam }}</h5>
                      <h6 class="card-subtitle mb-2 text-muted">{{ $seragam->harga }}</h6>
                      <p class="card-text">{{ $seragam->ukuran }}</p>
                        <p>
                             <a href="{{ route('seragam.index') }}" class="card-link">kembali ke halaman sebelumnya</a>
                        </p>
                    </div>
                  </div>
          
@endsection





