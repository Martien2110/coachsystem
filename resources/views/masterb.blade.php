<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <title>@yield('title')</title>
        <meta name="author" content="">
        
        <!-- ##### -->
        <!-- Fonts -->
        <!-- ##### -->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
        <!-- ################## -->
        <!-- Global stylesheets -->
        <!-- ################## -->
        <link href="{{ asset('back-end/bower_components/Materialize/dist/css/materialize.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('back-end/bower_components/font-awesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('back-end/bower_components/code-prettify/src/prettify.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('back-end/css/admin.css') }}" rel="stylesheet" type="text/css" />
        <!-- ################# -->
        <!-- Theme stylesheets -->
        <!-- ################# -->
        <link href="{{ asset('back-end/css/themes/light.css') }}" id="ssThemeColor" rel="stylesheet" type="text/css" />
        <link href="{{ asset('back-end/css/themes/main/materialize-red.css') }}" id="ssMainColor" rel="stylesheet" type="text/css" />
        <link href="{{ asset('back-end/css/themes/alternative/red.css') }}" id="ssAlternativeColor" rel="stylesheet" type="text/css" />

        <!-- ################ -->
        <!-- Page stylesheets -->
        <!-- ################ -->
        <link href="{{ asset('back-end/css/pages/dashboard.css') }}" rel="stylesheet" type="text/css" />
        <!-- ##### -->
        <!-- Icons -->
        <!-- ##### -->
        <link rel="shortcut icon" href="{{ asset('back-end/img/favicon.ico') }}" type="image/x-icon">

        

        <!-- ################ -->
        <!-- Page javascripts -->
        <!-- ################ -->
        <script src="{{ asset('back-end/bower_components/amcharts3/amcharts/amcharts.js') }}" type="text/javascript"></script>
        <script src="{{ asset('back-end/bower_components/amcharts3/amcharts/serial.js') }}" type="text/javascript"></script>
        <script src="{{ asset('back-end/bower_components/amcharts3/amcharts/gauge.js') }}" type="text/javascript"></script>
        <script src="{{ asset('back-end/bower_components/amcharts3/amcharts/themes/light.js') }}" type="text/javascript"></script>
        <script src="{{ asset('back-end/bower_components/slimscroll/jquery.slimscroll.js') }}" type="text/javascript"></script>
        <script src="{{ asset('back-end/js/pages/dashboard.js') }}" type="text/javascript"></script>
        <script src="http://www.amcharts.com/lib/3/plugins/dataloader/dataloader.min.js" type="text/javascript"></script>
        
    </head>

    <body>
        <!-- #### -->
        <!-- Menu -->
        <!-- #### -->
        <nav>
            <div class="row">
                <div class="col s12">
                    <!-- ############ -->
                    <!-- Desktop Menu -->
                    <!-- ############ -->
                    <div class="nav-wrapper">
                        <a href="/index" class="brand-logo">
                            <img src="{{ asset('back-end/img/logo.png') }}"/>
                            <span class="valign">
                                <b class="main-text">LC</b> Admin
                            </span>
                        </a>

                        <!-- Desktop -->
                        <ul class="right hide-on-med-and-down">
                            <li>
                                <a class="dropdown-button" href="#!" data-activates="dropdown-dashboard"  data-constrainwidth="false" data-beloworigin="true">Dashboard<i class="material-icons dropdown-icon right">arrow_drop_down</i>
                                </a>
                            </li>
                        @if(Auth::user()->role < 2)
                            <li><a href="/message">Berichten</a></li>
                            <li><a href="/user">Gebruikers</a></li>
                            <li>
                                <a class="dropdown-button" href="#!" data-activates="dropdown-customer"  data-constrainwidth="false" data-beloworigin="true">
                                    Cliënten<i class="material-icons dropdown-icon right">arrow_drop_down</i>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-button" href="#!" data-activates="dropdown-intake"  data-constrainwidth="false" data-beloworigin="true">
                                    Intake<i class="material-icons dropdown-icon right">arrow_drop_down</i>
                                </a>
                            </li>
                            @endif
                            <li class="profile ">
                                <a class="dropdown-button" href="#!" data-activates="dropdown-profile" data-constrainwidth="false" data-beloworigin="true" data-alignment="right">
                                    <div class="valign-wrapper">
                                        {{ Auth::user()->name}}
                                        <i class="material-icons dropdown-icon right">arrow_drop_down</i>
                                    </div>
                                </a>
                            </li>
                        </ul>

                        <!-- Dropdowns -->
                        @if(Auth::user()->role < 2)
                        <ul id="dropdown-dashboard" class="dropdown-content">
                            <li><a href="/dashboard/message">Berichten</a></li>
                            <li><a href="/dashboard/customer">Cliënten</a></li>
                            <li class="divider"></li>
                            <li><a href="/dashboard/intake">Feedback - Intake</a></li>
                            <li><a href="/dashboard/appointment">Feedback - Sessies</a></li>
                        </ul>
                        <ul id="dropdown-customer" class="dropdown-content">
                            <li><a href="/customer">Overzicht Cliënten</a></li>
                            <li><a href="/customer/create">Voeg Cliënt toe</a></li>
                        </ul>
                        <ul id="dropdown-intake" class="dropdown-content">
                            <li><a href="/intake">Intake Vragen Overzicht</a></li>
                            <li><a href="/intake/create">Vraag/categorie aanmaken</a></li>
                        </ul>
                        @endif
                        <ul id="dropdown-profile" class="dropdown-content">
                            <li><a href="/logout">Logout</a></li>
                        </ul>

                        <!-- Mobile -->
                        <a href="#" data-activates="mobile-demo" class="button-collapse">
                            <i class="material-icons">menu</i>
                        </a>
                    </div>


                    <!-- ########### -->
                    <!-- Mobile Menu -->
                    <!-- ########### -->
                    <ul class="side-nav" id="mobile-demo">
                        <li class="logo">
                            <img src="{{ asset('back-end/img/logo.png') }}"/>
                            <p>
                                <b class="main-text">LC</b> Admin
                            </p>
                        </li>
                        <li class="padding-0">
                            <ul class="collapsible collapsible-accordion">
                                <li class="bold">
                                    <a class="collapsible-header waves-effect">Dashboard</a>
                                    <div class="collapsible-body">
                                        <ul>
                                            <li><a href="/dashboard/message">Berichten</a></li>
                                            <li><a href="/dashboard/customer">Cliënten</a></li>
                                            <li class="divider"></li>
                                            <li><a href="/dashboard/intake">Feedback - Intake</a></li>
                                            <li><a href="/dashboard/appointment">Feedback - Sessies</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        @if(Auth::user()->role < 2)
                        <li><a href="/message" class="waves-effect">Berichten</a></li>

                        <li class="padding-0">
                            <ul class="collapsible collapsible-accordion">
                                <li class="bold">
                                    <a class="collapsible-header waves-effect">Cliënten</a>
                                    <div class="collapsible-body">
                                        <ul>
                                            <li><a href="/customer">Overzicht Cliënten</a></li>
                                            <li><a href="/customer/create">Voeg Cliënt Toe</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="padding-0">
                            <ul class="collapsible collapsible-accordion">
                                <li class="bold">
                                    <a class="collapsible-header waves-effect">Intake</a>
                                    <div class="collapsible-body">
                                        <ul>
                                            <li><a href="/intake">Intake Vragen Overzicht</a></li>
                                            <li><a href="/intake/create">Vragen aanmaken</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
