@extends('admin.layouts.app')

@section('containt')     		
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2" style="margin-top:50px;">
			<div class="panel panel-default" >
				<div class="panel-heading">UserList</div>
				<div class="panel-body">             
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Username</th>
								<th>Email</th>
								<th>DateJoin</th>
							</tr>
						</thead>
						<tbody>
							@foreach($user as $users)
							<tr>
								<td>{{$users->name}}</td>
								<td>{{$users->email}}</td>
								<td>{{$users->created_at}}</td>
							</tr>
							@endforeach
						</tbody>
						<thead>
							<tr>
								<th>Username</th>
								<th>Email</th>
								<th>DateJoin</th>
							</tr>
						</thead>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@stop
