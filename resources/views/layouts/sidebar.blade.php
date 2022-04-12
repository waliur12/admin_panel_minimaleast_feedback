<!-- SideNavbar -->
<section class="sidebar">
    <ul>
        <li class="sideLi">
            <button type="button" data-target="expandSidebar1">
                <svg class="sideMenuIcon sideMenuIconActive" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none" viewBox="0 0 32 32" class='sideMenuIcon'>
                    <path fill="#828282" d="M26.667 10.667l-8-7.014a4 4 0 00-5.334 0l-8 7.014A4 4 0 004 13.68v11.653a4 4 0 004 4h16a4 4 0 004-4V13.667a4.001 4.001 0 00-1.333-3zm-8 16h-5.334V20a1.333 1.333 0 011.334-1.333h2.666A1.333 1.333 0 0118.667 20v6.667zm6.666-1.334A1.333 1.333 0 0124 26.667h-2.667V20a4 4 0 00-4-4h-2.666a4 4 0 00-4 4v6.667H8a1.333 1.333 0 01-1.333-1.334V13.667a1.334 1.334 0 01.453-1l8-7a1.333 1.333 0 011.76 0l8 7a1.334 1.334 0 01.453 1v11.666z" />
                </svg>
            </button>

            <span class="customTooltip">
                Dashboard
            </span>
        </li>
        @if(Auth::user()->is_super_admin==1 || Auth::user()->is_admin==1)

        <li class="sideLi">
            <button type="button" data-target="expandSidebar7">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none" viewBox="0 0 32 32" class='sideMenuIcon'>
                    <path fill="#828282" fill-rule="evenodd" d="M5.172 2.505A4 4 0 018 1.333h10.667c.353 0 .692.14.942.39l8 8c.25.25.391.59.391.944v16a4 4 0 01-4 4H8a4 4 0 01-4-4V5.333a4 4 0 011.172-2.828zM8 4a1.333 1.333 0 00-1.333 1.333v21.334A1.333 1.333 0 008 28h16a1.333 1.333 0 001.333-1.333V11.219L18.114 4H8z" clip-rule="evenodd" />
                    <path fill="#828282" fill-rule="evenodd" d="M9.333 22.667c0-.737.597-1.334 1.334-1.334h10.666a1.333 1.333 0 010 2.667H10.667a1.333 1.333 0 01-1.334-1.333zM9.333 17.333c0-.736.597-1.333 1.334-1.333h10.666a1.333 1.333 0 110 2.667H10.667a1.333 1.333 0 01-1.334-1.334zM9.333 12c0-.736.597-1.333 1.334-1.333h2.666a1.333 1.333 0 110 2.666h-2.666A1.333 1.333 0 019.333 12zM18.667 1.333c.736 0 1.333.597 1.333 1.334v6.666h6.667a1.333 1.333 0 110 2.667h-8a1.333 1.333 0 01-1.334-1.333v-8c0-.737.597-1.334 1.334-1.334z" clip-rule="evenodd" />
                </svg>
            </button>
            <span class="customTooltip">
                Users Feedbacks
            </span>
        </li>
  
        <li class="sideLi">
            <button type="button" data-target="expandSidebar5">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none" viewBox="0 0 32 32" class='sideMenuIcon'>
                    <path fill="#828282" fill-rule="evenodd" d="M25.376 19.84A1.333 1.333 0 0127 18.882a6.667 6.667 0 015 6.45V28a1.333 1.333 0 01-2.667 0v-2.666a4.001 4.001 0 00-3-3.87 1.333 1.333 0 01-.957-1.624zM1.953 20.62a6.666 6.666 0 014.714-1.953h10.666A6.667 6.667 0 0124 25.333V28a1.333 1.333 0 01-2.667 0v-2.667a4 4 0 00-4-4H6.667a4 4 0 00-4 4V28A1.333 1.333 0 110 28v-2.667c0-1.768.702-3.463 1.953-4.714zM20.042 3.843a1.333 1.333 0 011.622-.961 6.667 6.667 0 010 12.916 1.333 1.333 0 11-.661-2.583 4 4 0 000-7.75 1.333 1.333 0 01-.961-1.622zM12 5.333a4 4 0 100 8 4 4 0 000-8zm-6.667 4a6.667 6.667 0 1113.334 0 6.667 6.667 0 01-13.334 0z" clip-rule="evenodd" />
                </svg>
            </button>


            <span class="customTooltip">
                User Management
            </span>
        </li>

        <li class="sideLi">
            <button type="button" data-target="expandSidebar6">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none" viewBox="0 0 32 32" class='sideMenuIcon'>
                    <path stroke="#BDBDBD" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 20a4 4 0 100-8 4 4 0 000 8z" />
                    <path stroke="#BDBDBD" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M25.867 20a2.2 2.2 0 00.44 2.427l.08.08a2.666 2.666 0 01-.866 4.352 2.666 2.666 0 01-2.908-.58l-.08-.08a2.2 2.2 0 00-2.426-.44 2.2 2.2 0 00-1.334 2.014V28a2.666 2.666 0 11-5.333 0v-.12A2.2 2.2 0 0012 25.867a2.2 2.2 0 00-2.427.44l-.08.08a2.667 2.667 0 11-3.773-3.774l.08-.08a2.2 2.2 0 00.44-2.426 2.2 2.2 0 00-2.013-1.334H4a2.667 2.667 0 010-5.333h.12A2.2 2.2 0 006.133 12a2.2 2.2 0 00-.44-2.427l-.08-.08A2.667 2.667 0 017.5 4.938a2.667 2.667 0 011.887.782l.08.08a2.2 2.2 0 002.426.44H12a2.2 2.2 0 001.333-2.013V4a2.667 2.667 0 015.334 0v.12A2.2 2.2 0 0020 6.133a2.2 2.2 0 002.427-.44l.08-.08a2.665 2.665 0 013.773 0 2.667 2.667 0 010 3.774l-.08.08a2.2 2.2 0 00-.44 2.426V12a2.2 2.2 0 002.013 1.333H28a2.666 2.666 0 110 5.334h-.12A2.2 2.2 0 0025.867 20v0z" />
                </svg>
            </button>
            <span class="customTooltip">
                App Settings
            </span>
        </li>

        @endif
    </ul>
</section>

<div class="extension-sidebar-wrapper">
    <!-- Expansion Sidebar -->
    <ul class="expansion-sidebar" id="expandSidebar1">
        <li>
            <h3><a href="{{route('dashboard')}}">Dashboard</a></h3>
        </li>

    </ul>
    <ul class="expansion-sidebar" id="expandSidebar7">
        <li>
            <h3><a href="{{route('user.feedback')}}">User Feedbacks</a></h3>
        </li>

    </ul>



    
 

    <!-- Expansion Sidebar -->
    <ul class="expansion-sidebar" id="expandSidebar5">
        <li>
            <h3>User Management</h3>
        </li>
        <li>
            <a href="{{route('users')}}">All Users</a>
        </li>
        <li>
            <a href="{{route('admins')}}">All Admins</a>
        </li>
    </ul>

   
    <!-- Expansion Sidebar -->
    <ul class="expansion-sidebar" id="expandSidebar6">
        <li>
            <a href="{{route('app.settings')}}">App Settings</a>
        </li>
        {{-- <li>
                    </li> --}}
    </ul>
</div>
