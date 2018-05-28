@if(Session::has('error'))
<div class="time-close alert alert-danger">
  <button type="button" class="close" data-dismiss="alert">x</button>
  {{ Session::get('error') }}
</div>
@endif

@if(Session::has('message'))
<div class="time-close alert alert-info">
  <button type="button" class="close" data-dismiss="alert">x</button>
  {{ Session::get('message') }}
</div>
@endif

@if(Session::has('success'))
<div class="time-close alert alert-success">
  <button type="button" class="close" data-dismiss="alert">x</button>
  {{ Session::get('success') }}
</div>
@endif

@if(Session::has('validation_error'))
<div class="alert alert-danger">
  <button type="button" class="close" data-dismiss="alert">x</button>
  @foreach(Session::get('validation_error') as $error)
    {{$error}}<br/>
  @endforeach
</div>
@endif

@if(Session::has('warning'))
<div class="alert alert-warning">
  <button type="button" class="close" data-dismiss="alert">x</button>
  {{ Session::get('warning') }}
</div>
@endif