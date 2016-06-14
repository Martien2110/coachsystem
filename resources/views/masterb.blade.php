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
                            <li><a href="index.html">Dashboard</a></li>
                            <li><a href="/message">Berichten</a></li>
                            <li >
                                <a class="dropdown-button" href="#!" data-activates="dropdown-css" data-constrainwidth="false" data-beloworigin="true">
                                    CSS<i class="material-icons dropdown-icon right">arrow_drop_down</i>
                                </a>
                            </li>

                            <li >
                                <a class="dropdown-button" href="#!" data-activates="dropdown-components" data-constrainwidth="false" data-beloworigin="true">
                                    Components<i class="material-icons dropdown-icon right">arrow_drop_down</i>
                                </a>
                            </li>

                            <li >
                                <a class="dropdown-button" href="#!" data-activates="dropdown-javascript" data-constrainwidth="false" data-beloworigin="true">
                                    Javascript<i class="material-icons dropdown-icon right">arrow_drop_down</i>
                                </a>
                            </li>

                            <li >
                                <a class="dropdown-button" href="#!" data-activates="dropdown-forms" data-constrainwidth="false" data-beloworigin="true">
                                    Forms<i class="material-icons dropdown-icon right">arrow_drop_down</i>
                                </a>
                            </li>

                            <li >
                                <a class="dropdown-button" href="#!" data-activates="dropdown-tables" data-constrainwidth="false" data-beloworigin="true">
                                    Tables<i class="material-icons dropdown-icon right">arrow_drop_down</i>
                                </a>
                            </li>

                            <li >
                                <a class="dropdown-button" href="#!" data-activates="dropdown-apps" data-constrainwidth="false" data-beloworigin="true">
                                    APPs<i class="material-icons dropdown-icon right">arrow_drop_down</i>
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-button" href="#!" data-activates="dropdown-pages" data-constrainwidth="false" data-beloworigin="true">
                                    Pages<i class="material-icons dropdown-icon right">arrow_drop_down</i>
                                </a>
                            </li>

                            <li class="profile ">
                                <a class="dropdown-button" href="#!" data-activates="dropdown-profile" data-constrainwidth="false" data-beloworigin="true" data-alignment="right">
                                    <div class="valign-wrapper">
                                        <img src="{{ asset('back-end/img/profile.jpg') }}" alt="My profile" class="circle responsive-img margin-right-10">
                                        {{ Auth::user()->name}}
                                        <i class="material-icons dropdown-icon right">arrow_drop_down</i>
                                    </div>
                                </a>
                            </li>
                        </ul>

                        <!-- Dropdowns -->
                        <ul id="dropdown-css" class="dropdown-content">
                            <li ><a href="css_color.html">Color</a></li>
                            <li ><a href="css_grid.html">Grid</a></li>
                            <li ><a href="css_helpers.html">Helpers</a></li>
                            <li ><a href="css_media.html">Media</a></li>
                            <li ><a href="css_typography.html">Typography</a></li>
                        </ul>
                        <ul id="dropdown-components" class="dropdown-content">
                            <li ><a href="components_badges.html">Badges</a></li>
                            <li ><a href="components_buttons.html">Buttons</a></li>
                            <li ><a href="components_breadcrumbs.html">Breadcrumbs</a></li>
                            <li ><a href="components_cards.html">Cards</a></li>
                            <li ><a href="components_chips.html">Chips</a></li>
                            <li ><a href="components_collections.html">Collections</a></li>
                            <li ><a href="components_footer.html">Footer</a></li>
                            <li ><a href="components_icons.html">Icons</a></li>
                            <li ><a href="components_navbar.html">Navbar</a></li>
                            <li ><a href="components_pagination.html">Pagination</a></li>
                            <li ><a href="components_preloader.html">Preloader</a></li>
                        </ul>
                        <ul id="dropdown-javascript" class="dropdown-content">
                            <li ><a href="js_collapsible.html">Collapsible</a></li>
                            <li ><a href="js_dialogs.html">Dialogs</a></li>
                            <li ><a href="js_dropdown.html">Dropdown</a></li>
                            <li ><a href="js_media.html">Media</a></li>
                            <li ><a href="js_modals.html">Modals</a></li>
                            <li ><a href="js_parallax.html">Parallax</a></li>
                            <li ><a href="js_pushpin.html">Pushpin</a></li>
                            <li ><a href="js_scrollfire.html">ScrollFire</a></li>
                            <li ><a href="js_scrollspy.html">Scrollspy</a></li>
                            <li ><a href="js_sidenav.html">SideNav</a></li>
                            <li ><a href="js_tabs.html">Tabs</a></li>
                            <li ><a href="js_transitions.html">Transitions</a></li>
                            <li ><a href="js_waves.html">Waves</a></li>
                        </ul>
                        <ul id="dropdown-forms" class="dropdown-content">
                            <li ><a href="forms_general.html">General Elements</a></li>
                            <li ><a href="forms_advanced.html">Advanced Forms</a></li>
                        </ul>
                        <ul id="dropdown-tables" class="dropdown-content">
                            <li ><a href="tables_basic.html">Basic Tables</a></li>
                            <li ><a href="tables_datatables.html">Datatables</a></li>
                        </ul>
                        <ul id="dropdown-apps" class="dropdown-content">
                            <li ><a href="apps_crud.html">CRUD</a></li>
                        </ul>
                        <ul id="dropdown-pages" class="dropdown-content">
                            <li><a href="login.html">Login</a></li>
                            <li><a href="register.html">Register</a></li>
                            <li><a href="forgot_password.html">Forgot Password</a></li>
                            <li class="divider"></li>
                            <li><a href="error_400.html">Error 400</a></li>
                            <li><a href="error_403.html">Error 403</a></li>
                            <li><a href="error_404.html">Error 404</a></li>
                            <li><a href="error_500.html">Error 500</a></li>
                        </ul>
                        <ul id="dropdown-profile" class="dropdown-content">
                            <li><a href="profile.html">Profile</a></li>
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

                        <li>
                            <a href="index.html" class="waves-effect">Dashboard</a>
                        </li>

                        <li class="padding-0">
                            <ul class="collapsible collapsible-accordion">
                                <li class="bold">
                                    <a class="collapsible-header waves-effect">CSS</a>
                                    <div class="collapsible-body">
                                        <ul>
                                            <li><a href="css_color.html">Color</a></li>
                                            <li><a href="css_grid.html">Grid</a></li>
                                            <li><a href="css_helpers.html">Helpers</a></li>
                                            <li><a href="css_media-css.html">Media</a></li>
                                            <li><a href="css_typography.html">Typography</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="bold">
                                    <a class="collapsible-header waves-effect">Components</a>
                                    <div class="collapsible-body">
                                        <ul>
                                            <li><a href="components_badges.html">Badges</a></li>
                                            <li><a href="components_buttons.html">Buttons</a></li>
                                            <li><a href="components_breadcrumbs.html">Breadcrumbs</a></li>
                                            <li><a href="components_cards.html">Cards</a></li>
                                            <li><a href="components_chips.html">Chips</a></li>
                                            <li><a href="components_collections.html">Collections</a></li>
                                            <li><a href="components_footer.html">Footer</a></li>
                                            <li><a href="components_forms.html">Forms</a></li>
                                            <li><a href="components_icons.html">Icons</a></li>
                                            <li><a href="components_navbar.html">Navbar</a></li>
                                            <li><a href="components_pagination.html">Pagination</a></li>
                                            <li><a href="components_preloader.html">Preloader</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="bold">
                                    <a class="collapsible-header waves-effect">JavaScript</a>
                                    <div class="collapsible-body">
                                        <ul>
                                            <li><a href="js_collapsible.html">Collapsible</a></li>
                                            <li><a href="js_dialogs.html">Dialogs</a></li>
                                            <li><a href="js_dropdown.html">Dropdown</a></li>
                                            <li><a href="js_media.html">Media</a></li>
                                            <li><a href="js_modals.html">Modals</a></li>
                                            <li><a href="js_parallax.html">Parallax</a></li>
                                            <li><a href="js_pushpin.html">Pushpin</a></li>
                                            <li><a href="js_scrollfire.html">ScrollFire</a></li>
                                            <li><a href="js_scrollspy.html">Scrollspy</a></li>
                                            <li><a href="js_sidenav.html">SideNav</a></li>
                                            <li><a href="js_tabs.html">Tabs</a></li>
                                            <li><a href="js_transitions.html">Transitions</a></li>
                                            <li><a href="js_waves.html">Waves</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="bold">
                                    <a class="collapsible-header waves-effect">Forms</a>
                                    <div class="collapsible-body">
                                        <ul>
                                            <li><a href="forms_general.html">General Elements</a></li>
                                            <li><a href="forms_advanced.html">Advanced Forms</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="bold">
                                    <a class="collapsible-header waves-effect">Tables</a>
                                    <div class="collapsible-body">
                                        <ul>
                                            <li><a href="tables_basic.html">Basic Tables</a></li>
                                            <li><a href="tables_datatables.html">Datatables</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
<main>

            <div class="main-content no-gutter">
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
        <!-- ################ -->
        <!-- Page javascripts -->
        <!-- ################ -->
        <script src="{{ asset('back-end/bower_components/amcharts3/amcharts/amcharts.js') }}" type="text/javascript"></script>
        <script src="{{ asset('back-end/bower_components/amcharts3/amcharts/serial.js') }}" type="text/javascript"></script>
        <script src="{{ asset('back-end/bower_components/amcharts3/amcharts/gauge.js') }}" type="text/javascript"></script>
        <script src="{{ asset('back-end/bower_components/amcharts3/amcharts/themes/light.js') }}" type="text/javascript"></script>
        <script src="{{ asset('back-end/bower_components/slimscroll/jquery.slimscroll.js') }}" type="text/javascript"></script>
        <script src="{{ asset('back-end/js/pages/dashboard.js') }}" type="text/javascript"></script>
        
    </body>
</html>