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
                                    @if (session('status_error'))
                                    <div class="alert alert-light-danger color-danger">
                                        <i class="bi bi-exclamation-circle"></i> 
                                        {{ session('status') }}
                                    </div>
                                    @elseif (session('status'))
                                    <div class="alert alert-light-success color-success">
                                        <i class="bi bi-check-circle"></i>
                                        {{ session('status') }}
                                    </div>
                                    @endif
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Data Penyakit</h4>
                                        </div>
                                        <div class="card-body">
                                            <button type="button" class="btn btn-outline-primary"
                                                data-bs-toggle="modal" data-bs-target="#primary">
                                                Input
                                            </button>

                                            <!--primary theme Modal -->
                                            <div class="modal fade text-left" id="primary" tabindex="-1"
                                                role="dialog" aria-labelledby="myModalLabel160"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                    role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-primary">
                                                            <h5 class="modal-title white" id="myModalLabel160">
                                                                Form Input
                                                            </h5>
                                                            <button type="button" class="close"
                                                                data-bs-dismiss="modal" aria-label="Close">
                                                                <i data-feather="x"></i>
                                                            </button>
                                                        </div>
                                                        <form method="post" action="{{url('/solusi')}}">
                                                            @csrf
                                                            <div class="modal-body">
                                                                <form class="form form-horizontal">
                                                                    <div class="form-body">
                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <label>Pilih Penyakit</label>
                                                                            </div>
                                                                            <div class="col-md-8 form-group">
                                                                                <select class="form-select" id="basicSelect" name='penyakit_id'>
                                                                                    <option disabled selected>Pilih...</option>
                                                                                    @foreach($penyakit as $list)
                                                                                    <option value="{{$list->id}}">{{$list->penyakit}}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <label>Solusi</label>
                                                                            </div>
                                                                            <div class="col-md-8 form-group">
                                                                                <input type="txet" class="form-control"
                                                                                    name="solusi" placeholder="Input here...">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button"
                                                                    class="btn btn-light-secondary"
                                                                    data-bs-dismiss="modal">
                                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">Close</span>
                                                                </button>
                                                                <button type="submit" class="btn btn-primary ml-1">
                                                                    <i class="bx bx-check d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">Save</span>
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <table class="table table-striped" id="table1">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Kode</th>
                                                        <th>Solusi</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($penyakit as $list)
                                                    <tr>
                                                        <td>{{$loop->iteration}}</td>
                                                        <td>{{$list->kode}} - {{$list->penyakit}}</td>
                                                        <td>
                                                            <ul>
                                                                @foreach($list->solusi as $solusi)
                                                                <li>
                                                                {{$solusi->solusi}}
                                                                </li>
                                                                @endforeach
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <center>
                                                                <span type="button" class="badge bg-success" data-bs-toggle="modal" data-bs-target="#success{{$list->id}}"><i class="bi bi-pencil"></i></span>
                                                                <div class="modal fade text-left" id="success{{$list->id}}" tabindex="-1"
                                                                    role="dialog" aria-labelledby="myModalLabel110"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                                        role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header bg-success">
                                                                                <h5 class="modal-title white" id="myModalLabel110">
                                                                                    Form Edit
                                                                                </h5>
                                                                                <button type="button" class="close"
                                                                                    data-bs-dismiss="modal" aria-label="Close">
                                                                                    <i data-feather="x"></i>
                                                                                </button>
                                                                            </div>
                                                                            <form method="post" action="{{url('/solusi/edit')}}">
                                                                                @csrf
                                                                                <div class="modal-body">
                                                                                    <div class="form-body">
                                                                                        <div class="row">
                                                                                            <div class="col-md-4">
                                                                                                <label>Code</label>
                                                                                            </div>
                                                                                            <div class="col-md-8 form-group">
                                                                                                <input type="text" class="form-control"
                                                                                                    name="code" value="{{$list->kode}}" disabled>
                                                                                            </div>
                                                                                            <div class="col-md-4">
                                                                                                <label>Nama Penyakit</label>
                                                                                            </div>
                                                                                            <div class="col-md-8 form-group">
                                                                                                <input type="txet" class="form-control"
                                                                                                    name="penyakit" value="{{$list->penyakit}}" disabled>
                                                                                            </div>
                                                                                            @foreach($list->solusi as $solusi)
                                                                                            <div class="col-md-4">
                                                                                                <label>Solusi</label>
                                                                                            </div>
                                                                                            <div class="col-md-8 form-group">
                                                                                                <input type="hidden" name="id{{$solusi->id}}" value="{{$solusi->id}}">
                                                                                                <input type="hidden" name="penyakit_id" value="{{$solusi->penyakit_id}}">
                                                                                                <input type="txet" class="form-control"
                                                                                                    name="solusi{{$solusi->id}}" value="{{$solusi->solusi}}">
                                                                                            </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button"
                                                                                        class="btn btn-light-secondary"
                                                                                        data-bs-dismiss="modal">
                                                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                                                        <span class="d-none d-sm-block">Close</span>
                                                                                    </button>
                                                                                    <button type="submit" class="btn btn-primary ml-1">
                                                                                        <i class="bx bx-check d-block d-sm-none"></i>
                                                                                        <span class="d-none d-sm-block">Save</span>
                                                                                    </button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                </div>
                                                            </center>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @include('layouts.user')
                    </section>
                </div>

@endsection