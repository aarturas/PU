@extends('layouts.app')
@section('content')
                          <h6 class="text-center">show.blade.failai</h6>
                          <h4 class="text-center">Informacijos pateikimas 'failai'. Kortelėje.</h4>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header" style="color:blue">Failo  {{$failai->pavadinimas}} informacija :</div>
<div class="card-body">
<div class="list-group">

{{--                Nuoroda i kelią, jeigu pasirenkame 'edit', nukreipiami į 'failai.edit' kelią         --}}
<div><a href="{{route('failai.edit', $failai)}}">Redaguoti</a></div>

{{--                          Failo info (iš modelio 'failai.php') :                                  --}}
   
{{--                         1.  Paskaitos id:                                                                         --}}
<div><b> Paskaitos id :</b> {{$failai->paskaito_id}} </div>

{{--                          2.  Failas                                                                                --}}
<div><b> Failas :</b> {{$failai->file}} </div>

{{--                          3.  Failo ar skaidrės pavadinimas                                                         --}}
<div><b> Failo-skaidrės pavadinimas :</b> {{$failai->FailaiPaskaito->pavadinimas}} </div>


</div>  
</div>
</div>
</div>
</div>
</div>
</div>








@endsection