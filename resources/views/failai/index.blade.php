@extends('layouts.app')
@section('content')
                                         <h6 style="padding-left:40%">index.blade.failai</h6>
                                         <h3 style="padding-left:30%">Skaidrių redagavimas</h3>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">Skaidrių sąrašas</div>
<div class="card-body">
<div class="list-group">
            @foreach ($collection as $destytoja)
<div class="row" style="margin-bottom: 10px;">
<div class="col-md-5">
<div class="col-md-3">
 {{--                                      photo/skaidres ikelimas                            --}}
        @if($destytoja->photo)
             <a href="{{route('destytoja.download', $destytoja)}}">
                 <img src="{{asset('img/'.$destytoja->photo)}}" style="object-fit: contain; height: 100px;">
             </a>
        @endif
</div>
</div>
</div>
            @endforeach
</div>
</div>
</div>
</div>
</div>
</div>







@endsection