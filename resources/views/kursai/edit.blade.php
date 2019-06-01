

    {{-- @if(Auth::user()->tipa == 1) --}}


{{-- 
        <form action="{{route('kursai.update', [$kursai])}}" method = "POST">
                <input type="text" name="name" value="{{$kursai->name}}">
                                                                             @csrf
                <button type="submit">Redaguoti</button>
        </form> --}}

      
     {{-- @endif --}}


     @extends('layouts.app')
     @section('content')
                           <h6 class="text-center">edit.blade.kursai</h6>
                           <h3 class="text-center">kursų sąrašas ir redagavimas</h3>
     <div class="container">
     <div class="row justify-content-center">
     <div class="col-md-8">
     <div class="card">
     <div class="card-header" style="color:blue">Nauja paskaita</div>
     <div class="card-body">
                                              <form action="{{route('kursai.update', [$kursai])}}" method="POST">
     <div class="col-sm-12">
     
                     {{-- Matys tik destytojas --}}
                {{-- @if(Auth::user()->tipa == 1) --}}
                                              
       </div>


         {{--                                                 1.  Pridedame kursus i grupe                                                          --}}
     <div class="form-group">
                <label for="grupe_id">Pridėti grupe</label>
                        <select class="form-control" id="grupe_id" name="grupe_id">
                             @foreach (App\Grupe::all() as $item)
                                  <option value="{{$item->id}}" @if($item->id==$kursai->grupe_id) selected @endif>{{$item->name}}</option>
                             @endforeach
                        </select>
            <small class="form-text text-muted">Prašom pasirinkti paskaitą.</small>
            </div>




       {{--                                                 3. Naujos kursais name                                                                                         --}}
       <div class="form-group">    
                                               <label>Naujo kurso name </label>
       <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder= " Pataisytas pavadinimas" value="{{old('name')}}">
       @csrf

     </div>
     
       {{--                                                  2.  Įrašome  Data                                                                --}}
     <div class="form-group">
                                               <label>Paskaitų pradžia</label>
             <input type="text" class="form-control" name="data" id="data" aria-describedby="emailHelp" placeholder="Data" value="{{old('data')}}">
             <small class="form-text text-muted">Įrašykite paskaitų pradžios datą.</small>
     </div>
     
     
   
     
     <button type="submit" class="btn btn-primary">Enter</button>
     
     
     {{--                                                     3.   Įrašome kursais pavadinimą                                               --}}
     {{-- <div class="form-group">
                                               <label>Paskaitos name</label>
           <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Paskaitos name" value="{{old('name', '')}}">
           <small class="form-text text-muted">Please, enter a new kursai name. Max lenght 255 symbols.</small>
     </div> --}}
     
     
     
                         {{-- @endif --}}
     
     </div>
     </div>
     </div>
     </div>
     </div>
     </div>
     
              
     
     
     
     
     @endsection