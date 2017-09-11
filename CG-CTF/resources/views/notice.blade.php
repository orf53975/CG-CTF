@extends('layouts.app')
@section('content')
<div class="container">
<table class="table">
	<caption>NOTICE</caption>
   <thead>
      <tr>
         <th>notice</th>
		  <th>time</th>
      </tr>
   </thead>
   @if(isset($notices))
       @foreach($notices as $notice)
    <tbody>
      <tr>
         <td width="80%">{!! nl2br(e($notice['content'])) !!}</td>
		      <td>{{$notice['created_at']}}</td>
	   </tr>
   </tbody>
       @endforeach
    @endif
</table>

  {{ $notices->links() }}
</div>
@endsection