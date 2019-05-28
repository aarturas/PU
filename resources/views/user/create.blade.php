@extends('layouts.app')
@section('content')
                        <h6 class="text-center">create.blade.user</h6>
                        <h3 class="text-center">Useriu redagavimas</h3>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header"></div>
<div class="card-header">Naujo user'io įrašymas</div>
<div class="card-body">
                    
                    <form action="{{route('user.store')}}"> 

{{--                                    1. Userio vardas                                                               --}}
<div class="form-group">
          <label for="name">Userio vardas</label>
          <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Useriu vardas" value="{{old('name')}}">
          <small id="emailHelp" class="form-text text-muted">Please, enter new user name. Max lenght 64 symbols.</small>
</div>

 {{--                                   2.  Userio pavarde                                                                                                  --}}
<div class="form-group">
           <label for="surname">Userio pavarde</label>
           <input type="text" class="form-control" name="surname" id="surname" aria-describedby="emailHelp" placeholder="Userio pavarde" value="{{old('surname')}}">
           <small id="emailHelp" class="form-text text-muted">Please, enter new user surname. Max lenght 64 symbols.</small>
</div>

<div class="row">
<div class="col-sm-6">
{{--                                   3.  el.pastas / email                                                                                                 --}}
<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" class="form-control" placeholder="Enter Email" value="{{ old('email') }}">
            <span class="text-danger">{{ $errors->first('email') }}</span>
</div>
</div>

 {{--                                  4.  telefonas / phone                                                                                               --}}
<div class="col-sm-6">
<div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
            <label for="phone">Phone No:</label>
            <input type="text" id="phone" name="phone" class="form-control" placeholder="Enter Phone No" value="{{ old('phone') }}">
            <span class="text-danger">{{ $errors->first('phone') }}</span>
</div>
</div>
</div>
             @csrf
{{--                                   5.   'Tipo' pasirinkimas - ar dėstytoją (1), ar studentą pasirinkti (2)                                --}}
            <select name="tipa">
                    <option value="1">Destytojas</option>
                    <option value="2">Studentas</option>
            </select>

{{--                                    6.  Įrašyti slaptažodį įrašant naują userį                                                                       --}}
<div class="form-group">
            <label>Useriu passwordas</label>
            <input type="text" class="form-control" name="password" placeholder="Įrašykite slaptažodį" value="{{old('name')}}">
            <small  class="form-text text-muted">Please, enter new user password. Max lenght 64 symbols.</small>
</div>
                    <button type="submit" class="btn btn-primary">Įrašyti</button>
                </form>
</div>
</div>
</div>
</div>
</div>







@endsection