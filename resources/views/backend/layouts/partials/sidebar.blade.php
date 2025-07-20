 <!-- sidebar menu area start -->
 @php
     $usr = Auth::guard('admin')->user();
 @endphp
 <div class="sidebar-menu">
    <div class="sidebar-header">
        <!-- <div class="logo"> -->
            <a href="{{ route('admin.dashboard') }}">
                <h2 class="text-white">Panchratna </h2> 
            </a>
        <!-- </div> -->
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">

                    @if ($usr->can('dashboard.view'))
                    <li class="active">
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                        <ul class="collapse">
                            <li class="{{ Route::is('admin.dashboard') ? 'active' : '' }}"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        </ul>
                    </li>
                    @endif

                    @if ($usr->can('role.create') || $usr->can('role.view') ||  $usr->can('role.edit') ||  $usr->can('role.delete'))
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-tasks"></i><span>
                            Roles & Permissions
                        </span></a>
                        <ul class="collapse {{ Route::is('admin.roles.create') || Route::is('admin.roles.index') || Route::is('admin.roles.edit') || Route::is('admin.roles.show') ? 'in' : '' }}">
                            @if ($usr->can('role.view'))
                                <li class="{{ Route::is('admin.roles.index')  || Route::is('admin.roles.edit') ? 'active' : '' }}"><a href="{{ route('admin.roles.index') }}">All Roles</a></li>
                            @endif
                            @if ($usr->can('role.create'))
                                <li class="{{ Route::is('admin.roles.create')  ? 'active' : '' }}"><a href="{{ route('admin.roles.create') }}">Create Role</a></li>
                            @endif
                        </ul>
                    </li>
                    @endif

                    
                    @if ($usr->can('admin.create') || $usr->can('admin.view') ||  $usr->can('admin.edit') ||  $usr->can('admin.delete'))
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-user"></i><span>
                            Admins
                        </span></a>
                        <ul class="collapse {{ Route::is('admin.admins.create') || Route::is('admin.admins.index') || Route::is('admin.admins.edit') || Route::is('admin.admins.show') ? 'in' : '' }}">
                            
                            @if ($usr->can('admin.view'))
                                <li class="{{ Route::is('admin.admins.index')  || Route::is('admin.admins.edit') ? 'active' : '' }}"><a href="{{ route('admin.admins.index') }}">All Admins</a></li>
                            @endif

                            @if ($usr->can('admin.create'))
                                <li class="{{ Route::is('admin.admins.create')  ? 'active' : '' }}"><a href="{{ route('admin.admins.create') }}">Create Admin</a></li>
                            @endif
                        </ul>
                    </li>
                    @endif

                    @if ($usr->can('banner.create') || $usr->can('banner.view') ||  $usr->can('banner.edit') ||  $usr->can('banner.delete'))
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-image"></i><span>
                            Banners
                        </span></a>
                        <ul class="collapse {{ Route::is('admin.bannner.create') || Route::is('admin.banner.index') || Route::is('admin.banner.edit') || Route::is('admin.banner.show') ? 'in' : '' }}">
                            
                            @if ($usr->can('banner.view'))
                                <li class="{{ Route::is('admin.banner.index')  || Route::is('admin.banner.edit') ? 'active' : '' }}"><a href="{{ route('admin.banner.index') }}">All Banner</a></li>
                            @endif

                            @if ($usr->can('banner.create'))
                                <li class="{{ Route::is('admin.banner.create')  ? 'active' : '' }}"><a href="{{ route('admin.banner.create') }}">Create Banner</a></li>
                            @endif
                        </ul>
                    </li>
                    @endif

                    @if ($usr->can('rate.create') || $usr->can('rate.view') ||  $usr->can('rate.edit') ||  $usr->can('rate.delete'))
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-rupee"></i><span>
                            Rate
                        </span></a>
                        <ul class="collapse {{ Route::is('admin.rate.create') || Route::is('admin.rate.index') || Route::is('admin.rate.edit') || Route::is('admin.rate.show') ? 'in' : '' }}">
                            
                            @if ($usr->can('rate.view'))
                                <li class="{{ Route::is('admin.rate.index')  || Route::is('admin.rate.edit') ? 'active' : '' }}"><a href="{{ route('admin.rate.index') }}">Rate List</a></li>
                            @endif

                            @if ($usr->can('rate.create'))
                            
                                <li class="{{ Route::is('admin.rate.create')  ? 'active' : '' }}"><a href="{{ route('admin.rate.create') }}">Add Rate</a></li>
                           @endif
                        </ul>
                    </li>
                    @endif

                    @if ($usr->can('product.create') || $usr->can('product.view') ||  $usr->can('product.edit') ||  $usr->can('product.delete'))
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-shopping-bag"></i><span>
                            Products
                        </span></a>
                        <ul class="collapse {{ Route::is('admin.product.create') || Route::is('admin.product.index') || Route::is('admin.product.edit') || Route::is('admin.product.show') ? 'in' : '' }}">
                            
                            @if ($usr->can('product.view'))
                                <li class="{{ Route::is('admin.product.index')  || Route::is('admin.product.edit') ? 'active' : '' }}"><a href="{{ route('admin.product.index') }}">All Products</a></li>
                            @endif

                            @if ($usr->can('product.create'))
                                <li class="{{ Route::is('admin.product.create')  ? 'active' : '' }}"><a href="{{ route('admin.product.create') }}">Add Product</a></li>
                            @endif
                        </ul>
                    </li>
                    @endif

                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- sidebar menu area end -->