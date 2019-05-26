@extends('layouts.app')
@section('content')
                        <h6 style="padding-left:45%">index.blade.failai</h6>
                        <h3 style="padding-left:40%">Skaidrių sąrašas</h3>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">Skaidrių sąrašas</div>
<div class="card-body">
<div class="list-group">
                                            @foreach ($collection as $failai)
<div class="row" style="margin-bottom: 10px;">
<div class="col-md-5">
<div class="col-md-3">
 {{--                                      photo/skaidres ikelimas: rodo nuotraukas                                                                                     --}}
                       <img src="{{asset('img/'.$failai->file)}}" style="object-fit: contain; height: 100px;"> 
</div>
</div>
</div>

<div class="row" style="margin-bottom: 10px;">
<div class="col-md-9">
        <a href="{{route('failai.show', $failai)}}" class="list-group-item list-group-item-action list-group-item-primary" enctype="multipart/form-data">{{$failai->name}}</a>
</div>
        <a href="{{route('failai.edit', $failai)}}" {{$failai->file}}>
                                                <button type="submit" class="btn btn-primary">Redaguoti</button></a>
        <form action="{{route('failai.destroy', $failai)}}" method="POST">
@csrf
                                                <button type="submit" class="btn btn-danger">Trinti</button>
        </form>
           
<div class="form-group">
{{--                                         foto failu redagavimas                                                                                                     --}}
                        @if($failai->photo)
                                    <a href="{{route('failai.edit', $failai)}}">
                                    <img src="{{asset('img/'.$failai->photo)}}" style="object-fit: contain; height: 100px;">
                                    </a>
                        @endif
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