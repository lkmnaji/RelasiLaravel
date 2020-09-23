@extends('ajicorp.master')

@section('tilte'|'Edit Divisi')

@section('ajicorp.content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Divisi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-3">
        <h2>Edit Data Divisi</h2>
        <hr>
        <form action="{{ route('divisi.update', $nama_divisi->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama_divisi">Nama Divisi</label>
                <input type="text" class="form-control-file" id="nama_divisi" name="nama_divisi" value="{{ $nama_divisi->nama_divisi }}">
                @error('nama_divisi')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <label for="lokasi_divisi">Lokasi divisi</label>
                <input type="text" class="form-control-file" id="lokasi_divisi" name="lokasi_divisi" value="{{ $nama_divisi->lokasi_divisi }}" >
                @error('lokasi_divisi')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Upload Data Baru</button>
        </form>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
