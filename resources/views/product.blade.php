@extends('templates.main')

@section('content')
	<h2>{{$product -> name}}</h2>
			<article class="group">
				<img src="{{asset('productphotos/'.$product -> photo)}}" alt="">
				<h4>{{$product -> name}}</h4>
				<p>{{$product -> description}}</p>
				<span class="price"><i class="icon-dollar"></i> {{$product -> price}}</span>
				<span class="addtocart"><i class="icon-plus"></i></span>
			</article>		
@endsection			
