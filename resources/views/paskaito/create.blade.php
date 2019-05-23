@extends('layouts.app')
@section('content')
                                        <h6 style="padding-left:40%">create.blade.paskaitos</h6>
                                        <h3 style="padding-left:30%">Naujos paskaitos įrašymas</h3>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header" style="color:blue">Nauja paskaita</div>
<div class="card-body">
                             <form action="{{route('paskaito.store')}}" method="POST">
                {{--                                                     1. Grupes pavadinimo pasirinkimas (select)                                                            --}}
<div class="form-group">
                                       <label>Pasirinkti grupę</label>
            <select class="form-control"  name="grupe_id">
                    @foreach (App\Grupe::all() as $item)
                       <option value="{{$item->id}}">{{$item->name}}  </option>
                    @endforeach
            </select>
</div> 

         {{--                                                            2.  Data arba grupės paskaitų pradžia                                                                 --}}
<div class="form-group">
                                      <label for="data">Data</label>
        <input type="text" class="form-control" name="data" id="data" aria-describedby="emailHelp" placeholder="Data" value="{{old('data')}}">
        <small class="form-text text-muted">Įrašykite paskaitų pradžios datą.</small>
</div>

        {{--                                                             3. Pavadinimas                                                                                         --}}
        <div class="form-group">    
                                      <label>Pavadinimas</label>
        <input type="text" class="form-control" name="pavadinimas" id="pavadinimas" aria-describedby="emailHelp" placeholder="Pavadinimas" value="{{old('pavadinimas')}}">
</div>

{{--                                                                     4.  Įdedame summernote'ą                                                                               --}} 
   <div class="form-group">
                                       <label for="summernote">Aprašas</label>
            <textarea class="form-control" id="summernote" name="aprasas" rows="3"></textarea>
            <small class="form-text text-muted">Prašom įrašyti savo pastabas</small>
</div>
                    @csrf
                                       <button type="submit" class="btn btn-primary">Įrašyti</button>
                                </form>
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