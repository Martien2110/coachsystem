@extends('masterf')

@section('title', 'Maak een afspraak')

@section('list')
<li><a href="/home">Home</a></li>
<li><a href="/overmij">Over mij</a></li>
<li class='active'><a href="/veranderjeleven">Verander je leven</a></li>
@endsection

@section('content')

 <div class="container">
        <h2 class="center">Wat verwacht U van het leven?</h2>
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="feature-circle">
                    <div class="image">
                        <img src="{{ asset('front-end/assets/img/circle-01.jpg') }}" alt="">
                        <i class="arrow"><img src="{{ asset('front-end/assets/img/arrow-right-02.png') }}" alt=""></i>
                    </div>
                    <h3>Wilt u meer uit het leven halen?</h3>
                </div>
                <!--/ .feature-circle-->
            </div>
            <!--/ .col-sm-4-->
            <div class="col-md-4 col-sm-4">
                <div class="feature-circle">
                    <div class="image">
                        <img src="{{ asset('front-end/assets/img/circle-02.jpg') }}" alt="">
                        <i class="arrow"><img src="{{ asset('front-end/assets/img/arrow-right-02.png') }}" alt=""></i>
                    </div>
                    <h3>Wilt u gevoelsmatig succes?</h3>
                </div>
                <!--/ .feature-circle-->
            </div>
            <!--/ .col-sm-4-->
            <div class="col-md-4 col-sm-4">
                <div class="feature-circle">
                    <div class="image">
                        <img src="{{ asset('front-end/assets/img/circle-03.jpg') }}" alt="">
                    </div>
                    <h3>Waarom gaat u er dan niet voor?</h3>
                </div>
                <!--/ .feature-circle-->
            </div>
            <!--/ .col-sm-4-->
        </div>
        <!--/ .row-->
    </div>
    <!--/ .container-->

     <hr class="triangle">

    <div class="block">
        <div class="container">
            <h2 class="center">Laten we dan afspreken en uw mooie toekomst tegemoet gaan!</h2>
            <div class="row">

                    @if (session('status'))
                    <div class="alert alert-dismissible alert-success">
                        <button type="button" class="close" data-dismiss="alert"></button>
                        {{ session('status') }}<!--<strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.-->
                    </div>
                    @endif
                <div class="col-md-6 col-sm-6">
                    <div class="box text-color-white equal-height">
                        <h3>Neem contact op via dit formulier</h3>
                    {!! Form::open(array('url' => 'message', 'class' => 'clearfix', 'id' => 'form-contact')) !!}
                            <!-- <input name="_token" type="hidden" id="_token" value="{{ csrf_token() }}" /> -->
                            <div class="form-group">
                                <input type="text" class="form-control" id="contact-form-name" name="name" placeholder="Uw Naam" required>
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <input type="email" class="form-control" id="contact-form-email" name="email" placeholder="Uw Email" required>
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <textarea class="form-control" id="contact-form-message" rows="3" name="message" placeholder="Uw Bericht" required></textarea>
                            </div><!-- /.form-group -->
                            <div class="form-group">
                            <input type="hidden" name="date" value="{{ date('Y-m-d') }}">
                            <input type="hidden" name="status_id" value="1">
                            {!! Form::submit('Neem Contact op', array('class' => 'btn pull-right btn-default btn-white', 'id' => 'form-contact-submit')) !!}
                            </div><!-- /.form-group -->
                            <div id="form-status" class="pull-left"></div>
                        {!! Form::close() !!}
                        <div class="bg bg-color-default"></div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="box text-color-white equal-height">
                        <h3>U kunt me ook bereiken via:</h3>
                        <dl class="big">
                            <dt class="promoted"><i class="icon_phone"></i></dt>
                            <dd class="promoted">06-12345678</dd>
                            <dt><i class="icon_mail"></i></dt>
                            <dd><a href="mailto:bertienverzijl@bvlc.nl">bertienverzijl@bvlc.nl</dd>
                            <p> -- Adres --</p>
                            <dd>Hoorzik 43, </dd>
                            <dd>5331 KJ te Kerkdriel</dd>
                            <p> -------------</p>
                        </dl>
                        <div class="bg bg-color-default-darker"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ .container-->
        <div class="bg"></div><!--/ .bg-->
    </div>
    <!--/ .block-->



@endsection



