<nav class="navbar navbar-static container">
    <div class="navbar-header">
		<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	
	</div>
	
	<div class="collapse navbar-collapse js-navbar-collapse">
		<ul class="nav navbar-nav">
      
			
      {{-- <li class="dropdown dropdown-large">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Category 2 <b class="caret"></b></a>
				
				<ul class="dropdown-menu dropdown-menu-large row">
					<li class="col-sm-6">
						<ul>
							<li class="dropdown-header">Sword of Truths</li>
							<li><a href="#">Example</a></li>
							<li><a href="#">Example</a></li>
							<li><a href="#">Example</a></li>
							<li><a href="#">Example</a></li>
							<li><a href="#">Example</a></li>
							<li><a href="#">Example</a></li>
              <li class="divider"></li>
              <li class="dropdown-header">Theme/Character</li>
							<li><a href="#">Example</a></li>
							<li><a href="#">Example</a></li>
							<li><a href="#">Example</a></li>
							<li><a href="#">Example</a></li>
					
						</ul>
					</li>
					<li class="col-sm-6">
						<ul>
							<li class="dropdown-header">by brand</li>
							<li><a href="#">Example</a></li>
							<li><a href="#">Example</a></li>
							<li><a href="#">Example</a></li>
							<li><a href="#">Example</a></li>
							<li><a href="#">Example</a></li>
							<li><a href="#">Example</a></li>
							<li class="divider"></li>
              <li><img class"img-responsive" src="http://placehold.it/200x150"/></li>
						</ul>
					</li>

					
				</ul>
				
			</li> --}}
			
      
      {{-- <li class="dropdown dropdown-large">
				<a href="#">Some link</a>
      </li>
      <li class="dropdown dropdown-large">
				<a href="#">Some link</a>
      </li> --}}
	  @foreach ($categories as $category)
          
	  <li class="dropdown dropdown-large">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ $category->name }}<b class="caret"></b></a>
		
            
        
		<ul class="dropdown-menu dropdown-menu-large row">
            @foreach ($category->subcategories as $subcat)
			<li class="col-sm-3">
				<ul>
                    <li class="dropdown-header">{{ $subcat->name }}</li>
                    @foreach ($subcat->childcategories as $childcat)
                        
					<li><a href="#">{{ $childcat->name }}</a></li>
                    @endforeach
				</ul>
			</li>
			
            @endforeach
        </ul>
		
	</li>
      @endforeach

	
      
      
		</ul>
		
	</div><!-- /.nav-collapse -->
</nav>