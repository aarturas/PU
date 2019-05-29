@extends('layouts.app')

<h6 style="padding-left:45%">edit.blade.kursai</h6>
<h3 style="padding-left:40%">Nauja paskaita</h3>

@section('content')

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
