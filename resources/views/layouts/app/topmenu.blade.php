<div class="header-nav text-center">
	<nav class="main-nav main-nav1">
<ul>
{{-- <li class="menu-item-has-children">
<a href="/">Home </a>
</li> --}}
@foreach ($categories as $category)
<li class="has-mega-menu">
<a href="#">{{ ucfirst($category->name) }}</a>
<div class="mega-menu">
	@foreach ($category->subcategories->chunk(3) as $subchunk)
		
	<div class="row">
		@foreach ($subchunk as $subcat)
			
		
		<div class="col-sm-3">
			<div class="mega-menu-box">
				<h2 class="title14 mont-font color">{{ ucfirst($subcat->name) }}</h2>
				<ul class="list-none">
					@foreach ($subcat->childcategories as $childcat)
						
					<li><a href="#">{{ $childcat->name }}</a></li>
					@endforeach
				</ul>
			</div>
		</div>
		@endforeach
		
		{{-- <div class="col-sm-3">
			<div class="mega-menu-thumb"><img src="images/home/mega-menu.png" alt=""></div>
		</div> --}}
	</div>
	@endforeach

</div>
</li>
@endforeach

{{-- <li class="menu-item-has-children">
<a href="/products">Products</a>

</li> --}}
		
</ul>
<a href="#" class="toggle-mobile-menu"><span></span></a>
</nav>				</div>



