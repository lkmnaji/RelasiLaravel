@extends('ajicorp.master')

@section('tilte'|'Jabatan Karyawan')

@section('ajicorp.content')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Welcome to Aji Corporation</a></li>
                <li class="breadcrumb-item active">Admin AjiCorp</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-info">
                            <div class="inner">
                            <h3>Halaman</h3>
                            <p>Data Karyawan</p>
                            </div>
                            <div class="icon">
                            <i class="ion ion-bag"></i>
                            </div>
                            <a href="{{route('karyawan.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-success">
                            <div class="inner">
                            <h3>Halaman</h3>

                            <p>Data Jabatan Karyawan</p>
                            </div>
                            <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="{{route('jabatan.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-warning">
                            <div class="inner">
                            <h3>Halaman</h3>

                            <p>Data Divisi Karyawan</p>
                            </div>
                            <div class="icon">
                            <i class="ion ion-person-add"></i>
                            </div>
                            <a href="{{route('divisi.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-danger">
                            <div class="inner">
                            <h3>Halaman</h3>

                            <p>Data Status Karyawan</p>
                            </div>
                            <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="{{route('status.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
        </div>
        <div class="card bg-dark text-white">
            <img src="/img/gedung.jpg" class="card-img img-dashboard" alt="Logoaji">
            <div class="card-img-overlay">
            <p class="card-text p-admin">Welcome To Aji Corporation</p>
            <p class="card-text p1-admin">Make u feel Comfortable</p>
            <p class="card-text p2-admin">Santuy, Aman, Emjoy</p>
            </div>
            
        </div>
    </section>
</div>    
    
@endsection