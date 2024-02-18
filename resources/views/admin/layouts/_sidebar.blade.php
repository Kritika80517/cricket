<div class="main-sidebar sidebar-style-2">
    <aside style="background-color: #fff;" id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="/">Cricket App </a>
      </div>  
      {{-- {{route('admin.dashboard')}}
{{route('admin.dashboard')}} --}}
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="/">MI</a>
      </div>
      <ul class="sidebar-menu">
        {{-- dashboard --}}
        <li class="menu-header">Dashboard</li>
        <li class="{{ request()->is('admin/dashboard') ? 'active' : '' }}"><a class="nav-link" href="{{url('admin/dashboard')}}"><i class="fas fa-th"></i> <span>Dashboard</span></a></li>
        <li class="{{ request()->is('admin/users/') ? 'active' : '' }}"><a class="nav-link" href="{{url('admin/users/')}}"><i class="fas fa-users"></i> <span>Users Management</span></a></li>
        
        {{-- <li class="dropdown {{ request()->is('admin/articles/*') || request()->is('admin/courses/*') ? 'active' : '' }}"> --}}
        <li class="dropdown {{ request()->is('admin/articles/*') ? 'active' : '' }}">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="	fas fa-school"></i> <span>Articles Management</span></a>
          <ul class="dropdown-menu">
            <li class="{{ request()->is('admin/articles/categories*') ? 'active' : '' }}"><a class="nav-link" href="{{route('admin.articles.categories.list')}}"><i class="fas fa-th-large"></i><span>Category</span></a></li>
            <li class="{{ request()->is('admin/articles/categories/subcategory*') ? 'active' : '' }}"><a class="nav-link" href="{{route('admin.articles.categories.subcategory.list')}}"><i class="fas fa-th-large"></i><span>Sub Category</span></a></li>
            {{-- <li class="{{ request()->is('admin/articles/categories/subcategory') || request()->is('admin/articles/create') || request()->is('admin/articles/categories/subcategory*') ? 'active' : '' }}"><i class="fas fa-university"></i><span>Sub Category</span></li> --}}
            <li class="{{ request()->is('admin/articles/list/*') ? 'active' : '' }}"><a class="nav-link" href="{{route('admin.articles.list')}}"><i class="fas fa-university"></i> <span>Article List</span> </a></li>
          </ul>
        </li> 
        
        <li class="{{ request()->is('admin/reports') ? 'active' : '' }}"><a class="nav-link" href="{{url('admin/reports')}}"><i class="fas fa-cog"></i> <span>Reports Problem</span></a></li>
        
        <li class="dropdown {{ request()->is('admin/ads/*') ? 'active' : '' }}">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="	fas fa-school"></i> <span>Ads Management</span></a>
          <ul class="dropdown-menu">
            <li class="{{ request()->is('admin/ads/categories*') ? 'active' : '' }}"><a class="nav-link" href="{{route('admin.ads.categories.list')}}"><i class="fas fa-th-large"></i><span>Category</span></a></li>
            <li class="{{ request()->is('admin/ads/categories/subcategory*') ? 'active' : '' }}"><a class="nav-link" href="{{route('admin.ads.categories.subcategory.list')}}"><i class="fas fa-th-large"></i><span>Sub Category</span></a></li>
            <li class="{{ request()->is('admin/ads/list/*') ? 'active' : '' }}"><a class="nav-link" href="{{route('admin.ads.list')}}"><i class="fas fa-university"></i> <span>Article List</span> </a></li>
          </ul>
        </li> 

        <li class="dropdown {{ request()->is('admin/matchvideo/*') ? 'active' : '' }}">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="	fas fa-school"></i> <span>Match Highlight</span></a>
          <ul class="dropdown-menu">
            <li class="{{ request()->is('admin/matchvideo/categories*') ? 'active' : '' }}"><a class="nav-link" href="{{route('admin.matchvideo.categories.list')}}"><i class="fas fa-th-large"></i><span>Category</span></a></li>
            <li class="{{ request()->is('admin/matchvideo/categories/subcategory*') ? 'active' : '' }}"><a class="nav-link" href="{{route('admin.matchvideo.categories.subcategory.list')}}"><i class="fas fa-th-large"></i><span>Sub Category</span></a></li>
            <li class="{{ request()->is('admin/matchvideo/list/*') ? 'active' : '' }}"><a class="nav-link" href="{{route('admin.matchvideo.list')}}"><i class="fas fa-university"></i> <span>Article List</span> </a></li>
          </ul>
        </li> 

        <li class="{{ request()->is('admin/notifications') ? 'active' : '' }}"><a class="nav-link" href="{{url('admin/notifications')}}"><i class="fas fa-cog"></i> <span>Notifications</span></a></li>
        
        <li class="{{ request()->is('admin/settings') ? 'active' : '' }}"><a class="nav-link" href="{{url('admin/settings')}}"><i class="fas fa-cog"></i> <span>Settings</span></a></li>

      </ul>
    </aside>
</div>