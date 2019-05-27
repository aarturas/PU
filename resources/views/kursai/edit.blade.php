@extends('layouts.app')
@section('content')
                     <h6 class="text-center">edit.blade.kursai</h6>
                     <h3 class="text-center">Nauja paskaita</h3>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-body">
<div class="list-group">

        <form action="{{route('kursai.update', [$kursai])}}" method = "POST">
        <input type="text" name="name" value="{{$kursai->name}}">
                                                                      @csrf
                    <button type="submit">Redaguoti</button>
    </form>

</div>
</div>
</div>
</div>
</div>

@endsection
