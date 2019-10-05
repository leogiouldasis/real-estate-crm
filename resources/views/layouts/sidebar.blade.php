<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section active">
        <h3>General</h3>
        <ul class="nav side-menu" style="">
            <li class="nav-link {!! str_contains(\Request::url(), 'home') ? 'active':'' !!}">
                <a href="/home"><i class="fa fa-home"></i> Home</a>
            </li>
            <li class="{!! str_contains(\Request::url(), 'xe-ads') ? 'active':'' !!}">
                <a><i class="fa fa-edit"></i> Xe Ads <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu" style="display: {!! str_contains(\Request::url(), 'xe-ads') ? 'block':'none' !!};">
                    <li class="{!! str_contains(\Request::url(), 'xe-ads') ? 'active':'' !!}"><a href="/xe-ads">All</a></li>
                    <li><a href="#">Visited</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="menu_section">
        <h3>Statistics</h3>
        <ul class="nav side-menu">
            <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> New ads 
                <span class="label label-success pull-right">Coming Soon</span></a></li>
        </ul>
    </div>
</div>


<div class="sidebar-footer hidden-small">
    <a data-toggle="tooltip" data-placement="top" title="" href="{{ route('logout') }}"
        data-original-title="{{ __('Logout') }}">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
    </a>
</div>

</div>
</div>

