@extends('layouts.app')
@section('content')
                          <h6 style="padding-left:40%">show.blade.failai</h6>
                          <h4 style="padding-left:20%">Informacijos pateikimas 'failai'. Kortelėje.</h4>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header" style="color:blue">Failo  {{$failai->pavadinimas}} informacija :</div>
<div class="card-body">
<div class="list-group">

{{--             Nuoroda i kelią, jeigu pasirenkame 'edit', nukreipiami i 'failai.edit' kelia         --}}
        <div><a href="{{route('failai.edit', $failai)}}">Redaguoti</a></div>

{{--                         1.  Dėstytojo Vardas (iš modelio 'failai.php') :                         --}}
{{--                            kortelėje rodys dėstytojo vardą :                                    --}}

        <div><b> Paskaitos pavadinimas :</b> {{$failai->FailaiPaskaito->pavadinimas}} </div>

        <div><b> Paskaitos id :</b> {{$failai->paskaito_id}} </div>

        <div><b> Failas :</b> {{$failai->file}} </div>





</div>  
</div>
</div>
</div>
</div>
</div>
</div>

@endsection