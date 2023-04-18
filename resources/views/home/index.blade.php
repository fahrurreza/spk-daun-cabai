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
                                            <div class="alert alert-light-success color-success">
                                                Aplikasi ini merupakan aplikasi sistem pendukung keputusan (SPK)
                                                pada kondisi tanaman cabai. Sistem ini dapat berjalan dengan mengisi
                                                ciri-ciri yang terdapat pada padi anda. Anda kemudian dapat mengetahui
                                                penyakit dan solusi yang dapat anda berikan pada tanaman cabai anda.
                                                Aplikasi ini berjalan menggunakan metode CF (Certainty Factor).
                                                Selamat mencoba
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="alert alert-light-success color-success">
                                                <i class="bi bi-check-circle"></i>
                                                Centanglah ciri-ciri berikut ini jika pada tanaman cabai kalian terdapat ciri tersebut
                                            </div>
                                        </div>
                                        <form action="{{url('/proses')}}" method="post">
                                            @csrf
                                            <table class="table mx-3" id="table">
                                                <tbody>
                                                <tbody>
                                                    @foreach($ciri as $list)
                                                    <tr>
                                                        <td>{{$list->ciri}}</td>
                                                        <td>
                                                            <div class="form-check">
                                                                <div class="checkbox">
                                                                    <input type="checkbox" name="C{{$loop->iteration}}" class="form-check-input">
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            <button type="submit" class="btn btn-primary btn-sm mx-3">Proses</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @include('layouts.user')
                    </section>
                </div>

            </div>

@endsection