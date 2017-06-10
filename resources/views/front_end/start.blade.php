@extends('front_end.layouts.app')

@section('containt')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2" style="margin-top:50px;">
			<div class="panel panel-default" >
				<h1>Start Exam</h1><hr>
				<div class="panel-heading">Start Exam</div>
				<div class="panel-body"> 
					<div class="form-group">
						<input type="hidden" name="exam_sub_id" value="{{$subject->id}}" >             
						<p>Subject:{{$subject->subject}}</p>
						<p>Exam Time:{{$subject->duration}}</p>
						<a  class="btn btn-primary" href="{{url('/home/start/exam',array($subject->id))}}">Start</a>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>

<!-- <div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<input type="hidden" name="exam_sub_id" value="{{$subject->id}}" >             
			<p>Subject:{{$subject->subject}}</p>
			<p>Exam Time:{{$subject->duration}}</p>
			<a  class="btn btn-primary" href="{{url('/home/start/exam',array($subject->id))}}">Start</a>
		</div>
	</div>
</div> -->
@stop
