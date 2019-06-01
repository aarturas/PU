@extends('layouts.app')
@section('content')
                        <h6 class="text-center">create.blade.studentoGrupe</h6>
                        <h3 class="text-center">Naujas studentas</h3>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-body">
<div class="list-group">
    
                     <form action="{{route('studentoGrupe.store')}}" method="POST">

<div class="form-group">

{{--                                                               1.  Naujo kurso įrašymas                                  --}}
    <label for="name" style="color:blue">studentoGrupe pavadinimas</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Įrašykite naują kursą" value="{{old('name', '')}}">
    <small id="emailHelp" class="form-text text-muted">Prašom įrašyti nauja studentoGrupe pavadinimą.</small>

</div>
            <button type="submit" class="btn btn-primary">Įrašyti</button>
                                                                                 @csrf
                    </form>




</div>
</div>
</div>
</div>
</div>
</div>
</div>






@endsection

