@extends('layouts.app')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2" style="margin-top:50px;">
			<div class="panel panel-default" >
				<h1>Manage Category </h1><hr>
				<div class="panel-heading">Subject Listing</div>
				<div class="panel-body">              		 
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Subject Name</th>
								<th>Category</th>
								<th>Duration</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							foreach($subject as $subjects){
								?>
								<tr>
									<td><?php echo $subjects->subject; ?></td>
									<td><?php echo $subjects->category; ?></td>
									<td><?php echo $subjects->duration; ?></td>
									<td>
										<?php 
										if($subjects->status==0){  ?>
										<button class="btn dropdown-toggle">Inactive</button>
										<?php	
									}
									else{?>
									<button class="btn dropdown-toggle">Active</button>
									<?php  
								}
								?>					         	
							</td>
							<td>  
								<a href="<?=URL::to('/manage_question',array($subjects->id))?>"class="btn btn-primary"> <span class="glyphicon glyphicon-cog">Manage Question</a>
								<a href="<?=URL::to('manage_subject_edit',array($subjects->id))?>"  class="btn btn-primary"><span class="glyphicon glyphicon-edit">Edit</a>
								<a onclick="return check()" href="<?=URL::to('manage_subject_delete',array($subjects->id))?>" class="btn btn-primary">  <span class="glyphicon glyphicon-trash"></span>Detete</a>
							</td>
							
						</tr>
						<?php 
							} 
						?>		
						</tbody>
						<thead>
							<tr>
								<th>Subject Name</th>
								<th>Category</th>
								<th>Duration</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>


@stop
