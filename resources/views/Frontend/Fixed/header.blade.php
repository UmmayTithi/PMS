



<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						
						<li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
						
					</ul>
					<ul class="header-links pull-right">
						
						<li><a href="{{route('cart.view')}}"><i class="fa fa-user-o"></i> My Cart ({{session()->has('cart')?count(session()->get('cart')):0}})</a></li>
						
					</ul>
					<ul class="header-links pull-right">
					<li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
					@if(auth()->user())
						<li><a href="{{route('registration.form')}}"><i class="fa fa-user-o"></i>{{auth()->user()->name}} Registration/login/logout</a></li>
					@endif
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">

					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
									<img src="./img/logo.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form action="{{route('search')}}" method="post">
									@csrf
									<select class="input-select" name="category_id">
										@foreach(categories() as $category)
											<option value="{{$category->id}}">{{$category->name}}</option>
										@endforeach
									</select>
									<input class="input" placeholder="Search here" name="search">
									<button class="search-btn">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								

								

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		