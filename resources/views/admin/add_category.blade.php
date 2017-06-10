@extends('admin.layouts.app')

@section('containt')
<script type="text/javascript">
function show(target) {
	document.getElementById(target).style.display = 'block';
}
function hide(target) {
	document.getElementById(target).style.display = 'none';
}
</script>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2" style="margin-top:50px;">
			<div class="panel panel-default" >
				<div class="panel-heading">Add Category List</div>
				<div class="panel-body">	
					<form method="post" class="form-horizontal" action="{{URL::to('/admin/categorylist/store')}}" enctype="multipart/form-data">
						<div class="form-group">
                            <label for="name" class="col-md-4 control-label">Category Name</label>
                            <div class="col-md-6">
								<input type="text" class="form-control" name="category_name" value="" placeholder="category name">
								<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
							</div>
						</div>					   
						<!-- <div class="checkbox">
							Status:<label><input type="checkbox" name="active" value="1" >Active</label>
						</div>
						<button type="submit" class="btn btn-primary">Submit</button> -->
						<div class="form-group">
							<label for="name" class="col-md-4 control-label">Status</label>
							<div class="col-md-1">
								<input class="form-control "type="checkbox" name="active" value="1" >
							</div>
						</div>
						<!-- <div class="checkbox">
							Status:<label><input type="checkbox" name="sub_active" value="1" >Active</label>
						</div> -->
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									<i class="fa fa-btn fa-user"></i> Submit
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@stop
