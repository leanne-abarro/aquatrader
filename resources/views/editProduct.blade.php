@extends('templates.main')

@section('content')
	<h2>Edit product</h2>
	
		{!! Form::model($product, array('url' => 'products/'.$product -> id,'method' => 'put')) !!}
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

				{!! Form::label('type_id', 'Product Type') !!}
				{!! Form::select('type_id', \App\Models\Type::lists("name","id")) !!}
				
				{!! Form::submit('Update')!!}
				{{-- <input type="submit" value="Send"> --}}
			</fieldset>
		{!! Form::close() !!}

@endsection			
