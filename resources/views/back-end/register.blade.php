<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <title>Registratie | BVLC Admin</title>
        <meta name="author" content="Martien Brouwer">
        
        <!-- ##### -->
        <!-- Fonts -->
        <!-- ##### -->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
        <!-- ################## -->
        <!-- Global stylesheets -->
        <!-- ################## -->
        <link href="{{ asset('back-end/bower_components/Materialize/dist/css/materialize.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('back-end/bower_components/font-awesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('back-end/css/login.css') }}" rel="stylesheet" type="text/css" />
        <!-- ################# -->
        <!-- Theme stylesheets -->
        <!-- ################# -->
        <link href="{{ asset('back-end/css/themes/light.css') }}" id="ssThemeColor" rel="stylesheet" type="text/css" />
        <link href="{{ asset('back-end/css/themes/main/materialize-red.css') }}" id="ssMainColor" rel="stylesheet" type="text/css" />
        <link href="{{ asset('back-end/css/themes/alternative/red.css') }}" id="ssAlternativeColor" rel="stylesheet" type="text/css" />
        <!-- ################ -->
        <!-- Util stylesheets -->
        <!-- ################ -->
        <link href="{{ asset('back-end/css/theme-switcher.css') }}" rel="stylesheet" type="text/css" />
        <!-- ##### -->
        <!-- Icons -->
        <!-- ##### -->
        <link rel="shortcut icon" href="{{ asset('back-end/img/favicon.ico') }}" type="image/x-icon">
    </head>


    <body>
        <div id="theme-gradient"></div>
        
        <!-- ####### -->
        <!-- Content -->
        <!-- ####### -->
        <main>
            <div class="login-wrapper">
               
    				<div class="panel panel-bordered z-depth-1">
    					<div class="panel-header">
    						<h5>Registreer hier uw Cliënt voor <b class="main-text">LC-Admin</b></h5>
                            <div class="subtitle">Het wachtwoord is op te vragen in het profiel</div>
    					</div>
    					<div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Naam</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

							<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>
							 <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                             </div>
                              <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                            <input type="hidden" id="role" name="role" value="2">
                            <input type="hidden" id="customer_id" name="customer_id" value="{{$customer->id}}">
    					</div>
						<div class="panel-footer">
							<div class="right-align">
                                 <button type="submit" class="btn-flat btn-small waves-effect">Registreer</button>
							</div>
    					</div>
    				</div>
                </form>
            </div>
        </main>


        <!-- ################## -->
        <!-- Global javascripts -->
        <!-- ################## -->
        <script src="bower_components/jquery/dist/jquery.js" type="text/javascript"></script>
        <script src="bower_components/Materialize/dist/js/materialize.js" type="text/javascript"></script>
        <!-- ################ -->
        <!-- Util javascripts -->
        <!-- ################ -->
        <script src="js/utils.js" type="text/javascript"></script>
        <script src="js/colors.js" type="text/javascript"></script>
        <script src="js/theme-switcher.js" type="text/javascript"></script>
        
    </body>
</html>