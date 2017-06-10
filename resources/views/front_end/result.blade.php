@extends('front_end.layouts.app')
@section('containt')     		
<div class="container" style="padding-top:20px"> 
	<p style="text-align:center; margin-top:50px;">Thanks to give a exam  </p>  
	<table class="table table-bordered">
		
		<tr>
			<th scope="row" >Subject</th>
			<td>{{$result->subject}}</td>		  
			<tr>
				<th scope="row" >Total Question</th>
				<td>{{$result->total_questoin}}</td>
			</tr>	
			<tr>
				<th scope="row" >Currect Answer</th>
				<td>{{$result->correct_answer}}</td>		  
				<tr>
					<th scope="row" >Time Taken:</th>
					<td>{{$result->time_taken}}</td>
				</tr>
				<tr>
					<th scope="row" >Score:</th>
					<td>{{$result->score}}</td>		  
				</tr>		     			  
			</table>
		</div>
		
		@stop
