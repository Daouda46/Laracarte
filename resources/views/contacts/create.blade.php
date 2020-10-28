@extends('layouts/default', ['title' => 'Contact'])

@section('content')
    <div class="container">
       <div class="col-md-8 col-offset-2 col-sm-10 col-sm-offset-1">
           <h1>Get In touch</h1>
           <p class="text-muted">If you having trouble with this service, <a href="mailto:ouattara.daouda4613@gmail.com">ask for help</a></p>

           <form action="#" method="post">
               <div class="form-group">
                   <label for="name" class="control-label">Nom</label>
                   <input type="text" name="name" id="name" class="form-control" required="required">
               </div>
               <div class="form-group">
                   <label for="email" class="control-label">Email</label>
                   <input type="email" name="email" id="email" class="form-control" required="required">
               </div>
               <div class="form-group">
                   <label for="message" class="control-label sr-only">Message</label>
                   <textarea class="form-control" name="message" id="message" cols="30" rows="10" required="required"></textarea>
               </div>
               <div class="form-group">
                   <button type="submit" class="btn btn-default btn-primary btn-block">Submit &raquo;</button>
               </div>
           </form>
       </div>
    </div>
@stop