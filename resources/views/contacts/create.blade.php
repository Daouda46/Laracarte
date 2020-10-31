@extends('layouts/default', ['title' => 'Contact'])

@section('content')
    <div class="container">
       <div class="col-md-8 col-sm-10 mx-auto">
           <h1>Get In touch</h1>
           <p class="text-muted">If you having trouble with this service, <a href="mailto:{{ config('laracarte.admin_support_email') }}">ask for help</a></p>

           <form action="{{ route('contact') }}" method="POST">
                {{ csrf_field() }}
               <div class="form-group ">
                   <label for="name" class="control-label">Nom</label>
                   <input type="text" name="name" id="name" class="form-control {{ $errors->has('name')? 'is-invalid':'' }}" required="required" value="{{ old('name') }}">
                   {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
               </div>
               <div class="form-group">
                   <label for="email" class="control-label">Email</label>
                   <input type="email" name="email" id="email" class="form-control {{ $errors->has('email')? 'is-invalid':'' }}" required="required"value="{{ old('email') }}">
                   {!! $errors->first('email', '<span class="invalid-feedback">:message</span>') !!}
               </div>
               <div class="form-group">
                   <label for="message" class="control-label sr-only">Message</label>
                   <textarea class="form-control {{ $errors->has('message')? 'is-invalid':'' }}" name="message" id="message" cols="30" rows="10" required="required">{{ old('message') }}</textarea>
                   {!! $errors->first('message', '<span class="invalid-feedback">:message</span>') !!}
               </div>
               <div class="form-group">
                   <button type="submit" class="btn btn-default btn-primary btn-block">Submit &raquo;</button>
               </div>
           </form>
       </div>
    </div>
@stop