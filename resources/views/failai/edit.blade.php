@extends('layouts.app')
@section('content')
                                  <h4 style="padding-left:30%">edit.blade.failai</h4>
                                  <h3 style="padding-left:20%">Skaidrių redagavimas</h3>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">Edit {{$failai->name}}</div>
<div class="card-body">
                    
                     <form action="{{route('failai.update', $failai)}}" method="POST" enctype="multipart/form-data">  

<div class="form-group">
       <label for="name">File pavadinimas</label>
       <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="File name" value="{{old('name', $failai->name)}}">
       <small id="emailHelp" class="form-text text-muted">Please, enter new failai name. Max lenght 64 symbols.</small>
</div>
                    
<div class="form-group">
       <label for="name">Skaidrės</label>
       <input type="file" class="form-control-file" name="photo" id="photo">
       <small id="emailHelp" class="form-text text-muted">Prašome įkelti naują skaidrę.</small>
</div>

<div class="form-group">
                        @if($failai->photo)
       <a href="{{route('failai.download', $failai)}}">
       <img src="{{asset('img/'.$failai->photo)}}" style="object-fit: contain; height: 100px;">
                        </a>
                        @endif
</div>
                    @csrf
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
</div>
</div>
</div>
</div>
</div>


@endsection