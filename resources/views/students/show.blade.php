@extends('layout.main')

@section('title', 'DETAIL SISWA')

@section('container')
    
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">Detail Siswa</h1>

                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">{{ $student->name }}</h5>
                      <h6 class="card-subtitle mb-2 text-muted">{{ $student->jk }}</h6>
                      <p class="card-text">{{ $student->nis }}</p>
                      <p class="card-text">{{ $student->kelas }}</p>

                        <a href="{{ $student->id }}/edit">
                            <button type="button" class="btn btn-primary">edit</button>
                        </a>
                        <form action="/students/{{ $student->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="button" class="btn btn-danger">delete</button>
                        </form>
                        <p>
                             <a href="{{ route('students.index') }}" class="card-link">kembali ke halaman sebelumnya</a>
                        </p>
                    </div>
                  </div>
          
@endsection
