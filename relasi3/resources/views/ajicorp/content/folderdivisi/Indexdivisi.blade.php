@extends('ajicorp.master')

@section('tilte'|'Index Divisi')

@section('ajicorp.content')
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        h2,table{
            text-align: center;
        }
        td{
            align-content: 
        }
    </style>
</head>
<body>
    
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="py-4">
                    <h2>Tabel Data Divisi Aji Corp</h2>
                </div>
                <a href="{{route('divisi.create')}}"><button class="btn btn-success">Tambah Divisi</button></a>
                <table class="table table-striped display" id="table_id">
                    <thead>
                        <tr>
                          <th>ID</th>
                          <th>Nama Divisi</th>
                          <th>Lokasi Divisi</th>
                          {{-- <th>Action</th> --}}
                        </tr>
                        
                    </thead>
                    <tbody>
                        @foreach ($data_divisi as $div)
                            <tr>
                                <td>{{ $div->id }}</td>
                                <td>{{ $div->nama_divisi }}</td>
                                <td>{{ $div->lokasi_divisi }}</td>
                                {{-- <td>
                                    <a href="{{route('divisi.edit', $div->id)}}" class="btn btn-success">EDIT</a>
                                    <form action="{{route('divisi.create', $div->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger" onclick="return confirm('ADA YAKIN UNTUK MENGHAPUS?')">HAPUS</button>
                                    </form>
                                    <a href="{{ route('siswa.edit', $d->id) }}" class="btn btn-success">EDIT</a>
                                    <form action="{{route('siswa.destroy', $d->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger" onclick="return confirm('ADA YAKIN UNTUK MENGHAPUS?')">HAPUS</button>
                                    </form>
                                </td> --}}
                            </tr>
                        @endforeach
                        </tbody>
                  </table>
                  <a href="{{route('status.index')}}"><button class="btn btn-primary">Isi Data Status Karyawan</button></a>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>

@endsection