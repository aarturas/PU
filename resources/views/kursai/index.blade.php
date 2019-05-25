@extends('layouts.app')
@section('content')
                          <h6 style="padding-left:40%">index.blade.kursai</h6>
                          <h3 style="padding-left:30%">Kursų sąrašas ir redagavimas</h3>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">Kursų sąrašas</div>
<div class="card-body">
<div class="list-group">
                           @foreach ($collection as $kursai)
<div class="row" style="margin-bottom: 10px;">
<div class="col-md-5">

        <a href="{{route('kursai.edit', $kursai)}}" class="list-group-item list-group-item-action list-group-item-primary">{{$kursai->name}} </a>
</div>
<div class="col-md-2" style="display:flex; justify-content:center; align-items:center;">

        <form action="{{route('kursai.destroy', $kursai)}}" method="POST">
                            @csrf
            <button type="submit" class="btn btn-danger">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="34" fill="white" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0V0z"/><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zm2.46-7.12l1.41-1.41L12 12.59l2.12-2.12 1.41 1.41L13.41 14l2.12 2.12-1.41 1.41L12 15.41l-2.12 2.12-1.41-1.41L10.59 14l-2.13-2.12zM15.5 4l-1-1h-5l-1 1H5v2h14V4z"/><path fill="none" d="M0 0h24v24H0z"/></svg>
            </button>
        </form>
</div>
</div>
                           @endforeach
</div>
</div>
</div>
</div>
</div>
</div>







@endsection