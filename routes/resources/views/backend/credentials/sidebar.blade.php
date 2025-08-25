<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-between align-items-center">
                <div class="logo">
                    <a href="{{route('admin-dashboard')}}">
                        <img src="http://127.0.0.1:8000/assets/img/techlogo.png" alt="logo-img" style="
                        width: 100%;
                        height: 39px;
                    ">
                    </a>
                </div>
                <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20"
                        height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                        <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path
                                d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2"
                                opacity=".3"></path>
                            <g transform="translate(-210 -1)">
                                <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                                <circle cx="220.5" cy="11.5" r="4"></circle>
                                <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2">
                                </path>
                            </g>
                        </g>
                    </svg>
                    <div class="form-check form-switch fs-6">
                        <input class="form-check-input  me-0" type="checkbox" id="toggle-dark">
                        <label class="form-check-label"></label>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20"
                        preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z">
                        </path>
                    </svg>
                </div>
                <div class="sidebar-toggler  x">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-item active">
                    <a href="{{route('admin-dashboard')}}" class="sidebar-link">
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item {{ Route::is('admin*') ?  : '' }} has-sub">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-file-earmark-person-fill"></i>
                        <span>CVS</span>
                    </a>
                    <ul class="submenu {{ Route::is('admin*') ?  : '' }}">
                        <li class="submenu-item {{ Route::is('admin-job.cvs') ? 'active' : '' }}">
                            <a href="{{route('admin-job.cvs')}}">List</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item {{ Route::is('mediacenter*') ? 'active' : '' }} has-sub">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-camera-reels-fill"></i>
                        <span>Mediacenter</span>
                    </a>
                    <ul class="submenu {{ Route::is('mediacenter*') ? 'active' : '' }}">
                        <li class="submenu-item {{ Route::is('mediacenter-create') ? 'active' : '' }}">
                            <a href="{{route('mediacenter-create')}}">Create</a>
                        </li>
                        <li class="submenu-item {{ Route::is('mediacenter-list') ? 'active' : '' }}">
                            <a href="{{route('mediacenter-list')}}">List</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item {{ Route::is('service*') ? 'active' : '' }} has-sub">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-briefcase-fill"></i>
                        <span>Services</span>
                    </a>
                    <ul class="submenu {{ Route::is('servicecategory*') ? 'active' : '' }}">
                        <li class="submenu-item {{ Route::is('servicecategory-list') ? 'active' : '' }}">
                            <a href="{{route('servicecategory-list')}}">Service Category</a>
                        </li>
                        <li class="submenu-item {{ Route::is('service-list') ? 'active' : '' }}">
                            <a href="{{route('service-list')}}">Services</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item {{ Route::is('jobs*') ? 'active' : '' }} has-sub">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-briefcase-fill"></i>
                        <span>Jobs</span>
                    </a>
                    <ul class="submenu {{ Route::is('jobs*') ? 'active' : '' }}">
                        <li class="submenu-item {{ Route::is('jobs-create') ? 'active' : '' }}">
                            <a href="{{route('jobs-create')}}">Create</a>
                        </li>
                        <li class="submenu-item {{ Route::is('jobs-list') ? 'active' : '' }}">
                            <a href="{{route('jobs-list')}}">List</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item {{ Route::is('contact*') ? 'active' : '' }} has-sub">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-envelope-fill"></i>
                        <span>Messages</span>
                    </a>
                    <ul class="submenu {{ Route::is('contact*') ? 'active' : '' }}">
                        <li class="submenu-item {{ Route::is('admin-contact') ? 'active' : '' }}">
                            <a href="{{route('admin-contact')}}">List</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item {{ Route::is('quote*') ? 'active' : '' }} has-sub">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-chat-square-text-fill"></i>
                        <span>Quote</span>
                    </a>
                    <ul class="submenu {{ Route::is('quote*') ? 'active' : '' }}">
                        <li class="submenu-item {{ Route::is('quote-list') ? 'active' : '' }}">
                            <a href="{{route('quote-list')}}">List</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item {{ Route::is('testimonial*') ? 'active' : '' }} has-sub">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-stars"></i>
                        <span>Testimonial</span>
                    </a>
                    <ul class="submenu {{ Route::is('testimonial*') ? 'active' : '' }}">
                        <li class="submenu-item {{ Route::is('testimonial-create') ? 'active' : '' }}">
                            <a href="{{route('testimonial-create')}}">Create</a>
                        </li>
                        <li class="submenu-item {{ Route::is('testimonial-list') ? 'active' : '' }}">
                            <a href="{{route('testimonial-list')}}">List</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item {{ Route::is('team*') ? 'active' : '' }} has-sub">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-people-fill"></i>
                        <span>Team</span>
                    </a>
                    <ul class="submenu {{ Route::is('team*') ? 'active' : '' }}">
                        <li class="submenu-item {{ Route::is('team-create') ? 'active' : '' }}">
                            <a href="{{route('team-create')}}">Create</a>
                        </li>
                        <li class="submenu-item {{ Route::is('team-list') ? 'active' : '' }}">
                            <a href="{{route('team-list')}}">List</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item {{ Route::is('company*') ? 'active' : '' }} has-sub">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-building"></i>
                        <span>Collaboration</span>
                    </a>
                    <ul class="submenu {{ Route::is('company*') ? 'active' : '' }}">
                        <li class="submenu-item {{ Route::is('collaboration-create') ? 'active' : '' }}">
                            <a href="{{route('collaboration-create')}}">Create</a>
                        </li>
                        <li class="submenu-item {{ Route::is('collaboration-list') ? 'active' : '' }}">
                            <a href="{{route('collaboration-list')}}">List</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item">
                    <a href="{{ route('clear-cache') }}" class="sidebar-link">
                        <i class="bi bi-trash-fill"></i>
                        <span>Clear Cache</span>
                    </a>
                </li>
                
                 <li class="sidebar-item active">
                    <a href="{{route('admin-cookie')}}" class="sidebar-link">
                        <i class="bi bi-grid-fill"></i>
                        <span>Cookies</span>
                    </a>
                </li>
                
            </ul>
        </div>
    </div>
</div>
