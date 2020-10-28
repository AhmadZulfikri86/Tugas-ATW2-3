<!-- MENU SIDEBAR-->
@php
function checkRouteActive($route){
    if (Route:: current()-> uri ==$route) return 'active'; 
}
@endphp
<aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="dist/images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li >
                            <a class="js-arrow" href="{{url("template")}}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                               
                            </ul>
                        </li>
                        <li>
                            <a href="{{url("chart")}}">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="{{url("table")}}">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="{{url("form")}}">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="{{url("kalender")}}">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                                                       
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->