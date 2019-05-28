@extends('layouts.app')
@section('content')
                        <h6 class="text-center">show.blade.grupe</h6>
                        <h4 class="text-center">Informacijos pateikimas 'grupės'. Kortelėje.</h4>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header" style="color:blue">Grupės : {{$grupe->name}} informacija :</div>
<div class="card-body">
<div class="list-group">

{{--             Nuoroda i kelią, jeigu pasirenkame 'edit', nukreipiami i 'grupe.edit' kelią         --}}
        <div><a href="{{route('grupe.edit', $grupe)}}">Editas</a></div>


{{--                                 1.  Dėstytojo Vardas (iš modelio 'grupe.php') :                 --}}
{{--                            kortelėje rodys dėstytojo vardą :                                    --}}

        <div><b> Destytojas :</b> {{$grupe->GrupeDestytoja->name}} </div>
{{--    <div><b> Destytojo id :</b> {{$grupe->destytoja_id}} </div>                                  --}}

{{--                                 2.   Kursų  pavadinimas (iš modelio 'grupe.php') :              --}}
{{--                            kortelėje rodys kursų pavadinimą :                                   --}}

        <div><b> Kursų pavadinimas :</b> {{$grupe->GrupeKurpav->name}} </div>
{{--    <div><b>Kursu id :</b> {{$grupe->kursai_id}}</div>                                           --}}
<div>
{{--                                 3.  Info lentelėje-  Kursų pradžia :                            --}}
        <b>Kursų pradžia : </b>  {{$grupe->started_at}} 
</div>
<div>
 {{--                                4.  info lenteleje-  Kursų pabaiga :                            --}}
         <b>Kursų pabaiga : </b> {{$grupe->finished_at}}
 </div>
</div>  
</div>
</div>
</div>
</div>
</div>
</div>

@endsection