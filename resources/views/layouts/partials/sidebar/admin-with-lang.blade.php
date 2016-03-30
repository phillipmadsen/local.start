 <div class="main-navigation navbar-collapse collapse">

	<div class="navigation-toggler">
		<i class="clip-chevron-left"></i>
		<i class="clip-chevron-right"></i>
	</div>

	<ul class="main-navigation-menu">
		<li class="{{ setActive('admin') }}"><a href="{{ url(getLang() . '/admin') }}"> <i class="fa fa-dashboard"></i> <span>Dashboard</span> </a></li>
		<li class="{{ setActive(['admin/menu', 'admin/article*', 'admin/news*', 'admin/page*']) }}">
			<a href="javascript:void(0)" class="active">
				<i class="fa fa-shopping-cart"></i> 
				<span class="title">Website Content</span>
				<i class="icon-arrow"></i>
			</a>
			<ul class="sub-menu">
			<li class="{{ setActive('admin/article*') }}"><a href="javascript:void(0)"> <i class="fa fa-book"></i> <span>Articles</span> <i class="fa fa-angle-left pull-right"></i> </a> <ul class="sub-menu"> <li><a href="{{ url(getLang() . '/admin/article') }}"><i class="fa fa-archive"></i> All Articles</a> </li> <li> <a href="{{ url(getLang() . '/admin/article/create') }}"><i class="fa fa-plus-square"></i> Add Article</a> </li> </ul> </li>
			<li class="{{ setActive('admin/faq*') }}"><a href="javascript:void(0)"> <i class="fa fa-question"></i> <span>Faqs</span> <i class="fa fa-angle-left pull-right"></i> </a> <ul class="sub-menu"> <li><a href="{{ url(getLang() . '/admin/faq') }}"><i class="fa fa-question-circle"></i> All Faq</a></li> <li> <a href="{{ url(getLang() . '/admin/faq/create') }}"><i class="fa fa-plus-square"></i> Add Faq</a> </li> </ul> </li>
	 		<li class="{{ setActive(['admin/photo-gallery*', 'admin/video*']) }}"><a href="javascript:void(0)"> <i class="fa fa-picture-o"></i> <span>Galleries</span> <i class="fa fa-angle-left pull-right"></i> </a> <ul class="sub-menu"> <li> <a href="{{ url(getLang() . '/admin/photo-gallery') }}"><i class="fa fa-camera"></i> Photo Galleries</a> </li> <li> <a href="{{ url(getLang() . '/admin/video') }}"><i class="fa fa-play-circle-o"></i> Video Galleries</a> </li> </ul> </li>
			<li class="{{ setActive('admin/menu*') }}"><a href="{{ url(getLang() . '/admin/menu') }}"> <i class="fa fa-bars"></i> <span>Menu</span> </a> </li>
			<li class="{{ setActive('admin/news*') }}"><a href="javascript:void(0)"> <i class="fa fa-th"></i> <span>News</span> <i class="fa fa-angle-left pull-right"></i> </a> <ul class="sub-menu"> <li><a href="{{ url(getLang() . '/admin/news') }}"><i class="fa fa-calendar"></i> All News</a> </li> <li><a href="{{ url(getLang() . '/admin/news/create') }}"><i class="fa fa-plus-square"></i> Add News</a> </li> </ul> </li>
			<li class="{{ setActive('admin/page*') }}"><a href="javascript:void(0)"> <i class="fa fa-bookmark"></i> <span>Pages</span> <i class="fa fa-angle-left pull-right"></i> </a> <ul class="sub-menu"> <li><a href="{{ url(getLang() . '/admin/page') }}"><i class="fa fa-folder"></i> All Pages</a> </li> <li><a href="{{ url(getLang() . '/admin/page/create') }}"><i class="fa fa-plus-square"></i> Add Page</a> </li> </ul> </li>
			<li class="{{ setActive('admin/slider*') }}"><a href="javascript:void(0)"> <i class="fa fa-tint"></i> <span>Plugins</span> <i class="fa fa-angle-left pull-right"></i> </a> <ul class="sub-menu"> <li><a href="{{ url(getLang() . '/admin/slider') }}"><i class="fa fa-toggle-up"></i> Sliders</a> </li> </ul> </li>
			<li class="{{ setActive('admin/project*') }}"><a href="javascript:void(0)"> <i class="fa fa-gears"></i> <span>Project Manager</span> <i class="fa fa-angle-left pull-right"></i> </a> <ul class="sub-menu"> <li><a href="{{ url(getLang() . '/admin/project') }}"><i class="fa fa-gear"></i> All Projects</a> </li> <li> <a href="{{ url(getLang() . '/admin/project/create') }}"><i class="fa fa-plus-square"></i> Add Project</a> </li> </ul> </li>
			<li class="{{ setActive(['admin/log*', 'admin/form-post']) }}"><a href="javascript:void(0)"> <i class="fa fa-thumb-tack"></i> <span>Records</span> <i class="fa fa-angle-left pull-right"></i> </a> <ul class="sub-menu"> <li><a href="{{ url(getLang() . '/admin/log') }}"><i class="fa fa-save"></i> Log</a></li> <li> <a href="{{ url(getLang() . '/admin/form-post') }}"><i class="fa fa-envelope"></i> Form Post</a> </li> </ul> </li>
			</ul>
		</li>
		<li class="{{ setActive(['admin/products*', 'admin/shipping*', 'admin/taxes*', 'admin/merchant*']) }}">
			<a href="javascript:void(0)" class="">
				<i class="fa fa-shopping-cart"></i> 
				<span class="title"> Shop  </span>
				<i class="icon-arrow"></i>
			</a>
			<ul class="sub-menu">
				<li class="{{ setActive('admin/products*') }}"> <a href="javascript:void(0)"> <i class="fa fa-shopping-cart"></i> &nbsp; Products  Manager<i class="icon-arrow"></i> </a> <ul class="sub-menu"> <li class="{{ setActive('admin/products*') }} pulsate-regular"><a href="{{ url(getLang() . '/admin/products') }}"><i class="fa fa-th-list"></i> &nbsp; All Products</a></li> <li class="{{ setActive('admin/products/create') }}"> <a href="{{ url(getLang() . '/admin/products/create') }}"><i class="fa fa-cart-plus"></i> &nbsp; Add Product</a> </li> </ul> </li>
				<li class="{{ setActive('admin/shipping*') }}">
					<a href="javascript:void(0)"><i class="fa fa-truck"></i> &nbsp; Shipping <i class="icon-arrow"></i> </a>
					<ul class="sub-menu">
						<li> <a href="#"><i class="fa fa-pencil"></i> &nbsp; UPS Settings </a> </li>
						<li> <a href="#"><i class="fa fa-edit"></i> &nbsp; Box Settings </a> </li>
						<li> <a href="#"><i class="fa fa-times"></i> &nbsp; Settings </a> </li>
					</ul>
				</li>
				<li class="{{ setActive('admin/taxes*') }}"><a href="#"><i class="fa fa-lock"></i> &nbsp; Taxes </a> </li>
				<li class="{{ setActive('admin/merchant*') }}"><a href="#"><i class="fa fa-lock"></i> &nbsp; Merchant Settings </a> </li>
				<li class="{{ setActive('admin/analytics*') }}"><a href="#"><i class="fa fa-area-chart"></i> &nbsp; Analytics & Tracking </a> </li>
			</ul>
		</li>
		<li class="{{ setActive('admin/orders*') || setActive('admin/users*') || setActive('admin/invoices*') }}">
			<a href="javascript:void(0)">
				<i class="fa fa-money"></i> 
				<span class="title"> eCommerce  </span>
				<i class="icon-arrow"></i>
			</a>
			<ul class="sub-menu">
				<li> <a href=""><i class="fa fa-users"></i> &nbsp; Customers </a> </li>
				<li class="{{ setActive('admin/orders*') }}">
					<a href="javascript:void(0)"> <i class="fa fa-shopping-cart"></i> &nbsp; Orders Manager<i class="icon-arrow"></i> </a>
					<ul class="sub-menu">
						<li class="{{ setActive('admin/orders') }}"><a href="{{ url(getLang() . '/admin/orders') }}"><i class="fa fa-th-list"></i> All Orders</a></li>
						<li class="{{ setActive('admin/orders/process') }}">	
							<a href="javascript:void(0)"><i class="fa fa-edit"></i> &nbsp; In Process <i class="icon-arrow"></i> </a>
							<ul class="sub-menu">
								<li> <a href="#"><i class="fa fa-pencil"></i> &nbsp; New Orders </a> </li>
								<li> <a href="#"><i class="fa fa-edit"></i> &nbsp; Process Order </a> </li>
								<li> <a href="#"><i class="fa fa-times"></i> &nbsp; ncomplete Orders </a> </li>
							</ul>
						</li>
					</ul>
				</li>			
				<li> <a href="#"><i class="fa fa-sticky-note"></i> &nbsp; Invoice </a> </li>
			</ul>
		</li>
		<li class="{{ setActive('admin/settings*') }}">
			<a href="{{ url(getLang() . '/admin/settings') }}"> <i class="fa fa-gear"></i> <span>Settings</span> </a>
		</li>
		<li class="{{ setActive('admin/logout*') }}">
			<a href="{{ url(getLang() . '/admin/logout') }}"> <i class="fa fa-sign-out"></i> <span>Logout</span> </a>
		</li>
	</ul>
</div>