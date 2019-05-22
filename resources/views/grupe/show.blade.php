@extends('layouts.app')
@section('content')
                          <h6 style="padding-left:35%">show.blade.grupe</h6>
                          <h4 style="padding-left:30%">Informacijos pateikimas.Kortelėje.</h4>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header" style="color:blue">Grupe {{$grupe->name}} informacija :</div>
<div class="card-body">
<div class="list-group">

{{--             Nuoroda i kelia, jeigu pasirenkame 'edit', nukreipiami i 'grupe.edit' kelia     --}}
<div><a href="{{route('grupe.edit', $grupe)}}">Editas</a></div>

{{--                           Dėstytojo id?  Vardas                                             --}}
{{-- <div><b> Destytojo id :</b> {{$grupe->destytoja_id}} </div>                                 --}}
<div><b> Destytojas :</b> {{$grupe->GrupeDestytoja->name}} </div>


{{--                          Kursų id?   Pavadinimas                                            --}}
        {{-- <div><b>Kursu id :</b> {{$grupe->kursai_id}}</div> --}}
<div><b> Kursų pavadinimas :</b> {{$grupe->GrupeKurpav->name}} </div>


<div>
{{--                           Info lentelėje: kursų pradžia                                     --}}
        <b>Kursų pradžia:</b>
            {{$grupe->started_at}} 
</div>

<div>
 {{--                          info lenteleje: kursų pabaiga                                     --}}
         <b>Kursų pabaiga:</b>
              {{$grupe->finished_at}}
 </div>

{{--                           Pastabos apie kazka...                                           --}}
        <h3>Notices:</h3>
<div>
{{--                           Turi buti šauktukai, kitaip nerodys pastabų                      --}}
            {!!$grupe->aprasas!!}
                    
</div>  
</div>
</div>
</div>
</div>
</div>
</div>

@endsection