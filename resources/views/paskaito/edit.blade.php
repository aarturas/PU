@extends('layouts.app')
@section('content')
                              <h4 style="padding-left:30%">edit.blade.paskaitos</h4>
                              <h3 style="padding-left:20%">paskaitų sąrašas ir redagavimas</h3>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header" style="color:blue">Nauja paskaita</div>
<div class="card-body">
                    <form action="{{route('paskaito.store')}}" method="POST">
{{--                                                                         Įrašome paskaitos pavadinimą                                       --}}
<div class="form-group">
        <label for="paskaito name">Paskaitos pavadinimas</label>
            <input type="text" class="form-control" name="pavadinimas" id="name" aria-describedby="emailHelp" placeholder="Paskaitos pavadinimas" value="{{old('pavadinimas', '')}}">
                <small class="form-text text-muted">Please, enter a new paskaito name. Max lenght 255 symbols.</small>
</div>

        {{--                                                                 renkamės is sąrašo Grupes_id                                        --}}
<div class="form-group">
        <label for="paskaito_id">Prideti grupę</label>
            <select class="form-control" id="paskaito_id" name="paskaito_id">
                    @foreach (App\Paskaito::all() as $item)
                       <option value="{{$item->id}}">{{$item->pavadinimas}} </option>
                    @endforeach
            </select>
        <small class="form-text text-muted">Please, select paskaito from the list.</small>
</div> 
{{--                                                                         summernote                                                           --}}
{{-- <div class="form-group">
        <label for="summernote">Notices</label>
            <textarea class="form-control" id="summernote" name="paskaitų notices" rows="3"></textarea>
                <small class="form-text text-muted">Please, enter notices about this paskaitas.</small>
</div> --}}


   {{--                                                                      Įdedame summernote'a                                                  --}}
   <div class="form-group">
        <label for="summernote">Aprašas</label>
                                    {{-- !!  ir  !! - tagus daro matomus summernote langelyje --}}
        <textarea class="form-control" id="summernote" name="aprasas" rows="3">{{!!old('aprasas', $paskaito->aprasas)!!}}</textarea>
        <small class="form-text text-muted">Prašome įrašyti pastabas apie paskaitas.</small>
    </div>

    {{--                                                                      Įrašome paskaitą                                                       --}}
<div class="col-sm-6">
        <label for="email">Paskaitu id:</label>
            <input type="text" id="paskaito_id" name="paskaito_id" class="form-control" placeholder="Paskaitu id" value="{{ old('paskaito_id') }}">
                <span class="text-danger">{{ $errors->first('paskaito_id') }}</span>
                <small class="form-text text-muted">Please, enter paskaito id number.</small>
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

    {{--                                                                  įsikeliame summernote'ą: virsuje turi atsirasti "irankių juosta"                                    --}}
<script>
    $(document).ready(function() {
    $('#summernote').summernote();
  });
</script>




@endsection