<main>
<div class="main-content">
@yield('content')
</div>
</main>
        <!-- ###### -->
        <!-- Footer -->
        <!-- ###### -->
        <footer class="page-footer">
            <div class="footer-copyright">
                <div class="container">
                    © 2016 LC-Admin, Martien Brouwer Web-Development.
                </div>
            </div>
        </footer>

        <!-- ################## -->
        <!-- Global javascripts -->
        <!-- ################## -->
        <script src="{{ asset('back-end/bower_components/jquery/dist/jquery.js') }}" type="text/javascript"></script>
        <script src="{{ asset('back-end/bower_components/Materialize/dist/js/materialize.js') }}" type="text/javascript"></script>
        <script src="{{ asset('back-end/bower_components/code-prettify/src/prettify.js') }}" type="text/javascript"></script>
        <script src="{{ asset('back-end/js/admin.js') }}" type="text/javascript"></script>
        <!-- ################ -->
        <!-- Util javascripts -->
        <!-- ################ -->
        <script src="{{ asset('back-end/js/utils.js') }}" type="text/javascript"></script>
        <script src="{{ asset('back-end/js/colors.js') }}" type="text/javascript"></script>
        
        <script>
        $('.datepicker').pickadate({
            dateFormat: 'yy-mm-dd',
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 100, // Creates a dropdown of 15 years to control year
            dateFormat: 'yy-mm-dd'
        });
        </script>

    </body>
</html>