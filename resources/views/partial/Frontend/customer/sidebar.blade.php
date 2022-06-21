<!-- HERO SECTION-->
<div class="page-head ">
	<div class="container">
    <h1 class="h2 text-uppercase mb-9">{{ auth()->user()->full_name }} Profile</h1> 
		<div class="d-flex flex-column flex-md-row">
			<ol class="breadcrumb p-0 bg-transparent mx-auto mx-md-0 mr-md-auto mb-0">
				<li class="breadcrumb-item">
                <a href="{{ route('frontend.index') }}">Home</a>
				</li>
				<li class="breadcrumb-item active {{ Route::currentRouteName() == 'customer.dashboard' ? 'bg-primary' : 'bg-light' }}"><a href="{{ route('customer.dashboard') }}">Dashboard</a></li>
				<li class="breadcrumb-item active {{ Route::currentRouteName() == 'customer.profile' ? 'bg-primary' : 'bg-light' }}"><a href="{{ route('customer.profile') }}">Profile</a></li>
				<li class="breadcrumb-item active {{ Route::currentRouteName() == 'customer.addresses' ? 'bg-primary' : 'bg-light' }}"><a href="{{ route('customer.addresses') }}">Addresses</a></li>
				<li class="breadcrumb-item active {{ Route::currentRouteName() == 'customer.orders' ? 'bg-primary' : 'bg-light' }}"><a href="{{ route('customer.orders') }}">Orders</a></li>
				<li class="breadcrumb-item active"><a href="javascript:void(0);"
                 onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a></li>
                 <form action="{{ route('logout') }}" method="post" id="logout-form" class="d-none">
            @csrf
            </form>
			</ol>
		</div>
	</div><!-- /.container -->
</div><!-- /.page-head -->


