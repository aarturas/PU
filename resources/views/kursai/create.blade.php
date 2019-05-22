@extends('layouts.app')
@section('content')
                          <h6 style="padding-left:45%">create.blade.kursai</h6>
                          <h3 style="padding-left:40%">Nauja paskaita</h3>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-body">
<div class="list-group">
    
                     <form action="{{route('kursai.store')}}" method="POST">

<div class="form-group">

    {{--                                                                 Naujos paskaitos įrašymas                                  --}}
    <label for="name" style="color:blue">Paskaitos pavadinimas</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Įrašykite naują paskaitą" value="{{old('name', '')}}">
    <small id="emailHelp" class="form-text text-muted">Prašom įrašyti naujos paskaitos pavadinimą.</small>

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

