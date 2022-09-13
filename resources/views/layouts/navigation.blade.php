<nav x-data="{ open: false }" class="bg-neutral">
    <div class="navbar max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="navbar-start">
            <div class="dropdown">
                <label tabindex="0" class="btn btn-sm btn-ghost btn-circle">
                    <x-tabler-menu />
                </label>
                <ul tabindex="0"
                    class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                    <li>
                        <a class="{{ activeClass('inv.dash') }}" href="{{ route('inv.dash') }}">
                            <x-tabler-dashboard /> Dashboard
                        </a>
                    </li>
                    <li>
                        <a class="">
                            <x-tabler-info-circle /> About
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="navbar-center">
            <a class="btn btn-ghost normal-case font-extrabold text-xl">{{ appName() }}</a>
        </div>
        <div class="navbar-end">
            <div class="dropdown dropdown-end">
                <label tabindex="0" class="btn btn-ghost btn-circle">
                    <div class="indicator">
                        <x-tabler-bell />
                        <span class="badge badge-xs badge-primary indicator-item"></span>
                    </div>
                </label>
                <ul tabindex="0"
                    class="mt-3 p-2 shadow menu menu-compact dropdown-content bg-base-100 rounded-box w-52">
                    <li>
                        <a href="" class="justify-between">
                            Notification 1
                            <span class="badge">New</span>
                        </a>
                    </li>
                    <li><a href="">Notification 2</a></li>
                    <li><a href="">Notification 3</a></li>
                </ul>
            </div>

            <div class="dropdown dropdown-end">
                <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        {{-- <img src="https://placeimg.com/80/80/people" /> --}}
                        <img src="https://avatars.dicebear.com/api/initials/:{{auth()->user()->name}}.svg" alt="{{auth()->user()->name}}">
                    </div>
                </label>
                <ul tabindex="0"
                    class="mt-3 p-2 shadow menu menu-compact dropdown-content bg-base-100 rounded-box w-52">
                    <li>
                        <a>Profile</a>
                    </li>
                    <li><a>Settings</a></li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </li>
                    </form>
                </ul>
            </div>
        </div>
    </div>

</nav>
