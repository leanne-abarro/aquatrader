@extends('templates.main')

@section('content')
	<h2>Login</h2>
	
		{!! Form::open(['url' => 'login']) !!}
			<fieldset>
				{!! Form::label('username', 'Username') !!}
				{!! Form::text('username') !!}
				{!! $errors -> first('username','<p>:message</p>')!!}

				{!! Form::label('password', 'Password') !!}
				{!! Form::password('password') !!}
				{!! $errors -> first('password','<p>:message</p>')!!}
				
				
				{!! Form::submit('Login')!!}
				{{-- <input type="submit" value="Send"> --}}
			</fieldset>
		{!! Form::close() !!}

@endsection		

