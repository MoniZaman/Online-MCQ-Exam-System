@extends('admin.layouts.app')

@section('containt')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2" style="margin-top:50px;">
			<div class="panel panel-default" >
				<div class="panel-heading">Add CategoryList</div>
				<div class="panel-body">
					<form method="post" action="{{URL::to('/manage_category')}}" enctype="multipart/form-data">
						<div class="form-group">
							<label for="email">Category name:</label>
							<input type="text" class="form-control" name="category_name" value="{{$category->category_name}}" placeholder="category name">
							<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
							<input type="hidden" name="id" value="{{$category->id}}"  >
						</div>					   
						<div class="checkbox">
							Status:<label><input type="checkbox" name="active" value="{{$category->status}}" >Active</label>
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@stop
