<aside class="app-sidebar">
    <div class="app-sidebar__user">
        <div class="dropdown">
            <a class="nav-link pl-2 pr-2 leading-none d-flex" data-toggle="dropdown" href="#">
                <img alt="image" src="{{ Admin::user()->avatar }}" class=" avatar-md rounded-circle">
                <span class="ml-2 d-lg-block">
                    <span class="text-white app-sidebar__user-name mt-5">{{ Admin::user()->name }}</span><br>
                    <span class="text-muted app-sidebar__user-name text-sm"> {{ trans('admin.online') }}</span>
                </span>
            </a>
        </div>
    </div>
  

        <ul class="side-menu">
            <li class="header">{{ trans('admin.menu') }}</li>

            @each('admin::partials.menu', Admin::menu(), 'item')

        </ul>
  




</aside>