@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
    <div id="myDIV" class="col-md-6 .col-md-offset-3">
<ul>
 @foreach($comments as $comment)
       <li class="card mb-1">
         <b>Uzytkownik {{$comment['user_name']}} napisal:</b><br>{{$comment['value']}}
       </li>
 @endforeach
</ul>
</div>

 <div id="myDIV" class=" col-md-6 .col-md-offset-3"></div>
   <form class="form-inline" method="post"  enctype="multipart/form-data">
   {{csrf_field()}}
         <input class="form-control offset-md-2" type="search" placeholder="dodaj komentarz..." aria-label="Search" name="value">
       <button class="btn btn-outline-info my-2 my-sm-0" type="info">dodaj</button>
   </form>
 </div>
</div>



@endsection

