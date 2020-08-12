@extends ('layout2')

@section('title', $goodie->name)

@section('extra-css')

@endsection

@section('content')



<div class="breadcrumbs">
	<div class="container">
		<a href="#">Home</a>
		<i class="fa fa-chevron-right breadcrumbs-separator"></i>
		<span>Goodie</span>

		<i class="fa fa-chevron-right breadcrumbs-separator"></i>
		<span>Cloud-Beans</span>

    </div>
	
</div>

<div class="Goodie-section container">
	<div class="Goodie-section-image">
		<img src="{{asset('img/4.jfif') }}" alt="Goodie">
    </div>
    <div class="Goodie-section-information">
    	<h1 class="Goodie-section-title">{{ $goodie->name }}</h1>
    	<div class="Goodie-section-subtitle"{{ $goodie->details }}</div>
    	<div class="Goodie-section-price">Rs/-350</div>
    	
    	<p>Delicious, handcrafted beverages and great-tasting food. The secret to making life better.</p>

    	<p>&nbsp;</p>

    	<a href="#" class="button">Add to cart</a>
    	
    </div>
	
</div>
@endsection