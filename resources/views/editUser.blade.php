@extends('templates.main')

@section('content')
	<h2>Edit User Details</h2>
	
		{!! Form::model($user, array('url' => 'users/'.$user -> id,'method' => 'put')) !!}
			<fieldset>
				{!! Form::label('username', 'Username') !!}
				{!! Form::text('username') !!}
				{!! $errors -> first('username','<p>:message</p>')!!}

				{!! Form::label('email', 'Email') !!}
				{!! Form::text('email') !!}
				{!! $errors -> first('email','<p>:message</p>')!!}

				{!! Form::label('firstname', 'First Name') !!}
				{!! Form::text('firstname') !!}
				{!! $errors -> first('firstname','<p>:message</p>')!!}

				{!! Form::label('lastname', 'Last Name') !!}
				{!! Form::text('lastname') !!}
				{!! $errors -> first('lastname','<p>:message</p>')!!}
				
				{!! Form::submit('Send')!!}
				{{-- <input type="submit" value="Send"> --}}
			</fieldset>
		{!! Form::close() !!}

@endsection			
