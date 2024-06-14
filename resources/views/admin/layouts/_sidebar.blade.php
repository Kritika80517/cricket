<div class="main-sidebar sidebar-style-2">
    <aside style="background-color: #fff;" id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/">Cricket App </a>
        </div>

        <div class="sidebar-brand sidebar-brand-sm">
            <a href="/">MI</a>
        </div>
        <ul class="sidebar-menu">
            {{-- dashboard --}}
            <li class="menu-header">Dashboard</li>
            <li class="{{ request()->is('admin/dashboard') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ url('admin/dashboard') }}"><i class="fas fa-th"></i> <span>Dashboard</span></a></li>
            <li class="{{ request()->is('admin/users/') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ url('admin/users/') }}"><i class="fas fa-users"></i> <span>Users Management</span></a></li>

            {{-- <li class="dropdown {{ request()->is('admin/articles/*') || request()->is('admin/courses/*') ? 'active' : '' }}"> --}}
            <li class="dropdown {{ request()->is('admin/articles/*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-newspaper"></i>
                    <span>Articles Management</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->is('admin/articles/categories*') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin.articles.categories.list') }}"><i
                                class="fas fa-th-large"></i><span>Category</span></a></li>
                    <li class="{{ request()->is('admin/articles/categories/subcategory*') ? 'active' : '' }}"><a
                            class="nav-link" href="{{ route('admin.articles.categories.subcategory.list') }}"><i
                                class="fas fa-th-large"></i><span>Sub Category</span></a></li>
                    {{-- <li class="{{ request()->is('admin/articles/categories/subcategory') || request()->is('admin/articles/create') || request()->is('admin/articles/categories/subcategory*') ? 'active' : '' }}"><i class="fas fa-university"></i><span>Sub Category</span></li> --}}
                    <li class="{{ request()->is('admin/articles/list/*') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin.articles.list') }}"><i class="fas fa-newspaper"></i> <span>Article
                                List</span> </a></li>
                </ul>
            </li>

            <li class="{{ request()->is('admin/reports*') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ url('admin/reports') }}"><i class="fas fa-file-alt"></i> <span>Reports Problem</span></a>
            </li>

            <li class="dropdown {{ request()->is('admin/ads/*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                        class="fas fa-audio-description"></i> <span>Ads Management</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->is('admin/ads/categories*') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin.ads.categories.list') }}"><i
                                class="fas fa-th-large"></i><span>Category</span></a></li>
                    <li class="{{ request()->is('admin/ads/categories/subcategory*') ? 'active' : '' }}"><a
                            class="nav-link" href="{{ route('admin.ads.categories.subcategory.list') }}"><i
                                class="fas fa-th-large"></i><span>Sub Category</span></a></li>
                    <li class="{{ request()->is('admin/ads/list/*') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin.ads.list') }}"><i class="fas fa-ad"></i> <span>Ads List</span> </a>
                    </li>
                </ul>
            </li>

            <li class="dropdown {{ request()->is('admin/matchvideo/*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-dumbbell"></i>
                    <span>Match Highlight</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->is('admin/matchvideo/categories*') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin.matchvideo.categories.list') }}"><i
                                class="fas fa-th-large"></i><span>Category</span></a></li>
                    <li class="{{ request()->is('admin/matchvideo/categories/subcategory*') ? 'active' : '' }}"><a
                            class="nav-link" href="{{ route('admin.matchvideo.categories.subcategory.list') }}"><i
                                class="fas fa-th-large"></i><span>Sub Category</span></a></li>
                    <li class="{{ request()->is('admin/matchvideo/list/*') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin.matchvideo.list') }}"> <i class="fa fa-caret-square-o-right"></i> <span>Video
                                List</span> </a></li>
                </ul>
            </li>

            <li class="dropdown {{ request()->is('admin/matchschedule/*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-dumbbell"></i>
                    <span>Match Schedule</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->is('admin/cricket-schedule/series*') ? 'active' : '' }}"><a class="nav-link"
                        href="{{ route('admin.cricket-schedule.series.list') }}"><i
                            class="fas fa-th-large"></i><span>Series List</span></a>
                    </li>
                    <li class="{{ request()->is('admin/matchschedule/match*') ? 'active' : '' }}"><a class="nav-link"
                        href="{{ route('admin.matchschedule.match.list') }}"><i
                            class="fas fa-th-large"></i><span>Match List</span></a>
                    </li>
                   
                    <li class="{{ request()->is('admin/matchschedule/teams*') ? 'active' : '' }}"><a class="nav-link"
                        href="{{ route('admin.matchschedule.teams.list') }}"><i class="fas fa-th-large"></i><span>Team
                            List</span> </a>
                    </li>
                    <li class="{{ request()->is('admin/matchschedule/players*') ? 'active' : '' }}"><a
                        class="nav-link" href="{{ route('admin.matchschedule.players.list') }}"><i
                            class="fas fa-th-large"></i><span>Players List</span></a>
                    </li>
                        
                </ul>
            </li>

            <li class="{{ request()->is('admin/notifications') ? 'active' : '' }}"><a class="nav-link"
                href="{{ url('admin/notifications') }}"><i class="fas fa-comment-dots"></i> <span>Notifications</span></a>
            </li>

            <li class="{{ request()->is('admin/banners') ? 'active' : '' }}"><a class="nav-link" href="{{ url('admin/banners') }}"><i class="fa fa-image"></i> <span>Banners</span></a></li>
            <li class="{{ request()->is('admin/setting/about') ? 'active' : '' }}"><a class="nav-link" href="{{ url('admin/setting/about') }}"><i class="fas fa-info"></i> <span>About</span></a></li>
            <li class="{{ request()->is('admin/setting/website') ? 'active' : '' }}"><a class="nav-link" href="{{ url('admin/setting/website') }}"><i class="fas fa-cog"></i> <span>Settings</span></a></li>

            <li class="dropdown {{ request()->is('admin/staffs*') || request()->is('admin/roles*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="	fas fa-users"></i>
                    <span>Staffs</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->is('admin/staffs*') ? 'active' : '' }}"><a class="nav-link"
                        href="{{ url('admin/staffs') }}"><i class="fas fa-th-large"></i><span>Staff</span></a>
                    </li>
                    <li class="{{ request()->is('admin/roles*') ? 'active' : '' }}"><a class="nav-link"
                        href="{{ url('admin/roles') }}"><i class="fas fa-th-large"></i><span>Roles</span></a>
                    </li>
                </ul>
            </li>


        </ul>
    </aside>
</div>
