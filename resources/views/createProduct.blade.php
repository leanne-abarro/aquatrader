@extends('templates.main')

@section('content')
	<h2>Add new product</h2>
	
		{!! Form::open(['url' => 'products', 'files' => true]) !!}
			<fieldset>
				{!! Form::label('name', 'Product Name') !!}
				{!! Form::text('name') !!}
				{!! $errors -> first('name','<p>:message</p>')!!}

				{!! Form::label('description', 'Description') !!}
				{!! Form::textarea('description') !!}
				{!! $errors -> first('description','<p>:message</p>')!!}

				{!! Form::label('price', 'Price') !!}
				{!! Form::text('price') !!}
				{!! $errors -> first('price','<p>:message</p>')!!}

				{!! Form::label('photo', 'Photo') !!}
				{!! Form::file('photo') !!}

				{!! Form::label('type_id', 'Product Type') !!}
				{!! Form::select('type_id', \App\Models\Type::lists("name","id")) !!}
				
				{!! Form::submit('Send')!!}
				{{-- <input type="submit" value="Send"> --}}
			</fieldset>
		{!! Form::close() !!}

@endsection			
