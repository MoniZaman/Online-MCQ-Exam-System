@extends('front_end.layouts.app')

@section('containt')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2" style="margin-top:50px;">
			<div class="panel panel-default" >
				<div class="panel-heading">Result Listing</div>
				<div class="panel-body">              		 
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>##</th>
								<th>Subject Name</th>
								<th>Score</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i=1; 
							foreach($results as $result){
								?>
								<tr>
									<td><?php echo $i++; ?></td>
									<td><?php echo $result->subject; ?></td>
									<td><?php echo $result->score; ?></td>
									<td>  
										<a href="<?=URL::to('/result',array($result->id))?>"class="btn btn-primary"> <span class="glyphicon glyphicon-cog">Details</a>
									</td>  
								</tr>
								<?php 
							} 
							?>		
						</tbody>
						<thead>
							<tr>
								<th>##</th>
								<th>Subject Name</th>
								<th>Score</th>
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
