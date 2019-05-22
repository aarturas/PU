@extends('layouts.app')
@section('content')
                       <h6 style="padding-left:45%">index.blade.grupes</h6>
                       <h3 style="padding-left:40%">grupių redagavimas</h3>
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">Grupių sąrašas</div>
<div class="card-body">
<div class="list-group">
                                              @foreach ($collection as $grupe)

<div class="row" style="margin-bottom: 10px;">

<div class="col-md-9">
    <a href="{{route('grupe.show', $grupe)}}" class="list-group-item list-group-item-action list-group-item-primary">{{$grupe->name}} prasidejo: {{$grupe->started_at}} pabaiga : {{$grupe->finished_at}} </a>
</div>

    <a href="{{route('grupe.edit', $grupe)}}" {{$grupe->name}}  {{$grupe->started_at}} {{$grupe->finished_at}}>
                <button type="submit" class="btn btn-primary">Redaguoti</button>
                        </a>

    <form action="{{route('grupe.destroy', $grupe)}}" method="POST">
            @csrf
                <button type="submit" class="btn btn-danger">Trinti</button>
    </form>

</div>
                                             @endforeach
</div>
</div>
</div>
</div>
</div>


                                             @endsection