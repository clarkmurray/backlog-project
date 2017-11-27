@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class= "panel-heading">Search</div>

				<div class="panel-body">

					<form class="form">
						<input class="form-control" placeholder="Find book, movie, or show">
						<input type="submit" value="Search">
					</form>

				</div>

			</div>
		</div>
	</div>
</div>



@endsection