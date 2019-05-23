@extends('layouts.app')
@section('content')
                                <h6 style="padding-left:35%">edit.blade.user</h6>
                                <h3 style="padding-left:20%">User sąrašas ir redagavimas</h3>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-body">

                               <form action="{{route('user.update',[$user])}}" method="POST">

{{--                                          langelis su jau irasytais user vardu ir pavarde is ankstesnes lenteles                                           --}}
                        <input  type = "text"  name = "name" value = "{{old('name', $user->name)}}">
                        <input type = "text" name = "surname" value = "{{old('surname', $user->surname)}}">
<div class="row">
<div class="col-md-6">
<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                        
                        <label for="email">Email:</label>
                            <input type="text" id="email" name="email" class="form-control" placeholder="Enter Email" value="{{ old('email') }}">
                        <span class="text-danger">{{ $errors->first('email') }}</span>
</div>
</div>
                                    
<div class="col-md-6">
<div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                        <label for="phone">Phone No:</label>
                            <input type="text" id="phone" name="phone" class="form-control" placeholder="Enter Phone No" value="{{ old('phone') }}">
                        <span class="text-danger">{{ $errors->first('phone') }}</span>
</div>
</div>
</div>

<div class="form-group">
                        <label for="comment">Comment</label>
                            {{-- <input type="text" class="form-control" name="comment" id="comment" aria-describedby="emailHelp" placeholder="comment" value="{{old('comment', '')}}"> --}}
                            <textarea class="form-control" id="summernote" name="comment" rows="3"></textarea>

                        <small class="form-text text-muted">Please, wright a new comment. Max lenght 200 symbols.</small>
</div>

                                         {{-- summernote --}}
{{-- <div class="form-group">
                        <label for="summernote">Notices</label>
                            <textarea class="form-control" id="summernote" name="user_notices" rows="3"></textarea>
                        <small class="form-text text-muted">Please, enter notices about this user.</small>
</div> --}}

<div class="col-sm-6">
                        <label for="email">Grupes id:</label>
                            <input type="text" id="grupe_id" name="grupe_id" class="form-control" placeholder="Companie id" value="{{ old('grupe_id') }}">
                                <span class="text-danger">{{ $errors->first('grupe_id') }}</span>
                                <small class="form-text text-muted">Please, enter grupes id number.</small>

        <button type="submit" class="btn btn-primary">Enter</button>
</div>
                @csrf
                               </form>
</div>
</div>
</div>
</div>
</div>
 {{--                        isikeliame summernote'a atsiranda "irankiu juosta                             --}}
            <script>
                $(document).ready(function()    {
                $('#summernote').summernote();  });
            </script>




@endsection