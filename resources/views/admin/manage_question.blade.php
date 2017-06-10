@extends('admin.layouts.app')

@section('containt')
<script type="text/javascript">

$(document).ready(function(){
	$('#show_hide_button').click(function(){
		$('#submited_question').slideToggle("slow");
	});
	$('#add_question').click(function(){
		$('#retrieve').slideToggle("slow");
	});
});


</script>

<style type="text/css">
#submited_question{
	display:none;

}
#retrieve{
	display: none;
}
</style>


<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2" style="margin-top:50px;">
			<div class="panel panel-default" >
				<div class="panel-heading">CategoryList</div>
				<div class="panel-body">            
					<div class="form-group">
						<label for="email">Subject Name:</label><input type="text" class="form-control" value="{{$subject->subject}}"  disabled>
						<input type="hidden" name="id" value="{{$subject->id}}"  >
					</div>
					<div class="form-group">
						<label for="pwd">Category:</label> <input type="text" class="form-control" value="{{$subject->category}}"  disabled>
					</div>						
					<label >Duration:</label>
					<div class="input-group">
						
						<input  type="text"  disabled class="form-control" value="{{$subject->duration}}">
						<span class="input-group-addon">Minutes</span>
					</div><br>
					<button   class="btn btn-primary " id="add_question"><span class="glyphicon glyphicon-plus-sign"></span> Add Question</button>
					<a href="{{ url('/manage_subject') }}"  class="btn btn-primary "><span class="glyphicon glyphicon-fast-backward"></span> Back Question</a>

					<div id="retrieve">
						<form method="post" action="{{URL::to('/admin/questionlist/store')}}" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="email">Question Name:</label><input type="textarea" name="question" class="form-control"  placeholder="Question Name">
								<input type="hidden" name="id" value="{{$subject->id}}"  >
							</div>
							<div class="form-group">
								<label for="pwd">Option #1</label> <input type="text" name="option_1" class="form-control"  placeholder="option # 1">
							</div>
							<div class="form-group">
								<label for="pwd">Option #2</label> <input type="text" name="option_2" class="form-control"  placeholder="option # 2">
							</div>
							<div class="form-group">
								<label for="pwd">Option #3</label> <input type="text" name="option_3" class="form-control"  placeholder="option # 3">
							</div>
							<div class="form-group">
								<label for="pwd">Option #4</label> <input type="text"  name="option_4" class="form-control"  placeholder="option # 4">
							</div>
							<div class="form-group">
								<label for="pwd">Answer</label>
								<select name="answer">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select>
							</div>
							<button type="submit" onclick="func(1)" class="btn btn-primary">Submit</button>
						</form> 

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2" style="margin-top:50px;">
			<div class="panel panel-default" >
				<div class="panel-heading">Questions Added</div>
				<div class="panel-body">            
					<?php       		 	  	      		 	  		
					foreach ($question as $questions) {       		 	  	
						if ($questions->subject_id==$subject->id) {      		 	  		   		       		 	  		   	      		 	  	                      
							?>
							<div class="container-fluid">
								<div class="row">
									<div class="col-md-8 col-md-offset-2" style="margin-top:50px;">
										<div class="panel panel-default" >
											<div class="panel-heading" href="##" id="show_hide_button">Question Number <?php $i=0;echo $i+1; ?></div>
											<div class="panel-body">            
												<div id="submited_question">
													<form method="post" ction="{{URL::to('/update_question/')}}" enctype="multipart/form-data" >
														<div class="form-group">
															<label for="email">Question Name:</label><input type="textarea" value="{{$questions->question}}" name="question" class="form-control"  placeholder="Question Name">
															<input type="hidden" name="id" value="{{$subject->id}}"  >
														</div>
														<div class="form-group">
															<label for="pwd">Option #1</label> <input type="text" value="{{$questions->option_1}}" name="option_1" class="form-control"  placeholder="option # 1">
														</div>
														<div class="form-group">
															<label for="pwd">Option #2</label> <input type="text" value="{{$questions->option_2}}" name="option_2" class="form-control"  placeholder="option # 2">
														</div>
														<div class="form-group">
															<label for="pwd">Option #3</label> <input type="text"value="{{$questions->option_3}}" name="option_3" class="form-control"  placeholder="option # 3">
														</div>
														<div class="form-group">
															<label for="pwd">Option #4</label> <input type="text" value="{{$questions->option_4}}" name="option_4" class="form-control"  placeholder="option # 4">
														</div>
														<div class="form-group">
															<label for="pwd">Answer</label>

															<select name="answer">
																<option value="{{$questions->answer}}" selected>{{$questions->answer}}</option>
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
																<option value="4">4</option>
															</select>
														</div>
														<button type="submit" class="btn btn-primary">  <span class="glyphicon glyphicon-trash"></span>Update</button>
														<a onclick="return check()" href="<?=URL::to('delete_question',array($questions->id))?>" class="btn btn-danger">  <span class="glyphicon glyphicon-trash"></span>Detete</a>
													</form> 
												</div>

											</div>
										</div>
									</div>
								</div>
							</div>	
							<?php 		       		   					
							}
						}    		 			
						?>
					
				</div>
			</div>
		</div>
	</div>
</div>





@stop
