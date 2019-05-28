@extends('layouts.app')
@section('content')
                    <h6 class="text-center">edit.blade.user</h6>
                    <h3 class="text-center">User sąrašas ir redagavimas</h3>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-body">
                        <form action="{{route('user.update',[$user])}}" method="POST">

{{--                                          langelis su jau irasytais user vardu ir pavarde is ankstesnes lenteles                                              --}}

{{--                                         1. Userio vardas                                                                                                  --}}
<div class="form-group">
        <label for="name">Userio vardas</label>
        <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Useriu vardas" value="{{old('name', $user->name)}}">
        <small id="emailHelp" class="form-text text-muted">Please, enter new user name. Max lenght 64 symbols.</small>
</div>

{{--                                         2.  Userio pavarde                                                                                                   --}}
<div class="form-group">
        <label for="surname">Userio pavarde</label>
        <input type="text" class="form-control" name="surname" id="surname" aria-describedby="emailHelp" placeholder="Userio pavarde" value="{{old('surname', $user->surname)}}">
        <small id="emailHelp" class="form-text text-muted">Please, enter new user surname. Max lenght 64 symbols.</small>
</div>
 {{--                                        3.  El.paštas                                                                                                          --}}
<div class="row">
<div class="col-md-6">
<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                        
            <label for="email">Email:</label>
                <input type="text" id="email" name="email" class="form-control" placeholder="Enter Email" value="{{ old('email', $user->email) }}">
            <span class="text-danger">{{ $errors->first('email') }}</span>
</div>
</div>
{{--                                         4.  Telefonas                                                                                                           --}}
<div class="col-md-6">
<div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">

            <label for="phone">Phone No:</label>
                <input type="text" id="phone" name="phone" class="form-control" placeholder="Enter Phone No" value="{{ old('phone', $user->phone) }}">
            <span class="text-danger">{{ $errors->first('phone') }}</span>
</div>
</div>
</div>
{{--                                         5.  Komentarai                                                                                                         --}}
<div class="form-group">
            <label for="comment">Comment</label>
                <textarea class="form-control" id="summernote" name="comment" rows="3"></textarea>
            <small class="form-text text-muted">Please, wright a new comment. Max lenght 200 symbols.</small>
</div>

{{--                                         6. 'Tipo' pasirinkimas - ar dėstytoją, ar studentą pasirinkti                                                            --}}
<select name="tipa">
        <option value="1">Destytojas</option>
        {{-- <option value="{{ old('email', $user->email) }}">Destytojas</option> --}}
        <option value="2">Studentas</option>
</select>




<button type="submit" class="btn btn-primary">Enter</button>
                @csrf
                               </form>
</div>
</div>
</div>
</div>
</div>
 {{--                        įsikeliame summernote'ą, atsiranda "irankių" juosta                             --}}
            <script>
                $(document).ready(function()    {
                $('#summernote').summernote();  });
            </script>




@endsection