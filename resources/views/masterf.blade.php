<!DOCTYPE html>

<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="">

    <link rel="stylesheet" href="{{ asset('front-end/assets/fonts/font-awesome.css')  }}"           type="text/css">
    <link rel="stylesheet" href="{{ asset('front-end/assets/fonts/elegant-fonts.css')  }}"          type="text/css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900'      type='text/css'>
    <link rel="stylesheet" href="{{ asset('front-end/assets/bootstrap/css/bootstrap.css')  }}"      type="text/css">
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/zabuto_calendar.min.css')  }}"      type="text/css">
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/bootstrap-select.min.css')  }}"     type="text/css">
    <link rel="stylesheet" href="{{ asset('front-end/assets/revolution/css/settings.css')  }}"      type="text/css">
    <link rel="stylesheet" href="{{ asset('front-end/assets/revolution/css/layers.css')  }}"        type="text/css">
    <link rel="stylesheet" href="{{ asset('front-end/assets/revolution/css/navigation.css')  }}"    type="text/css">
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/style.css')  }}"                    type="text/css">

    <title>@yield('title')</title>

</head>

<body class="homepage">
<div class="overlay"></div>

<div class="outer-wrapper">
<div class="page-wrapper">

    <header class="navigation" id="top">
        <div class="container">
            <div class="secondary-nav">
                <span><a href="mailto:Bertienverzijl@bvlc.nl"><i class="icon_mail"></i>Bertienverzijl@blvc.nl</a></span>
                <span><i class="icon_phone"></i>06-12345678</span>
                <span><a href="/index">Admin</a></span>
            </div>
            <!--/.secondary-nav-->
            <div class="main-nav">
                <div class="brand"><a href="/home"><img src="{{ asset('front-end/assets/img/logo.png') }}" alt=""></a></div><!--/.brand-->
                <nav>
                    <ul>
                        @yield('list')
                    </ul>
                    <div class="nav-toggle"><i class="icon_menu"></i></div>
                </nav>
            </div>
            <!--/.main-nav-->
        </div>
        <!--/.container-->
    </header>
    <!--/.header-->
 
@yield('content')

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <div class="left">
                        <span>(C) 2016 Martien Brouwer Web-Development, All Rights Reserved</span>
                        <div class="bg-left"></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="right">
                        <span><a href="#top" class="scroll">Naar Boven<i class="arrow_carrot-up_alt2"></i></a></span>
                        <div class="bg-right"><img src="{{asset('front-end/assets/img/footer-bg.png') }}" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ .container-->
    </footer>

</div>
</div>

<div class="modal fade" id="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title">Make an Appointment</h2>
                <h4>Select the Time</h4>
            </div>
            <div class="modal-body">
                <div class="times">
                    <form id="form-calendar">
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn time-radio">
                                <input type="radio" name="options" id="option1"><figure class="time">08:00</figure>
                                <span>Available</span>
                            </label>
                            <label class="btn time-radio">
                                <input type="radio" name="options" id="option2"><figure class="time">09:00</figure>
                                <span>Available</span>
                            </label>
                            <label class="btn time-radio">
                                <input type="radio" name="options" id="option3"><figure class="time">10:00</figure>
                                <span>Available</span>
                            </label>
                            <label class="btn time-radio">
                                <input type="radio" name="options" id="option4"><figure class="time">11:00</figure>
                                <span>Available</span>
                            </label>
                            <label class="btn time-radio not-available">
                                <input type="radio" name="options" id="option5"><figure class="time">12:00</figure>
                                <span>Not available</span>
                            </label>
                            <label class="btn time-radio">
                                <input type="radio" name="options" id="option6"><figure class="time">13:00</figure>
                                <span>Available</span>
                            </label>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control framed" name="modal-first-name" placeholder="First Name" required>
                                </div><!-- /.form-group -->
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control framed" name="modal-last-name" placeholder="Last Name" required>
                                </div><!-- /.form-group -->
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="email" class="form-control framed" name="modal-email" placeholder="E-mail" required>
                                </div><!-- /.form-group -->
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control framed" name="modal-number" placeholder="Number" pattern="\d*" required>
                                </div><!-- /.form-group -->
                            </div>
							<div class="pull-left"><div class="form-status" id="form-calendar-status"></div></div>
                            <div class="form-group">
                                <button type="submit" class="btn pull-right btn-primary" id="form-contact-submit">Contact Me</button>
                            </div><!-- /.form-group -->
							<input type="date" class="hidden" name="modal-date" id="modal-date" pattern="\d*" required hidden readonly>
							<input type="time" class="hidden" name="modal-time" id="modal-time" pattern="\d*" required hidden readonly>
                        </div>
                    </form>
                </div><!-- /.times -->
            </div><!-- /.modal-body -->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<script type="text/javascript" src="{{ asset('front-end/assets/js/jquery-2.1.4.min.js') }}">                                             </script>
<script type="text/javascript" src="{{ asset('front-end/assets/js/jquery-migrate-1.2.1.min.js') }}">                                     </script>
<script type="text/javascript" src="{{ asset('front-end/assets/bootstrap/js/bootstrap.min.js') }}">                                      </script>
<script type="text/javascript" src="{{ asset('front-end/assets/js/bootstrap-select.min.js') }}">                                         </script>
<script type="text/javascript" src="{{ asset('front-end/assets/js/zabuto_calendar.min.js') }}">                                          </script>
<script type="text/javascript" src="{{ asset('front-end/assets/js/jquery.validate.min.js') }}">                                          </script>
<script type="text/javascript" src="{{ asset('front-end/assets/revolution/js/jquery.themepunch.tools.min.js') }}">                       </script>
<script type="text/javascript" src="{{ asset('front-end/assets/revolution/js/jquery.themepunch.revolution.min.js') }}">                  </script>
<script type="text/javascript" src="{{ asset('front-end/assets/revolution/js/extensions/revolution.extension.video.min.js') }}">         </script>
<script type="text/javascript" src="{{ asset('front-end/assets/revolution/js/extensions/revolution.extension.slideanims.min.js') }}">    </script>
<script type="text/javascript" src="{{ asset('front-end/assets/revolution/js/extensions/revolution.extension.actions.min.js') }}">       </script>
<script type="text/javascript" src="{{ asset('front-end/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front-end/assets/revolution/js/extensions/revolution.extension.kenburn.min.js') }}">       </script>
<script type="text/javascript" src="{{ asset('front-end/assets/revolution/js/extensions/revolution.extension.navigation.min.js') }}">    </script>
<script type="text/javascript" src="{{ asset('front-end/assets/revolution/js/extensions/revolution.extension.migration.min.js') }}">     </script>
<script type="text/javascript" src="{{ asset('front-end/assets/revolution/js/extensions/revolution.extension.parallax.min.js') }}">      </script>

<script type="text/javascript" src="{{ asset('front-end/assets/js/custom.js') }}"></script>

<script type="text/javascript" src="{{ asset('front-end/assets/js/owl.carousel.min.js') }}">            </script>
<script type="text/javascript" src="{{ asset('front-end/assets/js/jquery.fitvids.js') }}">              </script>
<script type="text/javascript" src="{{ asset('front-end/assets/js/custom.js') }}">                      </script>

@yield('scripts')

<!--[if lte IE 9]>
    <script src="assets/js/ie.js"></script>
<![endif]-->


</body>