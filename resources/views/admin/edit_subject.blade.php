@extends('admin.layouts.app')

@section('containt')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Edit Subject</div>
				<div class="panel-body">           		 
					<form method="post" class="form-horizontal" role="form"  action="{{URL::to('/manage_subject/')}}" enctype="multipart/form-data">
						<div class="form-group">
							<label for="name" class="col-md-4 control-label">Book Name</label>
							<div class="col-md-6">
								<input type="text" class="form-control" value="{{$subject->subject}}" name="subject" placeholder="Subject name">
								<input type="hidden" name="id" value="{{$subject->id}}"  >
							</div>
						</div>
						
						<div class="form-group">
							<label for="name" class="col-md-4 control-label">Category</label>
							<div class="col-md-6">
								<select name="category" class="form-control">
									<?php 
									foreach($category as $categorys){
										?>	
										<option value="{{$categorys->category_name}}"><?php echo $categorys->category_name; ?></option>

										<?php 
									}
									?>				                					              
								</select>
							</div>
						</div>
						
						<div class="form-group">
							<label for="name" class="col-md-4 control-label">Duration</label>
							<div class="col-md-6">
								<input type="number" class="form-control" value="{{$subject->duration}}" name="duration" placeholder="time">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									<i class="fa fa-btn fa-user"></i> Submit
								</button>
							</div>
						</div>
						<!-- <button type="submit" class="btn btn-primary">Submit</button> -->
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


@stop
