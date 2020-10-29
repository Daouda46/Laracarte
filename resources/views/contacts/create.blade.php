@extends('layouts/default', ['title' => 'Contact'])

@section('content')
    <div class="container">
       <div class="col-md-8 col-offset-2 col-sm-10 col-sm-offset-1">
           <h1>Get In touch</h1>
           <p class="text-muted">If you having trouble with this service, <a href="mailto:ouattara.daouda4613@gmail.com">ask for help</a></p>

           <form action="{{ route('contact') }}" method="POST">
                {{ csrf_field() }}
               <div class="form-group {{ $errors->has('name')? 'has-error':'' }}">
                   <label for="name" class="control-label">Nom</label>
                   <input type="text" name="name" id="name" class="form-control" required="required">
                   {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
               </div>
               <div class="form-group {{ $errors->has('email')? 'has-error':'' }}">
                   <label for="email" class="control-label">Email</label>
                   <input type="email" name="email" id="email" class="form-control" required="required">
                   {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
               </div>
               <div class="form-group {{ $errors->has('message')? 'has-error':'' }}">
                   <label for="message" class="control-label sr-only">Message</label>
                   <textarea class="form-control" name="message" id="message" cols="30" rows="10" required="required"></textarea>
                   {!! $errors->first('message', '<span class="help-block">:message</span>') !!}
               </div>
               <div class="form-group">
                   <button type="submit" class="btn btn-default btn-primary btn-block">Submit &raquo;</button>
               </div>
           </form>
       </div>
    </div>
@stop