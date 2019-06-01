@extends('layouts.app')
@section('content')
                      <h6 class="text-center">edit.blade.paskaitos</h6>
                      <h3 class="text-center">paskaitų sąrašas ir redagavimas</h3>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header" style="color:blue">Nauja paskaita</div>
<div class="card-body">
                                         <form action="{{route('paskaito.update', [$paskaito])}}" method="POST">
<div class="col-sm-12">

                {{-- Matys tik destytojas --}}
           @if(Auth::user()->tipa == 1)
                                         
  </div>
  {{--                                                 3. Naujos paskaitos pavadinimas                                                                                         --}}
  <div class="form-group">    
                                          <label>Naujos paskaitos pavadinimas </label>
  <input type="text" class="form-control" name="pavadinimas" id="pavadinimas" aria-describedby="emailHelp" placeholder="Pavadinimas" value="{{old('pavadinimas')}}">
</div>

  {{--                                                  2.  Įrašome  Data                                                                --}}
<div class="form-group">
                                          <label>Paskaitų pradžia</label>
        <input type="text" class="form-control" name="data" id="data" aria-describedby="emailHelp" placeholder="Data" value="{{old('data')}}">
        <small class="form-text text-muted">Įrašykite paskaitų pradžios datą.</small>
</div>


{{--                                                   Pridedame kursus i grupe                                                          --}}
<div class="form-group">
    <label for="grupe_id">Pridėti grupe</label>
            <select class="form-control" id="grupe_id" name="grupe_id">
                 @foreach (App\Grupe::all() as $item)
                      <option value="{{$item->id}}" @if($item->id==$paskaito->grupe_id) selected @endif>{{$item->name}}</option>
                 @endforeach
            </select>
<small class="form-text text-muted">Prašom pasirinkti paskaitą.</small>
</div>



{{--                                                     3.   Įrašome paskaitos pavadinimą                                               --}}
{{-- <div class="form-group">
                                          <label>Paskaitos pavadinimas</label>
      <input type="text" class="form-control" name="pavadinimas" id="name" aria-describedby="emailHelp" placeholder="Paskaitos pavadinimas" value="{{old('pavadinimas', '')}}">
      <small class="form-text text-muted">Please, enter a new paskaito name. Max lenght 255 symbols.</small>
</div> --}}

{{--                                                     4.  Įdedame summernote'a                                                        --}}
<div class="form-group">
                                           <label for="summernote">Aprašas</label>
 {{--                                                                              !!  ir  !! - tagus daro matomus summernote langelyje                   --}}
 {{--                                                                            bet matomi ir 'figuriniai' skliausteliai                                  --}}
      <textarea class="form-control" id="summernote" name="aprasas" rows="3">{{!!old ('aprasas', $paskaito->aprasas)!!}}</textarea>                         
      <small class="form-text text-muted">Prašome įrašyti savo pastabas apie paskaitas.</small>
</div>
                    @csrf
        <button type="submit" class="btn btn-primary">Enter</button>
                    </form>

                    @endif

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