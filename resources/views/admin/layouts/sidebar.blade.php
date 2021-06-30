<div id="sidebar-wrapper" >
    <ul class="sidebar-nav" style="margin: 20px 0;">
        <li class="sidebar-brand">
            <a href=""><span class="text-primary"><b style="color:white; font-size: 2rem">Admin SIPIT</b></span></a>
        </li>
        <li>
            <a href="{{ route('admin.adminDataJournal') }}">Data Journal</a>
        </li>
        <li>
            <a href="{{ route('admin.adminDataConference')}}">Data Conference</a>
        </li>
        <li>
            {{-- <a href="{{ route('loginAdmin') }}"><span class="text-danger">Logout</span></a> --}}
            <a class="text-danger" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>
</div>
