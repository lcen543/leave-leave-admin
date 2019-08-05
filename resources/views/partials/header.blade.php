
<nav class="navbar navbar-expand-lg main-navbar">

    <a class="logo" href="{{ admin_base_path('/') }}">
        <img src="{!! config('admin.logo-mini', config('admin.name')) !!}" class="header-brand-img" alt="">
    </a>

    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="ion ion-navicon-round"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-md-none navsearch"><i class="ion ion-search"></i></a></li>
        </ul>
        <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-primary" type="submit"><i class="ion ion-search"></i></button>
        </div>
    </form>

    <ul class="navbar-nav navbar-right">      
        
        <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link  nav-link-lg beep"><i class="ion-ios-bell-outline"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
                <div class="dropdown-header">Notifications
                    <div class="float-right">
                        <a href="#">View All</a>
                    </div>
                </div>
                <div class="dropdown-list-content">
                    <a href="#" class="dropdown-item">
                        <i class="fa fa-users text-primary"></i>
                        <div class="dropdown-item-desc">
                            <b>So many Users Visit your template</b>
                        </div>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="fa fa-exclamation-triangle text-danger"></i>
                        <div class="dropdown-item-desc">
                            <b>Error message occurred....</b>
                        </div>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="fa fa-users text-warning"></i>
                        <div class="dropdown-item-desc">
                            <b> Adding new people</b>
                        </div>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="fa fa-shopping-cart text-success"></i>
                        <div class="dropdown-item-desc">
                            <b>Your items Arrived</b>
                        </div>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="fa fa-comment text-primary"></i>
                        <div class="dropdown-item-desc">
                            <b>New Message received</b> <div class="float-right"><span class="badge badge-pill badge-danger badge-sm">67</span></div>
                        </div>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="fa fa-users text-primary"></i>
                        <div class="dropdown-item-desc">
                            <b>So many Users Visit your template</b>
                        </div>
                    </a>
                </div>
            </div>
        </li>
        <li class="dropdown dropdown-list-toggle">
            <a href="#" class="nav-link nav-link-lg full-screen-link">
                <i class="ion-arrow-expand"  id="fullscreen-button"></i>
            </a>
        </li>
        <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg">
            <img src="dddddd.jpg" alt="profile-user" class="rounded-circle w-32">
            <div class="d-sm-none d-lg-inline-block">{{ Admin::user()->name }}</div></a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="#" class="dropdown-item has-icon">
                    <i class="ion ion-android-person"></i> {{ Admin::user()->created_at }}
                </a>
                <a href="{{ admin_base_path('auth/setting') }}" class="dropdown-item has-icon">
                    <i class="ion ion-gear-a"></i> {{ trans('admin.setting') }}
                </a>
                <a href="{{ admin_base_path('auth/logout') }}" class="dropdown-item has-icon">
                    <i class="ion-ios-redo"></i> {{ trans('admin.logout') }}
                </a>
            </div>
        </li>
    </ul>
</nav>