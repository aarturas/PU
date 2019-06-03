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
    {{-- mato tik destytojas --}}
                @if(Auth::user()->tipa == 1)

{{--                        Langelis su jau įrašytais 'user vardu ir pavarde' is ankstesnės lentelės                                                            --}}

{{-- --------------------------------------  1. Userio vardas --------------------------------------------------------------------    --}}
<div class="form-group">
                                   <label for="name">Userio vardas</label>
        <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Useriu vardas" value="{{old('name', $user->name)}}">
        <small id="emailHelp" class="form-text text-muted">Please, enter new user name. Max lenght 64 symbols.</small>
</div>

{{-- --------------------------------------  2.  Userio pavarde -------------------------------------------------------------------   --}}
<div class="form-group">
                                   <label for="surname">Userio pavarde</label>
        <input type="text" class="form-control" name="surname" id="surname" aria-describedby="emailHelp" placeholder="Userio pavarde" value="{{old('surname', $user->surname)}}">
        <small id="emailHelp" class="form-text text-muted">Please, enter new user surname. Max lenght 64 symbols.</small>
</div>
 {{-- -------------------------------------  3.  El.paštas -------------------------------------------------------------------------   --}}
<div class="row">
<div class="col-md-6">
<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                        
                                   <label for="email">El.paštas:</label>
                <input type="text" id="email" name="email" class="form-control" placeholder="Enter Email" value="{{ old('email', $user->email) }}">
            <span class="text-danger">{{ $errors->first('email') }}</span>
</div>
</div>
{{-- --------------------------------------  4.  Telefonas -------------------------------------------------------------------------   --}}
<div class="col-md-6">
<div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">

                                    <label for="phone">Telefonas:</label>
                <input type="text" id="phone" name="phone" class="form-control" placeholder="Enter Phone No" value="{{ old('phone', $user->phone) }}">
            <span class="text-danger">{{ $errors->first('phone') }}</span>
</div>
</div>
</div>
{{--  ------------------------------------   5.  Komentarai -----------------------------------------------------------------------   --}}
<div class="form-group">
                                    <label>Komentarai</label>
                <textarea class="form-control" id="summernote" name="comment" rows="3"></textarea>
            <small class="form-text text-muted">Please, wright a new comment. Max lenght 200 symbols.</small>
</div>

{{-- --------------------------------------  6. (User) 'Tipo' pasirinkimas -  dėstytoją (1), ar studentą (2) ----------------------  --}}
<div class="row">
<div class="col-md-6">
<div class="form-group">
                                    <label>Pasirinkti User</label>

<select name="tipa">
        <option value="1">Destytojas</option>
        <option value="2">Studentas</option>
</select>
                        <button type="submit" class="btn btn-primary">Pasirinkti</button>
</div>
</div>
</div>
                @csrf
                        </form>

{{-- --------------------------------------- 7.  Grupės priskirimas DĖSTYTOJUI / STUDENTUI  --------------------------------------- --}}
{{--                                                   $user patenka i kontrolerio antrą argumentą                             --}}
            <form action="{{route('studentoGrupe.add',[$user])}}" method="POST">

                                    <label for="grupe_id" ><b>PRISKIRTI ( studentui / destytojui ) GRUPĘ</b></label>

{{--                                         name patenka i kontrolerio request                                              --}}
                <select class="form-control" name="grupe_id">
                        @foreach ($grupes as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                </select>
                <small class="form-text text-muted">Prašom priskirti Useriui grupę.</small>
@csrf
                          <button type="submit" class="btn btn-primary">Irasyti</button>
            </form>


            {{--                                         7. Studento grupės pavadinimas                                                     --}}

<div class="form-group">
        <form action="{{route('studentoGrupe.destroy')}}" method="POST">
                @csrf
        <label for="grupe_id" ><b>USERIO ( studento / destytojo ) GRUPĖS SĄRAŠAS - TRINTI </b></label>

                <select class="form-control" name="grupe_id">
                    @foreach ($studento_grupes as $item)
                        <option value="{{$item->id}} "> {{$item->visaGrupe->name}} </option>
                    @endforeach 
                </select>
            <small class="form-text text-muted">Prašom pasirinkti kokią grupę ištrinti.</small>
        
                        <button type="submit" class="btn btn-danger">Trinti</button>
        </form>

</div>





 {{-- mato destytojas pabaiga    --}}
 @endif

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