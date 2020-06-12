<!DOCTYPE html>
<html lang="en">
@include('admin.layouts.head')
@yield('css')

<!-- Mirrored from oscar.thinqteam.com/horizontal-nav/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 May 2020 10:10:32 GMT -->


<body class="sidebar-horizontal">
    <div id="wrapper" class="wrapper">
        <!-- HEADER & TOP NAVIGATION -->
        <nav class="navbar">
            <!-- Logo Area -->
            <div class="navbar-header">
                <a href="index-2.html" class="navbar-brand text-center">
                    <img class="logo-expand" alt="" src="{{asset('assets/demo/logo-expand.png')}}">
                    <img class="logo-collapse" alt="" src="{{asset('assets/demo/logo-collapse.png')}}">
                    <!-- <p>OSCAR</p> -->
                </a>
            </div>
            <!-- /.navbar-header -->
            <!-- Left Menu & Sidebar Toggle -->
            <ul class="nav navbar-nav">
                <li class="sidebar-toggle"><a href="javascript:void(0)" class="ripple"><i class="material-icons list-icon">menu</i></a>
                </li>
            </ul>
            <!-- /.navbar-left -->
            <!-- Search Form -->
            <form class="navbar-search d-none d-md-block" role="search"><i class="material-icons list-icon">search</i>
                <input type="text" class="search-query" placeholder="Search anything..."> <a href="javascript:void(0);" class="remove-focus"><i class="material-icons">clear</i></a>
            </form>
            <!-- /.navbar-search -->
            <div class="spacer"></div>
            <!-- Right Menu -->
            <ul class="nav navbar-nav d-none d-lg-flex">
                <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle ripple" data-toggle="dropdown"><i class="material-icons list-icon">mail_outline</i> <span class="badge badge-pill bg-primary">3</span></a>
                    <div class="dropdown-menu dropdown-left dropdown-card animated flipInY">
                        <div class="card">
                            <header class="card-header">New messages <span class="mr-l-10 badge badge-border bg-primary">3</span>
                            </header>
                            <ul class="list-unstyled dropdown-list-group">
                                <li><a href="#" class="media"><span class="d-flex user--online thumb-xs"><img src="{{asset('assets/demo/users/user3.jpg')}}" class="rounded-circle" alt=""> </span><span class="media-body"><span class="media-heading">Steve Smith</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">I slowly updated my Behance with some recent projects ...</span></span></a>
                                </li>
                                <li><a href="#" class="media"><span class="d-flex user--offline thumb-xs"><img src="{{asset('assets/demo/users/user6.jpg')}}" class="rounded-circle" alt=""> </span><span class="media-body"><span class="media-heading">Emily Lee</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">Hi John!</span></span></a>
                                </li>
                                <li><a href="#" class="media"><span class="d-flex user--online thumb-xs"><img src="{{asset('assets/demo/users/user2.jpg')}}" class="rounded-circle" alt=""> </span><span class="media-body"><span class="media-heading">Christopher Palmer</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">Like the illustration and the indicator style. Best of luck ...</span></span></a>
                                </li>
                                <li><a href="#" class="media"><span class="d-flex user--online thumb-xs"><img src="{{asset('assets/demo/users/user3.jpg')}}" class="rounded-circle" alt=""> </span><span class="media-body"><span class="media-heading">Steve Smith</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">I slowly updated my Behance with some recent projects ...</span></span></a>
                                </li>
                                <li><a href="#" class="media"><span class="d-flex user--offline thumb-xs"><img src="{{asset('assets/demo/users/user6.jpg')}}" class="rounded-circle" alt=""> </span><span class="media-body"><span class="media-heading">Emily Lee</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">Hi John!</span></span></a>
                                </li>
                                <li><a href="#" class="media"><span class="d-flex user--offline thumb-xs"><img src="{{asset('assets/demo/users/user2.jpg')}}" class="rounded-circle" alt=""> </span><span class="media-body"><span class="media-heading">Christopher Palmer</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">Like the illustration and the indicator style. Best of luck ...</span></span></a>
                                </li>
                            </ul>
                            <!-- /.dropdown-list-group -->
                        </div>
                        <!-- /.card-->
                    </div>
                    <!-- /.dropdown-menu -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown"><a href="#" class="dropdown-toggle ripple" data-toggle="dropdown"><i class="material-icons list-icon">event_available</i> <span class="badge badge-pill bg-primary">9</span></a>
                    <div class="dropdown-menu dropdown-left dropdown-card animated flipInY">
                        <div class="card">
                            <header class="card-header">New notifications <span class="mr-l-10 badge badge-border bg-primary">4</span>
                            </header>
                            <ul class="list-unstyled dropdown-list-group">
                                <li><a href="#" class="media"><span class="d-flex"><i class="material-icons list-icon">check</i> </span><span class="media-body"><span class="media-heading">Invitation accepted</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">Your invitation for Mars has been accepted ...</span></span></a>
                                </li>
                                <li><a href="#" class="media"><span class="d-flex user--online thumb-xs"><img src="{{asset('assets/demo/users/user3.jpg')}}" class="rounded-circle" alt=""> </span><span class="media-body"><span class="media-heading">Steve Smith</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">I slowly updated my Behance with some recent projects ...</span></span></a>
                                </li>
                                <li><a href="#" class="media"><span class="d-flex"><i class="material-icons list-icon">event_available</i> </span><span class="media-body"><span class="media-heading">To Do</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">Meeting with Nathan McCullum on Friday 8 AM ...</span></span></a>
                                </li>
                                <li><a href="#" class="media"><span class="d-flex"><i class="material-icons list-icon">check</i> </span><span class="media-body"><span class="media-heading">Invitation accepted</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">Your invitation for Mars has been accepted ...</span></span></a>
                                </li>
                            </ul>
                            <!-- /.dropdown-list-group -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.dropdown-menu -->
                </li>
                <!-- /.dropdown -->
                <li><a href="javascript:void(0);" class="right-sidebar-toggle ripple"><i class="material-icons list-icon">comment</i></a>
                </li>
            </ul>
            <!-- /.navbar-right -->
            <!-- User Image with Dropdown -->
            <ul class="nav navbar-nav">
                <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle ripple" data-toggle="dropdown"><span class="avatar thumb-sm"><img src="{{asset('assets/demo/users/user-image.png')}}" class="rounded-circle" alt=""> <i class="material-icons list-icon">expand_more</i></span></a>
                    <div
                    class="dropdown-menu dropdown-left dropdown-card dropdown-card-wide">
                        <div class="card">
                            <header class="card-heading-extra">
                                <div class="row">
                                    <div class="col-8">
                                        <h3 class="mr-b-10 sub-heading-font-family fw-300">Scott Adams</h3><span class="user--online">Available <i class="material-icons list-icon">expand_more</i></span>
                                    </div>
                                    <div class="col-4 d-flex justify-content-end"><a href="logout.html" class="mr-t-10"><i class="material-icons list-icon">power_settings_new</i> Logout</a>
                                    </div>
                                    <!-- /.col-4 -->
                                </div>
                                <!-- /.row -->
                            </header>
                            <section class="card-header">New notifications <span class="badge badge-border bg-danger mr-l-10">4</span>
                            </section>
                            <ul class="list-unstyled dropdown-list-group">
                                <li><a href="#" class="media"><span class="d-flex"><i class="material-icons list-icon">check</i> </span><span class="media-body"><span class="media-heading">Invitation accepted</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">Your invitation for Mars has been accepted ...</span></span></a>
                                </li>
                                <li><a href="#" class="media"><span class="d-flex user--online thumb-xs"><img src="{{asset('assets/demo/users/user3.jpg')}}" class="rounded-circle" alt=""> </span><span class="media-body"><span class="media-heading">Steve Smith</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">I slowly updated my Behance with some recent projects and finally added a case study for thus great project ...</span></span></a>
                                </li>
                                <li><a href="#" class="media"><span class="d-flex"><i class="material-icons list-icon">event_available</i> </span><span class="media-body"><span class="media-heading">To Do</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">Meeting with Nathan McCullum on Friday 8 AM to discuss about an ongoing project ...</span></span></a>
                                </li>
                                <li><a href="#" class="media"><span class="d-flex"><i class="material-icons list-icon">check</i> </span><span class="media-body"><span class="media-heading">Invitation accepted</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">Your invitation for Mars has been accepted ...</span></span></a>
                                </li>
                            </ul>
                        </div>
    </div>
    </li>
    </ul>
    <!-- /.navbar-right -->
    </nav>
    <!-- /.navbar -->
    <div class="content-wrapper">
        <!-- SIDEBAR -->
        <aside class="site-sidebar clearfix">
            <nav class="sidebar-nav">
                <ul class="nav in side-menu">
                    <li class="current-page menu-item-has-children"><a href="javascript:void(0);"><span class="hide-menu">Dashboard <span class="badge badge-border bg-primary pull-right">5</span></span></a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="../default/index-2.html">Default</a>
                            </li>
                            <li><a href="../collapse-nav/index-2.html">Collapsed Nav</a>
                            </li>
                            <li><a href="../horizontal-nav-icons/index-2.html">Horizontal Nav Icons</a>
                            </li>
                            <li><a href="index-2.html">Horizontal Nav</a>
                            </li>
                            <li><a href="../ecommerce/index-2.html">Ecommerce</a>
                            </li>
                            <li><a href="../real-estate/index.html">Real Estate</a>
                            </li>
                            <li><a href="../university/index-2.html">University</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="javascript:void(0);"><span class="color-color-scheme"><span class="hide-menu">Apps</span></span></a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="app-calender.html">Calendar</a>
                            </li>
                            <li><a href="app-chat.html">Chat</a>
                            </li>
                            <li class="menu-item-has-children"><a href="javascript:void(0);">Inbox</a>
                                <ul class="list-unstyled sub-menu">
                                    <li><a href="app-inbox.html">Mail box</a>
                                    </li>
                                    <li><a href="app-inbox-single.html">Inbox detail</a>
                                    </li>
                                    <li><a href="app-inbox-compose.html">Compose mail</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="javascript:void(0);">Contacts</a>
                                <ul class="list-unstyled sub-menu">
                                    <li><a href="app-contacts.html">Contacts List</a>
                                    </li>
                                    <li><a href="app-contacts-alt.html">Contacts List Alt</a>
                                    </li>
                                    <li><a href="app-contacts-details.html">Contact details</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="javascript:void(0);">Tables</a>
                                <ul class="list-unstyled sub-menu">
                                    <li><a href="tables-basic.html">Basic Tables</a>
                                    </li>
                                    <li><a href="tables-data-table.html">Data Table</a>
                                    </li>
                                    <li><a href="tables-bootstrap.html">Bootstrap Tables</a>
                                    </li>
                                    <li><a href="tables-responsive.html">Responsive Tables</a>
                                    </li>
                                    <li><a href="tables-editable.html">Editable Tables</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="javascript:void(0);">Maps</a>
                                <ul class="list-unstyled sub-menu">
                                    <li><a href="maps-google.html">Google Maps</a>
                                    </li>
                                    <li><a href="maps-vector.html">Vector Maps</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="javascript:void(0);">Email Templates</a>
                                <ul class="list-unstyled sub-menu">
                                    <li><a href="email-templates/basic.html">Basic</a>
                                    </li>
                                    <li><a href="email-templates/billing.html">Billing</a>
                                    </li>
                                    <li><a href="email-templates/friend-request.html">Friend Request</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="javascript:void(0);">Icons</a>
                                <ul class="list-unstyled sub-menu">
                                    <li><a href="icons-material-design.html">Material Design</a>
                                    </li>
                                    <li><a href="icons-font-awesome.html">Font Awesome</a>
                                    </li>
                                    <li><a href="icons-mono-social.html">Social Icons</a>
                                    </li>
                                    <li><a href="icons-weather.html">Weather Icons</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="javascript:void(0);"><span class="hide-menu">Forms</span></a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="form-elements.html">Elements</a>
                            </li>
                            <li><a href="form-material.html">Material Design</a>
                            </li>
                            <li><a href="form-validation.html">Form Validation</a>
                            </li>
                            <li><a href="form-dropzone.html">File Upload</a>
                            </li>
                            <li><a href="form-pickers.html">Picker</a>
                            </li>
                            <li><a href="form-select.html">Select and Multiselect</a>
                            </li>
                            <li><a href="form-tags-categories.html">Tags and Categories</a>
                            </li>
                            <li><a href="form-addons.html">Addons</a>
                            </li>
                            <li><a href="form-editors.html">Editors</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="javascript:void(0);"><span class="hide-menu">Charts</span></a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="charts-flot.html">Flot Charts</a>
                            </li>
                            <li><a href="charts-morris.html">Morris Charts</a>
                            </li>
                            <li><a href="charts-js.html">Chart-js</a>
                            </li>
                            <li><a href="charts-sparkline.html">Sparkline Charts</a>
                            </li>
                            <li><a href="charts-knob.html">Knob Charts</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="javascript:void(0);"><span class="hide-menu">UI Elements <span class="badge badge-border bg-primary pull-right">7</span></span></a>
                        <ul class="list-unstyled sub-menu two-li">
                            <li><a href="ui-typography.html">Typography</a>
                            </li>
                            <li><a href="ui-buttons.html">Buttons</a>
                            </li>
                            <li><a href="ui-cards.html">Cards</a>
                            </li>
                            <li><a href="ui-tabs.html">Tabs</a>
                            </li>
                            <li><a href="ui-panels.html">Panels</a>
                            </li>
                            <li><a href="ui-accordions.html">Accordions</a>
                            </li>
                            <li><a href="ui-modals.html">Modals</a>
                            </li>
                            <li><a href="ui-icon-boxes.html">Icon Boxes</a>
                            </li>
                            <li><a href="ui-lists.html">Lists &amp; Media Object</a>
                            </li>
                            <li><a href="ui-user-cards.html">User Cards</a>
                            </li>
                            <li><a href="ui-grid.html">Grid</a>
                            </li>
                            <li><a href="ui-progress.html">Progress Bars</a>
                            </li>
                            <li><a href="ui-notifications.html">Notifications &amp; Alerts</a>
                            </li>
                            <li><a href="ui-pagination.html">Pagination</a>
                            </li>
                            <li><a href="ui-media.html">Media</a>
                            </li>
                            <li><a href="ui-carousel.html">Carousel</a>
                            </li>
                            <li><a href="ui-bootstrap.html">Bootstrap Elements</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="javascript:void(0);"><span class="hide-menu">Sample Pages <span class="badge badge-border bg-info pull-right">13</span></span></a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="page-blank.html">Blank Page</a>
                            </li>
                            <li><a href="page-lightbox.html">Lightbox Popup</a>
                            </li>
                            <li><a href="page-sitemap.html">Sitemap</a>
                            </li>
                            <li><a href="page-search-results.html">Search Results</a>
                            </li>
                            <li><a href="page-custom-scroll.html">Custom Scroll</a>
                            </li>
                            <li><a href="page-utility-classes.html">Utility Classes</a>
                            </li>
                            <li><a href="page-animations.html">Animations</a>
                            </li>
                            <li><a href="page-faq.html">FAQ</a>
                            </li>
                            <li><a href="page-pricing-table.html">Pricing</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="javascript:void(0);"><span class="hide-menu">Other Pages</span></a>
                        <ul class="list-unstyled sub-menu">
                            <li class="menu-item-has-children"><a href="javascript:void(0);">Error Pages</a>
                                <ul class="list-unstyled sub-menu">
                                    <li><a href="page-error-403.html">Error 403</a>
                                    </li>
                                    <li><a href="page-error-404.html">Error 404</a>
                                    </li>
                                    <li><a href="page-error-500.html">Error 500</a>
                                    </li>
                                    <li><a href="page-error-503.html">Error 503</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="page-profile.html">Profile</a>
                            </li>
                            <li><a href="page-login.html">Login Page</a>
                            </li>
                            <li><a href="page-login2.html">Login Page 2</a>
                            </li>
                            <li><a href="page-register.html">Sign Up</a>
                            </li>
                            <li><a href="page-register2.html">Sign Up 2</a>
                            </li>
                            <li><a href="page-register-3-step.html">3 Step Sign Up</a>
                            </li>
                            <li><a href="page-forgot-pwd.html">Forgot Password</a>
                            </li>
                            <li><a href="page-email-confirm.html">Confirm Email</a>
                            </li>
                            <li><a href="page-lock-screen.html">Lock Screen</a>
                            </li>
                            <li><a href="page-timeline.html">Timeline</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="javascript:void(0);"><span class="hide-menu">Widgets</span></a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="widgets.html">Content Widgets</a>
                            </li>
                            <li><a href="widgets-statistics.html">Statistics Widgets</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="javascript:void(0);"><span class="hide-menu">Role & Permission</span></a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="widgets.html">Role</a>
                            </li>
                            <li><a href="widgets-statistics.html">Permission</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.side-menu -->
            </nav>
            <!-- /.sidebar-nav -->
        </aside>
        <!-- /.site-sidebar -->
        <main class="main-wrapper clearfix">
            <!-- Page Title Area -->
            <div class="row page-title clearfix">
                <div class="page-title-left">
                    <h5 class="mr-0 mr-r-5">Horizontal Navigation</h5>
                    <p class="mr-0 text-muted d-none d-md-inline-block">statistics, charts, events and reports</p>
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-inline-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Horizontal Navigation</li>
                    </ol>
                    <div class="d-none d-sm-inline-flex justify-center align-items-center"><a href="javascript: void(0);" class="btn btn-outline-primary mr-l-20 btn-sm btn-rounded hidden-xs hidden-sm ripple" target="_blank">Buy Now</a>
                    </div>
                </div>
                <!-- /.page-title-right -->
            </div>
            <!-- /.page-title -->
            <!-- =================================== -->
            <!-- Different data widgets ============ -->
            <!-- =================================== -->

            <!-- /.widget-list -->
            <div class="widget-list">
                <!-- Counters -->
                <div class="row">
                    <!-- Counter: Sales -->
                    <div class="col-md-3 col-sm-6 widget-holder widget-full-height">
                        <div class="widget-bg bg-primary text-inverse">
                            <div class="widget-body">
                                <div class="widget-counter">
                                    <h6>Total Sales <small class="text-inverse">Last week</small></h6>
                                    <h3 class="h1">&dollar;<span class="counter">741</span></h3><i class="material-icons list-icon">add_shopping_cart</i>
                                </div>
                                <!-- /.widget-counter -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <!-- Counter: Subscriptions -->
                    <div class="col-md-3 col-sm-6 widget-holder widget-full-height">
                        <div class="widget-bg bg-color-scheme text-inverse">
                            <div class="widget-body clearfix">
                                <div class="widget-counter">
                                    <h6>New Subscriptions <small class="text-inverse">Last month</small></h6>
                                    <h3 class="h1"><span class="counter">346</span></h3><i class="material-icons list-icon">event_available</i>
                                </div>
                                <!-- /.widget-counter -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <!-- Counter: Users -->
                    <div class="col-md-3 col-sm-6 widget-holder widget-full-height">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <div class="widget-counter">
                                    <h6>New Users <small>Last 7 days</small></h6>
                                    <h3 class="h1"><span class="counter">625</span></h3><i class="material-icons list-icon">public</i>
                                </div>
                                <!-- /.widget-counter -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <!-- Counter: Pageviews -->
                    <div class="col-md-3 col-sm-6 widget-holder widget-full-height">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <div class="widget-counter">
                                    <h6>Total PageViews <small>Last 24 Hours</small></h6>
                                    <h3 class="h1"><span class="counter">2748</span></h3><i class="material-icons list-icon">show_chart</i>
                                </div>
                                <!-- /.widget-counter -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                </div>
                <!-- /.row -->
                <!-- Chart Group 1 -->
                <div class="row">
                    <!-- Chart: Registration History -->
                    <div class="col-md-7 widget-holder widget-full-height">
                        <div class="widget-bg">
                            <div class="widget-heading clearfix">
                                <h5>New Sign Ups</h5>
                                <ul class="widget-actions">
                                    <li class="dropdown">
                                        <div class="predefinedRanges float-right fs-13 fw-500" style="cursor: pointer"><i class="list-icon material-icons color-danger">fiber_manual_record</i> <span></span> <i class="list-icon material-icons">expand_more</i>
                                        </div>
                                    </li>
                                </ul>
                                <!-- /.widget-actions -->
                            </div>
                            <!-- /.widget-heading -->
                            <div class="widget-body clearfix">
                                <div class="row">
                                    <p class="col-sm-6 small">The registrations are measured from the time that the redesign was fully implemented and after the first-e-mailing.</p>
                                    <div class="col-sm-6 text-right">
                                        <h5 class="h1 fw-300 sub-heading-font-family color-danger mr-tb-0">66.05&#37;</h5><small><i class="material-icons list-icon color-danger">arrow_drop_up</i> more registrations</small>
                                    </div>
                                </div>
                                <!-- /.row -->
                                <div id="extraAreaMorris" style="height: 280px"></div>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <!-- Charts: Sales Statistics -->
                    <div class="col-md-5 widget-holder widget-full-height">
                        <div class="widget-bg">
                            <div class="widget-heading clearfix">
                                <h5>New Sales</h5>
                                <ul class="widget-actions">
                                    <li class="dropdown">
                                        <div class="predefinedRanges float-right fs-13 fw-500" style="cursor: pointer"><i class="list-icon material-icons color-danger">fiber_manual_record</i> <span></span> <i class="list-icon material-icons">expand_more</i>
                                        </div>
                                    </li>
                                </ul>
                                <!-- /.widget-actions -->
                            </div>
                            <!-- /.widget-heading -->
                            <div class="widget-body clearfix">
                                <div class="row">
                                    <div class="col-4 mr-b-20 text-center">
                                        <h6 class="h5 mr-b-0 mr-t-10"><i class="list-icon material-icons mr-r-5 small">shop</i> 1481</h6><small>orders weekly</small>
                                    </div>
                                    <div class="col-4 mr-b-20 text-center">
                                        <h6 class="h5 mr-b-0 mr-t-10"><i class="list-icon material-icons mr-r-5 small">date_range</i> 5,678</h6><small>orders monthly</small>
                                    </div>
                                    <div class="col-4 mr-b-20 text-center">
                                        <h6 class="h5 mr-b-0 mr-t-10"><i class="list-icon material-icons small">attach_money</i> 27,321</h6><small>orders weekly</small>
                                    </div>
                                </div>
                                <!-- /.row -->
                                <div id="productLineHomeMorris" style="height: 280px"></div>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                </div>
                <!-- /.row -->
                <!-- Chart Group 2 -->


            </div>
        </main>
        <!-- /.main-wrappper -->
        <!-- RIGHT SIDEBAR -->

        <!-- CHAT PANEL -->

        <!-- /.chat-panel -->
    </div>
    <!-- /.content-wrapper -->
    <!-- FOOTER -->
    <footer class="footer text-center clearfix">2019 © </footer>
    </div>
    <!--/ #wrapper -->
    <!-- Scripts -->
     @include('admin.layouts.js')
    @yield('js')
   
</body>


<!-- Mirrored from oscar.thinqteam.com/horizontal-nav/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 May 2020 10:12:30 GMT -->
</html>
