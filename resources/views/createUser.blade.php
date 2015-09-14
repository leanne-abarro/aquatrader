@extends('templates.main')

@section('content')
	<h2>Create an account</h2>
	
		{!! Form::open(array('url' => 'users')) !!}
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

				{!! Form::label('password', 'Password') !!}
				{!! Form::password('password') !!}
				{!! $errors -> first('password','<p>:message</p>')!!}

				{!! Form::label('password_confirmation', 'Confirm Password') !!}
				{!! Form::password('password_confirmation') !!}
				{!! $errors -> first('password_confirmation','<p>:message</p>')!!}
				
				
				{!! Form::submit('Send')!!}
				{{-- <input type="submit" value="Send"> --}}
			</fieldset>
		{!! Form::close() !!}

@endsection		

