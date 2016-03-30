<!-- start: MAIN MENU TOGGLER BUTTON -->
<div class="navigation-toggler">
    <i class="clip-chevron-left"></i>
    <i class="clip-chevron-right"></i>

</div>
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
            <img src="{!! gravatarUrl(Sentinel::getUser()->email) !!}" class="img-circle" alt="User Image" />

        </div>
        <div class="pull-left info">
            <p>{{ Sentinel::getUser()->first_name . ' ' . Sentinel::getUser()->last_name }}</p>

            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>
<br style="clear:both" />
<!-- end: MAIN MENU TOGGLER BUTTON -->
<!-- start: MAIN NAVIGATION MENU -->
<ul class="main-navigation-menu">
    <li class="active open">
        <a href="index.html"><i class="clip-home-3"></i>
            <span class="title"> Dashboard </span><span class="selected"></span>
        </a>
    </li>
    <li> <a href="javascript:void(0)"><i class="clip-screen"></i> <span class="title"> Layouts </span><i class="icon-arrow"></i> <span class="selected"></span> </a> <ul class="sub-menu"> <li> <a href="layouts_horizontal_menu1.html"> <span class="title"> Horizontal Menu </span> <span class="badge badge-new">new</span> </a> </li>
            <li> <a href="layouts_sidebar_closed.html"> <span class="title"> Sidebar Closed </span> </a> </li>
            <li> <a href="layouts_boxed_layout.html"> <span class="title"> Boxed Layout </span> </a> </li>
            <li> <a href="layouts_footer_fixed.html"> <span class="title"> Footer Fixed </span> </a> </li>
            <li> <a href="../clip-one-rtl/index.html"> <span class="title"> RTL Version </span> </a> </li>
        </ul>
    </li>
    <li> <a href="../../frontend/clip-one/index.html" target="_blank"><i class="clip-cursor"></i> <span class="title"> Frontend Theme </span><span class="selected"></span> </a> </li>
    <li> <a href="javascript:void(0)"><i class="clip-cog-2"></i> <span class="title"> UI Lab </span><i class="icon-arrow"></i> <span class="selected"></span> </a> <ul class="sub-menu"> <li> <a href="ui_elements.html"> <span class="title"> Elements </span> </a> </li>
            <li> <a href="ui_buttons.html"> <span class="title"> Buttons &amp; icons </span> </a> </li>
            <li> <a href="ui_animations.html"> <span class="title"> CSS3 Animation </span> </a> </li>
            <li> <a href="ui_modals.html"> <span class="title"> Extended Modals </span> </a> </li>
            <li> <a href="ui_tabs_accordions.html"> <span class="title"> Tabs &amp; Accordions </span> </a> </li>
            <li> <a href="ui_sliders.html"> <span class="title"> Sliders </span> </a> </li>
            <li> <a href="ui_treeview.html"> <span class="title"> Treeview </span> </a> </li>
            <li> <a href="ui_nestable.html"> <span class="title"> Nestable List </span> </a> </li>
            <li> <a href="ui_typography.html"> <span class="title"> Typography </span> </a> </li>
        </ul>
    </li>
    <li> <a href="javascript:void(0)"><i class="clip-grid-6"></i> <span class="title"> Tables </span><i class="icon-arrow"></i> <span class="selected"></span> </a> <ul class="sub-menu"> <li> <a href="table_static.html"> <span class="title">Static Tables</span> </a> </li>
            <li> <a href="table_responsive.html"> <span class="title">Responsive Tables</span> </a> </li>
            <li> <a href="table_data.html"> <span class="title">Data Tables</span> </a> </li>
        </ul>
    </li>
    <li> <a href="javascript:void(0)"><i class="clip-pencil"></i> <span class="title"> Forms </span><i class="icon-arrow"></i> <span class="selected"></span> </a> <ul class="sub-menu"> <li> <a href="form_elements.html"> <span class="title">Form Elements</span> </a> </li>
            <li> <a href="form_wizard.html"> <span class="title">Form Wizard</span> </a> </li>
            <li> <a href="form_validation.html"> <span class="title">Form Validation</span> </a> </li>
            <li> <a href="form_inline.html"> <span class="title">Inline Editor</span> </a> </li>
            <li> <a href="form_x_editable.html"> <span class="title">Form X-editable</span> </a> </li>
            <li> <a href="form_image_cropping.html"> <span class="title">Image Cropping</span> </a> </li>
            <li> <a href="form_multiple_upload.html"> <span class="title">Multiple File Upload</span> </a> </li>
            <li> <a href="form_dropzone.html"> <span class="title">Dropzone File Upload</span> </a> </li>
        </ul>
    </li>
    <li> <a href="javascript:void(0)"><i class="clip-user-2"></i> <span class="title">Login</span><i class="icon-arrow"></i> <span class="selected"></span> </a> <ul class="sub-menu"> <li> <a href="login_example1.html"> <span class="title">Login Form Example 1</span> </a> </li>
            <li> <a href="login_example2.html"> <span class="title">Login Form Example 2</span> </a> </li>
        </ul>
    </li>
    <li> <a href="javascript:void(0)"><i class="clip-file"></i> <span class="title">Pages</span><i class="icon-arrow"></i> <span class="selected"></span> </a> <ul class="sub-menu"> <li> <a href="pages_user_profile.html"> <span class="title">User Profile</span> </a> </li>
            <li> <a href="pages_invoice.html"> <span class="title">Invoice</span> <span class="badge badge-new">new</span> </a> </li>
            <li> <a href="pages_gallery.html"> <span class="title">Gallery</span> </a> </li>
            <li> <a href="pages_timeline.html"> <span class="title">Timeline</span> </a> </li>
            <li> <a href="pages_calendar.html"> <span class="title">Calendar</span> </a> </li>
            <li> <a href="pages_messages.html"> <span class="title">Messages</span> </a> </li>
            <li> <a href="pages_blank_page.html"> <span class="title">Blank Page</span> </a> </li>
        </ul>
    </li>
    <li> <a href="javascript:void(0)"><i class="clip-attachment-2"></i> <span class="title">Utility</span><i class="icon-arrow"></i> <span class="selected"></span> </a> <ul class="sub-menu"> <li> <a href="utility_faq.html"> <span class="title">Faq</span> </a> </li>
            <li> <a href="utility_search_result.html"> <span class="title">Search Results </span> <span class="badge badge-new">new</span> </a> </li>
            <li> <a href="utility_lock_screen.html"> <span class="title">Lock Screen</span> </a> </li>
            <li> <a href="utility_404_example1.html"> <span class="title">Error 404 Example 1</span> </a> </li>
            <li> <a href="utility_404_example2.html"> <span class="title">Error 404 Example 2</span> </a> </li>
            <li> <a href="utility_404_example3.html"> <span class="title">Error 404 Example 3</span> </a> </li>
            <li> <a href="utility_500_example1.html"> <span class="title">Error 500 Example 1</span> </a> </li>
            <li> <a href="utility_500_example2.html"> <span class="title">Error 500 Example 2</span> </a> </li>
            <li> <a href="utility_pricing_table.html"> <span class="title">Pricing Table</span> </a> </li>
            <li> <a href="utility_coming_soon.html"> <span class="title">Cooming Soon</span> </a> </li>
        </ul>
    </li>
    <li> <a href="javascript:;" class="active"> <i class="clip-folder"></i> <span class="title"> 3 Level Menu </span> <i class="icon-arrow"></i> </a> <ul class="sub-menu"> <li> <a href="javascript:;"> Item 1 <i class="icon-arrow"></i> </a> <ul class="sub-menu"> <li> <a href="#"> Sample Link 1 </a> </li>
                    <li> <a href="#"> Sample Link 2 </a> </li>
                    <li> <a href="#"> Sample Link 3 </a> </li>
                </ul>
            </li>
            <li> <a href="javascript:;"> Item 1 <i class="icon-arrow"></i> </a> <ul class="sub-menu"> <li> <a href="#"> Sample Link 1 </a> </li>
                    <li> <a href="#"> Sample Link 1 </a> </li>
                    <li> <a href="#"> Sample Link 1 </a> </li>
                </ul>
            </li>
            <li> <a href="#"> Item 3 </a> </li>
        </ul>
    </li>
    <li> <a href="javascript:;"> <i class="clip-folder-open"></i> <span class="title"> 4 Level Menu </span><i class="icon-arrow"></i> <span class="arrow "></span> </a> <ul class="sub-menu"> <li> <a href="javascript:;"> Item 1 <i class="icon-arrow"></i> </a> <ul class="sub-menu"> <li> <a href="javascript:;"> Sample Link 1 <i class="icon-arrow"></i> </a> <ul class="sub-menu"> <li> <a href="#"><i class="fa fa-times"></i> Sample Link 1</a> </li>
                            <li> <a href="#"><i class="fa fa-pencil"></i> Sample Link 1</a> </li>
                            <li> <a href="#"><i class="fa fa-edit"></i> Sample Link 1</a> </li>
                        </ul>
                    </li>
                    <li> <a href="#"> Sample Link 1 </a> </li>
                    <li> <a href="#"> Sample Link 2 </a> </li>
                    <li> <a href="#"> Sample Link 3 </a> </li>
                </ul>
            </li>
            <li> <a href="javascript:;"> Item 2 <i class="icon-arrow"></i> </a> <ul class="sub-menu"> <li> <a href="#"> Sample Link 1 </a> </li>
                    <li> <a href="#"> Sample Link 1 </a> </li>
                    <li> <a href="#"> Sample Link 1 </a> </li>
                </ul>
            </li>
            <li> <a href="#"> Item 3 </a> </li>
        </ul>
    </li>
    <li> <a href="maps.html"><i class="clip-location"></i> <span class="title">Maps</span> <span class="selected"></span> </a> </li>
    <li> <a href="charts.html"><i class="clip-bars"></i> <span class="title">Charts</span> <span class="selected"></span> </a> </li>
