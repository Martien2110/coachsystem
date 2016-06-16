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
                <!-- <form method="POST" action="{{ url('/customer/$customer->id/register') }}"> -->
                {!! Form::open(array('url' => '/customer/.$customer->id./register', 'method' => 'post')) !!}
                {{ csrf_field() }}
    				<div class="panel panel-bordered z-depth-1">
    					<div class="panel-header">
    						<h5>Registreer hier uw Cliënt voor <b class="main-text">LC-Admin</b></h5>
                            <div class="subtitle">Het wachtwoord is op te vragen in het profiel</div>
    					</div>
    					<div class="panel-body">
                            <div class="input-field">
                                <input type="text" name="name" id="name" required value="{{$customer->name}}" placeholder="Naam">
							</div>
							<div class="input-field">
                                <input id="email" type="email" name="email" placeholder="Email" value="{{$customer->email}}">
                            </div>
							<div class="input-field">
								<input type="password" name="password" id="password" required placeholder="password">
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
                    {!! Form::close() !!}
                <!-- </form> -->
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