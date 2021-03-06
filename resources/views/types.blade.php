@extends('templates.main')

@section('content')
	<h2>{{$type -> name}}</h2>

	<?php $products = $type -> products() -> paginate(6); 
		  $products -> setPath("");
	?>
		@foreach($products as $product)
			<article class="group">
				<img src="{{asset('productphotos/'.$product -> photo)}}" alt="">
                <h4><a href="{{url('products/'.$product -> id)}}">{{$product -> name}}</a></h4>
				<p>{{$product -> description}}</p>
				<span class="price"><i class="icon-dollar"></i> {{$product -> price}}</span>
				<span class="addtocart"><a href="{{url('products/'.$product -> id)}}"><i class="icon-plus"></i></a></span>
			</article>
		@endforeach
	{!! $products -> render() !!}
@endsection			
