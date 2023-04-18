@extends('layouts/master')

@section('content')
    
<div class="content-wrapper container">
                <div class="page-heading">
                    <h3>{{$halaman}}</h3>
                </div>
                <div class="page-content">
                    <section class="row">
                        <div class="col-12 col-lg-9">
                            @include('layouts.card')
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Selamat datang</h4>
                                        </div>
                                        <div class="card-body">
                                            @if($data != 0)
                                            <div class="alert alert-light-success color-success">
                                                Perkiraan penyakit tanaman cabai anda adalah <b>{{$data['penyakit']}}</b> {{$data['cf'] * 100}}%
                                                <p>Solusi :</p> 
                                                <ul>
                                                    @foreach($solusi as $list)
                                                    <li>{{$list->solusi}}</li>
                                                    @endforeach
                                                </ul>
                                                <p><a href="{{url('/')}}">Kembali</a></p>
                                            </div>
                                            @else
                                            <div class="alert alert-light-danger color-danger">
                                                <i class="bi bi-exclamation-circle"></i> 
                                                Maaf, Tidak ada rule yang sesuai. Silahkan pilih kembali ciri-ciri tanaman padi anda. <a href="{{url('/')}}">Klik disini</a>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @include('layouts.user')
                    </section>
                </div>

            </div>

@endsection