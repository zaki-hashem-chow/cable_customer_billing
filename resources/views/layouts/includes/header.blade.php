@section('header')
    <div class="navbar">
        <div class="navbar-inner">
            <ul class="nav">
                    <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"> </i> {{ ucfirst(Auth::user()->first_name) }} {{ ucfirst(Auth::user()->last_name) }} <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{!! url('/doctor/account') !!}"><i class="fa fa-fw fa-wrench"></i> My Account</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                    <i class="fa fa-fw fa-power-off"></i> Log Out
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
        </div>
    </div>
@endsection
