<!DOCTYPE html>
<html lang="en">
    <head> 
        <!-- <title>Dashboard</title> -->
        <meta charset="utf-8">
        <!-- Main CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        <!-- Font-icon css-->
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body class="app sidebar-mini rtl">

    <!-- Navbar-->
        <header class="app-header"><a class="app-header__logo" href="">Lifetime</a>
        <!-- Sidebar toggle button-->
        <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
            <!-- Navbar Right Menu-->
            <ul class="app-nav">
                <!-- <li class="app-search">
                    <input class="app-search__input" type="search" placeholder="Search">
                    <button class="app-search__button"><i class="fa fa-search"></i></button>
                </li> -->

                <!-- User Menu-->
                <li class="dropdown">
                    <a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu">
                        <i class="fa fa-sign-out"> Logout</i>
                    </a>
                </li>
            </ul>
        </header>

        <!-- Sidebar menu-->
        <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
        <aside class="app-sidebar">
            <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="{{asset('images/giangtt.jpg')}}" alt="User Image">
                <div>
                  <p class="app-sidebar__user-name">Admin</p>
                </div>
            </div>

            <ul class="app-menu">
                <li>
                    <a class="app-menu__item" href="">
                        <i class="app-menu__icon fa fa-dashboard"></i>
                        <span class="app-menu__label">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a class="app-menu__item" href="{{route('employee.index')}}">
                        <i class="app-menu__icon fa fa-users"></i>
                        <span class="app-menu__label">Quản lý nhân sự</span>
                    </a>
                </li>

                <li><a class="app-menu__item" href="{{route('department.index')}}">
                        <i class="app-menu__icon fa fa-window-maximize"></i>
                        <span class="app-menu__label">Quản lý phòng ban</span>
                    </a>
                </li>

                <li class="treeview">
                    <a class="app-menu__item" href="#" data-toggle="treeview">
                        <i class="app-menu__icon fa fa-star-o"></i>
                        <span class="app-menu__label">Quản lý thành tích</span>
                        <i class="treeview-indicator fa fa-angle-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a class="treeview-item" href="{{route('bonus.index')}}">Khen thưởng</a>
                        </li>
                        <li>
                            <a class="treeview-item" href="{{route('discipline.index')}}"> Kỷ luật</a>
                        </li>
                    </ul>
                </li>

                <li >
                    <a class="app-menu__item" href="{{route('salary.index')}}">
                        <i class="app-menu__icon fa fa-money" aria-hidden="true"></i></i>
                        <span class="app-menu__label">Quản lý lương</span>
                    </a>
                </li>

                <li><a class="app-menu__item" href="{{route('timekeeping.index')}}">
                        <i class="app-menu__icon fa fa-calculator"></i>
                        <span class="app-menu__label">Chấm công</span>
                    </a>
                </li>

                <li><a class="app-menu__item" href="{{route('users.index')}}">
                        <i class="app-menu__icon fa fa-user-o"></i>
                        <span class="app-menu__label">Quản lý người dùng</span>
                    </a>
                </li>

                <!-- <li><a class="app-menu__item" href="charts.html">
                        <i class="app-menu__icon fa fa-cog fa-lg"></i>
                        <span class="app-menu__label">Tài khoản</span>
                    </a>
                </li> -->

            </ul>
        </aside>

        <!-- Essential javascripts for application to work-->
        <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{asset('js/popper.min.j')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>
        <!-- The javascript plugin to display page loading on top-->
        <script src="{{asset('js/plugins/pace.min.js')}}"></script>
        <!-- Page specific javascripts-->
        <script type="text/javascript" src="{{asset('js/plugins/chart.js')}}"></script>
        <script type="text/javascript">
            var data = {
            labels: ["January", "February", "March", "April", "May"],
            datasets: [
                {
                    label: "My First dataset",
                    fillColor: "rgba(220,220,220,0.2)",
                    strokeColor: "rgba(220,220,220,1)",
                    pointColor: "rgba(220,220,220,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(220,220,220,1)",
                    data: [65, 59, 80, 81, 56]
                },
                {
                    label: "My Second dataset",
                    fillColor: "rgba(151,187,205,0.2)",
                    strokeColor: "rgba(151,187,205,1)",
                    pointColor: "rgba(151,187,205,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(151,187,205,1)",
                    data: [28, 48, 40, 19, 86]
                }
            ]
            };

            var pdata = [
                {
                    value: 300,
                    color: "#46BFBD",
                    highlight: "#5AD3D1",
                    label: "Complete"
                },
                {
                    value: 50,
                    color:"#F7464A",
                    highlight: "#FF5A5E",
                    label: "In-Progress"
                }
            ]
  
            var ctxl = $("#lineChartDemo").get(0).getContext("2d");
            var lineChart = new Chart(ctxl).Line(data);
  
            var ctxp = $("#pieChartDemo").get(0).getContext("2d");
            var pieChart = new Chart(ctxp).Pie(pdata);
        </script>
        <!-- Google analytics script-->
        <script type="text/javascript">
            if(document.location.hostname == 'pratikborsadiya.in') {
                (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
                ga('create', 'UA-72504830-1', 'auto');
                ga('send', 'pageview');
            }
        </script>
    </body>
</html>