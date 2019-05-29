@extends('layouts.app')

<h4 style="padding-left:30%">edit.blade.vartotojai</h4>
<h3 style="padding-left:20%">vartotojų sąrašas ir redagavimas</h3>

@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header" style="color:blue">Naujas vartotojas</div>
<div class="card-body">

                    <form action="{{route('vartotojai.store')}}" method="POST">

                                 {{--     vartotojo vardas --}}

<div class="form-group">
        <label for="vartotojai name">Vartotojo vardas</label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Vartotojo vardas" value="{{old('name', '')}}">
                <small class="form-text text-muted">Please, enter a new vartotojo name. Max lenght 255 symbols.</small>
</div>

                                 {{--     vartotojo pavarde --}}
                                      
<div class="form-group">
        <label for="vartotojai surname">Vartotojo pavarde</label>
            <input type="text" class="form-control" name="surname" id="surname" aria-describedby="emailHelp" placeholder="Vartotojo pavarde" value="{{old('surname', '')}}">
                <small class="form-text text-muted">Please, enter a new vartotojo surname. Max lenght 255 symbols.</small>
</div>

<div class="row">
<div class="col-sm-6">

                                     {{-- vartotojo email --}}
                        
<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
        <label for="email">Email:</label>
            <input type="text" id="email" name="email" class="form-control" placeholder="Enter Email" value="{{ old('email') }}">
                <span class="text-danger">{{ $errors->first('email') }}</span>
</div>
</div>
                                    
<div class="col-sm-6">
                                       {{-- vartotojo phone --}}

<div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
        <label for="phone">Phone No:</label>
            <input type="text" id="phone" name="phone" class="form-control" placeholder="Enter Phone No" value="{{ old('phone') }}">
                <span class="text-danger">{{ $errors->first('phone') }}</span>
</div>
</div>
</div>

                                {{--      Vartotojo "tipas"      --}}

<div class="col-sm-6">
        <label for="tipas">Tipas:</label>
            <input type="text" id="tipa" name="tipa" class="form-control" placeholder="Companie id" value="{{ old('tipa') }}">
                <span class="text-danger">{{ $errors->first('tipa') }}</span>
                <small class="form-text text-muted">Please, enter tipa.</small>
</div>

                    @csrf
                    
        <button type="submit" class="btn btn-primary">Enter</button>
                    </form>

</div>
</div>
</div>
</div>
</div>
</div>
                         





@endsection