@extends('admin.layouts.app')

@section('containt')     		
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2" style="margin-top:50px;">
			<div class="panel panel-default" >
				<div class="panel-heading">UserResult</div>
				<div class="panel-body">        
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Username</th>
								<th>Email ID</th>
								<th>Test Name</th>
								<th>Total Marks(%)</th>
								<th>Time Taken</th>
								<th>Exam Date</th>
							</tr>
						</thead>
						<tbody>
							@foreach($users as $user)
							<tr>
								<td>{{$user->name}}</td>
								<td>{{$user->email}}</td>
								<td>{{$user->subject}}</td>
								<td>{{$user->score}}</td>
								<td>{{$user->time_taken}}</td>
								<td>{{$user->created_at}}</td>
							</tr>
							@endforeach
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@stop
