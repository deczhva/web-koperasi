@extends('layout.main')

@section('title', 'SISWA')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-6">
                <h2 class="mt-3">DATA SISWA</h2>
            
                <a class="btn btn-primary mt-3" href="{{ route('students.create') }}">Tambah Data Siswa</a>
            
                <div class="row g-3 align-items-center mt-2">
                    <div class="col-auto">
                        <form action="/students">
                            <button class="btn btn-warning mr-4" type="submit" name="asc" style="color: white">ascending</button>
                            <button class="btn btn-success mr-4" type="submit" name="desc">descending</button>
                        </form> 
                        <form action="/students" method="GET">
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
                            <th scope="col">Nama</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">NIS</th>
                            <th scope="col">Kelas Jurusan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($students as $student)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->jk }}</td>
                                <td>{{ $student->nis }}</td>
                                <td>{{ $student->kelas }}</td>
                                <td>
                                    <form action="{{ route('students.destroy',$student->id) }}" method="POST">
        
                                        <a class="btn btn-outline-warning" href="{{ route('students.show',$student->id) }}">detail</a>
                        
                                        <a class="btn btn-outline-primary" href="{{ route('students.edit',$student->id) }}">edit</a>
                
                                        @csrf
                                        @method('DELETE')
                        
                                        <button type="submit" class="btn btn-outline-danger">hapus</button>
                                    </form>
                                </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            <div class="row text-center">
            {!! $students->links() !!}
        </div>
</div>



@endsection