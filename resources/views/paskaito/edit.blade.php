@extends('layouts.app')
@section('content')
                              <h6 style="padding-left:43%">edit.blade.paskaitos</h6>
                              <h3 style="padding-left:30%">paskaitų sąrašas ir redagavimas</h3>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header" style="color:blue">Nauja paskaita</div>
<div class="card-body">
                                         <form action="{{route('paskaito.update', [$paskaito])}}" method="POST">
<div class="col-sm-12">
                                         
{{--                                                   1. Grupes pavadinimo pasirinkimas (select)                                                            --}}
<div class="form-group">
                                         <label>Pasirinkti grupę</label>
      <select class="form-control"  name="grupe_id">
          @foreach (App\Grupe::all() as $item)
                  <option value="{{$item->id}}">{{$item->name}}</option>
          @endforeach
      </select>
</div> 

  {{--                                                  2.  Įrašome  Data                                                                --}}
<div class="form-group">
                                          <label>Data</label>
        <input type="text" class="form-control" name="data" id="data" aria-describedby="emailHelp" placeholder="Data" value="{{old('data')}}">
        <small class="form-text text-muted">Įrašykite paskaitų pradžios datą.</small>
</div>

{{--                                                     3.   Įrašome paskaitos pavadinimą                                               --}}
<div class="form-group">
                                          <label>Paskaitos pavadinimas</label>
      <input type="text" class="form-control" name="pavadinimas" id="name" aria-describedby="emailHelp" placeholder="Paskaitos pavadinimas" value="{{old('pavadinimas', '')}}">
      <small class="form-text text-muted">Please, enter a new paskaito name. Max lenght 255 symbols.</small>
</div>

{{--                                                     4.  Įdedame summernote'a                                                        --}}
<div class="form-group">
                                           <label for="summernote">Aprašas</label>
 {{--                                                                              !!  ir  !! - tagus daro matomus summernote langelyje                   --}}
 {{--                                                                            bet matomi ir 'figuriniai' skliausteliai                                  --}}
 <textarea class="form-control" id="summernote" name="aprasas" rows="3">{{!!old ('aprasas', $paskaito->aprasas)!!}}</textarea>                         

{{--  <textarea class="form-control" id="summernote" name="aprasas" rows="3">{{old ('aprasas', $paskaito->aprasas)}}</textarea> --}}
      <small class="form-text text-muted">Prašome įrašyti savo pastabas apie paskaitas.</small>
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

<script>
    $(document).ready(function() {
    $('#summernote').summernote();
  });

</script>




@endsection