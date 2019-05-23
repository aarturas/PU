@extends('layouts.app')
@section('content')
                                    <h4 style="padding-left:30%">create.blade.user</h4>
                                    <h3 style="padding-left:20%">Useriu redagavimas</h3>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
{{-- <div class="card-header">Edit {{$user->name}} {{$user->surname}}</div> --}}
<div class="card-header"></div>
<div class="card-body">
                    
                    <form action="{{route('user.store')}}" method="POST" enctype="multipart/form-data"> 

{{--                                            1. Userio vardas                                                               --}}
<div class="form-group">
    <label for="name">Useriu vardas</label>
        <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Useriu vardas" value="{{old('name', $user->name)}}">
    <small id="emailHelp" class="form-text text-muted">Please, enter new user name. Max lenght 64 symbols.</small>
</div>

 {{--                                         2.  Userio pavarde                                                                                                  --}}
<div class="form-group">
    <label for="surname">Vartotoju pavarde</label>
        <input type="text" class="form-control" name="surname" id="surname" aria-describedby="emailHelp" placeholder="Vartotoju pavarde" value="{{old('surname', $user->surname)}}">
    <small id="emailHelp" class="form-text text-muted">Please, enter new user surname. Max lenght 64 symbols.</small>
</div>

<div class="row">
        <div class="col-sm-6">
{{--                                         3.  el.pastas / email                                                                                                 --}}
        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                <label for="email">Email:</label>
                    <input type="text" id="email" name="email" class="form-control" placeholder="Enter Email" value="{{ old('email') }}">
                        <span class="text-danger">{{ $errors->first('email') }}</span>
        </div>
        </div>
                                            
        <div class="col-sm-6">
 {{--                                           4.  telefonas / phone                                                                                               --}}
        <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                <label for="phone">Phone No:</label>
                    <input type="text" id="phone" name="phone" class="form-control" placeholder="Enter Phone No" value="{{ old('phone') }}">
                        <span class="text-danger">{{ $errors->first('phone') }}</span>
        </div>
        </div>
        </div>

{{--                                             5.    Nuotraukos                                                                                               --}}
{{-- <div class="form-group">
    <label for="name">Mechanic Photo</label>
        <input type="file" class="form-control-file" name="photo" id="photo">
    <small id="emailHelp" class="form-text text-muted">Please, enter new user profile photo.</small>
</div> --}}

{{-- <div class="form-group">
                        @if($user->photo)
                        <a href="{{route('user.download', $user)}}">
                        <img src="{{asset('img/'.$user->photo)}}" style="object-fit: contain; height: 100px;">
                        </a>
                    @endif
</div> --}}
                    @csrf

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
</div>
</div>
</div>
</div>
</div>







@endsection