@extends('layouts.app')
@section('content')
<div class="container">
<table class="table">
	<caption>Score Board</caption>
   <thead>
      <tr>
         <th>rank</th>
         <th>name</th>
		  <th>score</th>
		  <th>time</th>
      </tr>
   </thead>
   @if(isset($users))
       @foreach($users as $user)
    <tbody>
      <tr>
         <td>{{$loop->iteration}}</td>
         <td>{{$user['name']}}</td>
		  <td>{{$user['totalScore']}}</td>
		  <td>{{$user['lastsubtime']}}</td>
	   </tr>
   </tbody>
       @endforeach
    @endif
</table>
</div>
@endsection