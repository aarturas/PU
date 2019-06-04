     @extends('layouts.app')
     @section('content')
                           <h6 class="text-center">edit.blade.kursai</h6>
                           <h3 class="text-center">Kursų sąrašas ir redagavimas</h3>
     <div class="container">
     <div class="row justify-content-center">
     <div class="col-md-8">
     <div class="card">
     <div class="card-header" style="color:blue">Kurso redagavimas</div>
     <div class="card-body">
                                              <form action="{{route('kursai.update', [$kursai])}}" method="POST">
     <div class="col-sm-12">
     
                     {{-- Matys tik destytojas --}}
                @if(Auth::user()->tipa == 1)
                                              
       </div>

     {{--  ----------------------------------------   1.  Pridedame kursus i grupę   ----------------------------------------------------   --}}

     <div class="form-group">
                                                 <label style="color:blue">Pasirinkti grupę</label>
                        <select class="form-control" id="grupe_id" name="grupe_id">
                             @foreach (App\Grupe::all() as $item)
                                  <option value=" {{$item->id}}"  @if($item->id==$kursai->grupe_id) selected @endif>{{$item->name}} </option>
                             @endforeach
                        </select>
            <small class="form-text text-muted">Prašom pasirinkti grupę.</small>
            </div>

       {{--  --------------------------------------   2.  Naujas kurso pavadinimas  ------------------------------------------------------------------     --}}

       <div class="form-group">    
                                               <label style="color:blue">Pataisytas kurso pavadinimas </label>
       <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder= " Pataisytas pavadinimas" value="{{old('name')}}">
       <small class="form-text text-muted">Prašom įrašyti pataisytą kurso pavadinimą.</small>
                         @csrf
     </div>
     
       {{-- ---------------------------------------    3.  Įrašome  Data --------------------------------------------------------------------------------   --}}

     <div class="form-group">
                                               <label style="color:blue">Kursų pradžia</label>
             <input type="text" class="form-control" name="data" id="data" aria-describedby="emailHelp" placeholder="Data" value="{{old('data')}}">
             <small class="form-text text-muted">Įrašykite paskaitų pradžios datą.</small>
     </div>
                                                <button type="submit" class="btn btn-primary">Įrašyti</button>
     
     {{--  -----------------------------------------   4.   Įrašome kursu pavadinimą  ------------------------------------------------------------------  --}}

     {{-- <div class="form-group">
                                               <label>Paskaitos name</label>
           <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Paskaitos name" value="{{old('name', '')}}">
           <small class="form-text text-muted">Please, enter a new kursai name. Max lenght 255 symbols.</small>
     </div> --}}
     
                         @endif
     
     </div>
     </div>
     </div>
     </div>
     </div>
     </div>
     
              
     
     
     
     
     @endsection