</ul>
<!-- end: MAIN NAVIGATION MENU -->

<ul class="main-navigation-menu">
    <li class="{{ setActive('admin') }}"><a href="{{ url(getLang() . '/admin') }}"> <i class="fa fa-dashboard"></i> <span>Dashboard</span> </a></li>
    <li class="{{ setActive('admin/menu*') }}"><a href="{{ url(getLang() . '/admin/menu') }}"> <i class="fa fa-bars"></i> <span>Menu</span> </a> </li>
    <li class="{{ setActive('admin/news*') }}"><a href="javascript:void(0)"> <i class="fa fa-th"></i> <span>News</span>
        <i class="fa fa-angle-left pull-right"></i> </a>
        <ul class="sub-menu">
            <li><a href="{{ url(getLang() . '/admin/news') }}"><i class="fa fa-calendar"></i> All News</a> </li>
            <li><a href="{{ url(getLang() . '/admin/news/create') }}"><i class="fa fa-plus-square"></i> Add News</a> </li>
        </ul>
    </li>
    <li class="{{ setActive('admin/page*') }}"><a href="javascript:void(0)"> <i class="fa fa-bookmark"></i> <span>Pages</span>
        <i class="fa fa-angle-left pull-right"></i> </a>
        <ul class="sub-menu">
            <li><a href="{{ url(getLang() . '/admin/page') }}"><i class="fa fa-folder"></i> All Pages</a> </li>
            <li><a href="{{ url(getLang() . '/admin/page/create') }}"><i class="fa fa-plus-square"></i> Add Page</a> </li>
        </ul>
    </li>
    <li class="{{ setActive(['admin/photo-gallery*', 'admin/video*']) }}"><a href="javascript:void(0)"> <i class="fa fa-picture-o"></i> <span>Galleries</span>
        <i class="fa fa-angle-left pull-right"></i> </a>
        <ul class="sub-menu">
            <li> <a href="{{ url(getLang() . '/admin/photo-gallery') }}"><i class="fa fa-camera"></i> Photo Galleries</a> </li>
            <li> <a href="{{ url(getLang() . '/admin/video') }}"><i class="fa fa-play-circle-o"></i> Video Galleries</a> </li>

        </ul>
    </li>
    <li class="{{ setActive('admin/article*') }}"><a href="javascript:void(0)"> <i class="fa fa-book"></i> <span>Articles</span>
        <i class="fa fa-angle-left pull-right"></i> </a>
        <ul class="sub-menu">
            <li><a href="{{ url(getLang() . '/admin/article') }}"><i class="fa fa-archive"></i> All Articles</a> </li>
            <li> <a href="{{ url(getLang() . '/admin/article/create') }}"><i class="fa fa-plus-square"></i> Add Article</a> </li>
        </ul>
    </li>
    <li class="{{ setActive('admin/slider*') }}"><a href="javascript:void(0)"> <i class="fa fa-tint"></i> <span>Plugins</span>
        <i class="fa fa-angle-left pull-right"></i> </a>
        <ul class="sub-menu">
            <li><a href="{{ url(getLang() . '/admin/slider') }}"><i class="fa fa-toggle-up"></i> Sliders</a> </li>
        </ul>
    </li>
    <li class="{{ setActive('admin/project*') }}"><a href="javascript:void(0)"> <i class="fa fa-gears"></i> <span>Projects</span>
        <i class="fa fa-angle-left pull-right"></i> </a>
        <ul class="sub-menu">
            <li><a href="{{ url(getLang() . '/admin/project') }}"><i class="fa fa-gear"></i> All Projects</a> </li>
            <li> <a href="{{ url(getLang() . '/admin/project/create') }}"><i class="fa fa-plus-square"></i> Add Project</a> </li>
        </ul>
    </li>
    <li class="{{ setActive('admin/faq*') }}"><a href="javascript:void(0)"> <i class="fa fa-question"></i> <span>Faqs</span>
        <i class="fa fa-angle-left pull-right"></i> </a>
        <ul class="sub-menu">
            <li><a href="{{ url(getLang() . '/admin/faq') }}"><i class="fa fa-question-circle"></i> All Faq</a></li>
            <li> <a href="{{ url(getLang() . '/admin/faq/create') }}"><i class="fa fa-plus-square"></i> Add Faq</a> </li>
        </ul>
    </li>
    <li class="{{ setActive(['admin/user*', 'admin/group*']) }}"><a href="javascript:void(0)"> <i class="fa fa-user"></i> <span>Users</span>
        <i class="fa fa-angle-left pull-right"></i> </a>
        <ul class="sub-menu">
            <li><a href="{{ url(getLang() . '/admin/user') }}"><i class="fa fa-user"></i> All Users</a> </li>
            <li><a href="{{ url(getLang() . '/admin/role') }}"><i class="fa fa-group"></i> Add Role</a> </li>
        </ul>
    </li>
    <li class="{{ setActive(['admin/log*', 'admin/form-post']) }}"><a href="javascript:void(0)"> <i class="fa fa-thumb-tack"></i> <span>Records</span>
        <i class="fa fa-angle-left pull-right"></i> </a>
        <ul class="sub-menu">
            <li><a href="{{ url(getLang() . '/admin/log') }}"><i class="fa fa-save"></i> Log</a></li>
            <li> <a href="{{ url(getLang() . '/admin/form-post') }}"><i class="fa fa-envelope"></i> Form Post</a> </li>
        </ul>
    </li>
    <li class="{{ setActive('admin/settings*') }}">
        <a href="{{ url(getLang() . '/admin/settings') }}"> <i class="fa fa-gear"></i> <span>Settings</span> </a>
    </li>
    <li class="{{ setActive('admin/logout*') }}">
        <a href="{{ url(getLang() . '/admin/logout') }}"> <i class="fa fa-sign-out"></i> <span>Logout</span> </a>
    </li>
</ul>