@extends('layout.main')

@section('title', 'SERAGAM')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-6">
                <h2 class="mt-3">DATA SERAGAM</h2>
            
                <a class="btn btn-primary mt-3" href="{{ route('seragam.create') }}">Tambah Data Seragam</a>
            
                <div class="row g-3 align-items-center mt-2">
                    <div class="col-auto">
                        <form action="/seragam">
                            <button class="btn btn-warning mr-4" type="submit" name="asc" style="color: white">ascending</button>
                            <button class="btn btn-success mr-4" type="submit" name="desc">descending</button>
                        </form>
                        <form action="/seragam" method="GET">
                            <input type="search" name="search" placeholder="cari siswa..." value="{{ old('cari')}}" class="form-control my-3">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success my-5">
            <p>{{ $message }}</p>
        </div>
    @endif


        <div class="col-20">
            <div class="table-responsive">
                <table class="table table-striped table-hover mt-3">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Jenis Seragam</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Ukuran</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($seragams as $seragam)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $seragam->seragam }}</td>
                                <td>{{ $seragam->harga }}</td>
                                <td>{{ $seragam->ukuran }}</td>
                                <td>
                                    <form action="{{ route('seragam.destroy',$seragam->id) }}" method="POST">
        
                                        <a class="btn btn-outline-warning" href="{{ route('seragam.show',$seragam->id) }}"">detail</a>
                        
                                        <a class="btn btn-outline-primary" href="{{ route('seragam.edit',$seragam->id) }}">edit</a>
                    
                                        @csrf
                                        @method('DELETE')
                        
                                        <button type="submit" class="btn btn-outline-danger">delete</button>
                                    </form>
                                </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            <div class="row text-center">
                {!! $seragams->links() !!}
            </div>
</div>



@endsection











