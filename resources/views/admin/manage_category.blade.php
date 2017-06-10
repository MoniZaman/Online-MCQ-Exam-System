@extends('admin.layouts.app')

@section('containt')     		
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2" style="margin-top:50px;">
			<div class="panel panel-default" >
				<div class="panel-heading">CategoryList</div>
				<div class="panel-body">     
				
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Categoryname</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							foreach($category as $categorys){
								?>
								<tr>
									<td><?php echo $categorys->category_name; ?></td>
									<td>
										<?php 
										if($categorys->status==0){  ?>
										<button class="btn btn-danger">Inactive</button>
										<?php	
									}
									else{?>
									<button class="btn btn-success">Active</button>
									<?php  
								}
								?>					         	
							</td>
							<td>  
								<a  href="<?=URL::to('manage_category_edit',array($categorys->id))?>"  class="btn btn-primary"><span class="glyphicon glyphicon-edit">Edit</a>
								<a  onclick="return check()" href="<?=URL::to('manage_category_delete',array($categorys->id))?>" class="btn btn-danger">
									<span class="glyphicon glyphicon-trash"></span>Detete</a>
								</td>
								
							</tr>
							<?php 
						} 
						?>		
						
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@stop

