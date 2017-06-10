@extends('front_end.layouts.app')

@section('containt')			

<div class="container">
	@include('front_end.timer')
	<div class="col-md-4" ></div>
	<div class="col-md-4" >
		<h1 id="status"></h1>
		<h2 id="minute"></h2>
		<button class="btn btn-primary" id="minutes"></button>
		<button class="btn btn-primary" id="seconds"></button>
	</div>
	<div class="col-md-4" ></div>
</div>	

<input type="hidden" name="time" class="time" value="{{$subject->duration}}">
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2" style="margin-top:50px;">
			<div class="panel panel-default" >
				<div class="panel-heading">Exam</div>
				<div class="panel-body">	
					<form method="post"  class="form-horizontal" id="formId" action="{{URL::to('/home/start/exam/result')}}" enctype="multipart/form-data">
						<div class="divs">
							<?php  
							$i = 0;    		 	  	      		 	  		
							foreach ($question as $questions) {       		 	  	
								if ($questions->subject_id==$subject->id) 
								{      		 	  		   		       		 	  		   	      		 	  	                      
									?> 					  					
									<div class="question">
										<input type="hidden" name="question_id_0{{$i}}" value="{{$questions->id}}"/>
										<input type="hidden" name="question_answer_{{$i}}" value="{{$questions->answer}}"/>
										<legend>{{$questions->question}}</legend>
										<strong># Question #{{$questions->id}} </strong>
										<li><input type="radio" name="get_answer_0{{$i}}" value="1" /><label for="crust1">{{$questions->option_1}}</label></li>
										<li><input type="radio" name="get_answer_0{{$i}}" value="2" /><label for="crust2">{{$questions->option_2}}</label></li>
										<li><input type="radio" name="get_answer_0{{$i}}" value="3" /><label for="crust3">{{$questions->option_3}}</label></li>
										<li><input type="radio" name="get_answer_0{{$i}}" value="4" /><label for="crust4">{{$questions->option_4}}</label></li>
									</div>
									<?php $i++; ?>
									<?php 		       		   					
								}
							}    		 			
							?> 
						</div>
						<input type="hidden" name="total_question" value="{{$i}}"/>  
						<input type="hidden" name="subject_name" value="{{$subject->subject}}"/> 
						<input type="hidden" name="time_taken"  id="time_taken">
						<input type="hidden" name="user_id"  value="{{Auth::user()->id}}" >

						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div id="buttons">	
							<button id="prev" class="btn btn-primary glyphicon glyphicon-backward" >Previous</button>
							<button id="next" value="Next" class="btn btn-primary">Next <span class="glyphicon glyphicon-forward"></span></button>					
						</div><br>
						<button class="btn btn-primary" onclick="return submit_confirm() " type="submit" >Submit your answer</button>
					</form>	 			
				</div>
			</div>  
		</div>
	</div>  

</div>
</div>  


<script type="text/javascript">
function submit_confirm(){
	return confirm("Are you sure to Submit your answer ");
}
</script>

<script>
$(document).ready(function(){
	$(".divs div").each(function(e) {
		if (e != 0)
			$(this).hide();
	});
	
	$("#next").click(function(){
		if ($(".divs div:visible").next().length != 0)
			$(".divs div:visible").next().show().prev().hide();
		else {
			$(".divs div:visible").hide();
			$(".divs div:first").show();
		}
		return false;
	});

	$("#prev").click(function(){
		if ($(".divs div:visible").prev().length != 0)
			$(".divs div:visible").prev().show().next().hide();
		else {
			$(".divs div:visible").hide();
			$(".divs div:last").show();
		}
		return false;
	});
})
</script>

<style type="text/css">
li{
	list-style: none;;
}

</style>


@stop




