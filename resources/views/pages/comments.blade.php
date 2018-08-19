@extends('layouts.app')

@section('content')
<div class="container"><div id="myDIV" class=" col-md-6 .col-md-offset-3"></div>
   <form class="form-inline" method="post"  enctype="multipart/form-data">
   {{csrf_field()}}
         <input class="form-control offset-md-2" type="search" placeholder="dodaj komentarz..." aria-label="Search" name="value">
       <button class="btn btn-outline-info my-2 my-sm-0" type="info">dodaj</button>
   </form>
 </div>
</div>
</div>
@endsection
<!-- action="{{action('HomeController@index')}}" -->