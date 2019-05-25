@extends('layouts.app')
@section('content')
                          <h6 style="padding-left:43%">create.blade.kursai</h6>
                          <h3 style="padding-left:40%">Naujas kursas</h3>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-body">
<div class="list-group">
    
                     <form action="{{route('kursai.store')}}" method="POST">

<div class="form-group">

    {{--                                                                 Naujo kurso įrašymas                                  --}}
    <label for="name" style="color:blue">Kurso pavadinimas</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Įrašykite naują kursą" value="{{old('name', '')}}">
    <small id="emailHelp" class="form-text text-muted">Prašom įrašyti naujo kurso pavadinimą.</small>

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

