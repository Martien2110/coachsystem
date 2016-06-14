@extends('masterf')

@section('title', 'BVLC')

@section('list')
<li class="active"><a href="/home">Home</a></li>
<li><a href="/overmij">Over mij</a></li>
<li><a href="/veranderjeleven">Verander je leven</a></li>
@endsection

@section('content')


   
    <div class="hero-slider" style="min-height: 100px">
        <div class="rev-slider">
            <ul>
               <li>
                   <img src="{{ asset('front-end/assets/img/slide.jpg') }}" alt="">
                   <div class="tp-caption"
                        data-x="left" data-hoffset="0"
                        data-y="top" data-voffset="150"
                        data-transform_idle="o:1;"
                        data-transform_in="x:50px;opacity:0;s:700;e:Power3.easeInOut;"
                        data-start="500"><h4 class="opacity-40">Hallo, ik ben Bertien Verzijl en ik ben Life Coach</h4>
                   </div>
                   <div class="tp-caption"
                        data-x="left" data-hoffset="0"
                        data-y="top" data-voffset="210"
                        data-transform_idle="o:1;"
                        data-transform_in="x:50px;opacity:0;s:700;e:Power3.easeInOut;"
                        data-start="600"><h1>Ontdek mijn manier<br>en leef succesvol!</h1>
                   </div>
                   <div class="tp-caption"
                        data-x="left" data-hoffset="0"
                        data-y="top" data-voffset="410"
                        data-transform_idle="o:1;"
                        data-transform_in="x:50px;opacity:0;s:700;e:Power3.easeInOut;"
                        data-start="700"><a href="#five-steps-to-success" class="link underline scroll">Vertel me hoe</a>
                   </div>
               </li>
                <li>
                    <img src="{{ asset('front-end/assets/img/slide-02.jpg') }}" alt="">
                    <div class="tp-caption"
                         data-x="left" data-hoffset="0"
                         data-y="top" data-voffset="150"
                         data-transform_idle="o:1;"
                         data-transform_in="x:50px;opacity:0;s:700;e:Power3.easeInOut;"
                         data-start="500"><h4 class="opacity-40 text-color-white">Ik zal het je vertellen</h4>
                    </div>
                    <div class="tp-caption"
                         data-x="left" data-hoffset="0"
                         data-y="top" data-voffset="210"
                         data-transform_idle="o:1;"
                         data-transform_in="x:50px;opacity:0;s:700;e:Power3.easeInOut;"
                         data-start="600"><h1 class="text-color-white">Herstart je denkwijze<br>En voel je vrij!</h1>
                    </div>
                    <div class="tp-caption"
                         data-x="left" data-hoffset="0"
                         data-y="top" data-voffset="410"
                         data-transform_idle="o:1;"
                         data-transform_in="x:50px;opacity:0;s:700;e:Power3.easeInOut;"
                         data-start="700"><a href="#five-steps-to-success" class="link underline scroll">Vertel me hoe</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!--/.hero-slider-->

    <div class="page-content">
    <div class="block" id="features">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="feature-box">
                        <i class="icon_comment_alt"></i>
                        <a href=""><h3>Mijn Coaching</h3></a>
                        <p>Fusce facilisis nec ante et accumsan. Ut malesuada tristique sagittis</p>
                        <a href=""><i class="arrow_right"></i></a>
                    </div>
                    <!--/ .feature-box-->
                </div>
                <!--/ .col-md-3-->
                <div class="col-md-4 col-sm-6">
                    <div class="feature-box">
                        <i class="icon_briefcase"></i>
                        <a href=""><h3>Voor bedrijven</h3></a>
                        <p>Fusce facilisis nec ante et accumsan. Ut malesuada tristique sagittis</p>
                        <a href=""><i class="arrow_right"></i></a>
                    </div>
                    <!--/ .feature-box-->
                </div>
                <!--/ .col-md-3-->
                <div class="col-md-4 col-sm-6">
                    <div class="feature-box">
                        <i class="icon_box-checked"></i>
                        <a href=""><h3>Zit je even vast?</h3></a>
                        <p>Fusce facilisis nec ante et accumsan. Ut malesuada tristique sagittis</p>
                        <a href=""><i class="arrow_right"></i></a>
                    </div>
                    <!--/ .feature-box-->
                </div>
                <!--/ .col-md-3-->
            </div>
            <!--/ .row-->
        </div>
        <!--/ .container-->
        <div class="bg bg-color-neutral opacity-50"></div><!--/ .bg-->
    </div>
    <!--/ .block-->

    <div class="block">
        <div class="container">
            <blockquote class="center">
                <p>Hier kan eventueel een mooie quote die inspireert</p>
                <footer>Jane Doe</footer>
            </blockquote>
            <!--/ blockquote-->
        </div>
        <!--/ .container-->
        <div class="bg bg-color-neutral opacity-20"></div><!--/ .bg-->
    </div>
    <!--/ .block-->

    <div class="block" id="about-me">
        <div class="container">
            <h2>Over mij</h2>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="center">
                        <img src="{{ asset('front-end/assets/img/author.jpg') }}" class="circle" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <h3 class="no-bottom-margin"><strong>Bertien Verzijl</strong></h3>
                    <h5>Life Coach</h5>
                    <br>
                    <p>
                        Sed iaculis dapibus tellus eget condimentum. Curabitur ut tellus congue, convallis tortor et,
                        pellentesque diam. Nullam non dolor eu ligula ultrices pellentesque placerat imperdiet metus.
                        Etiam lobortis bibendum egestas. In quis massa a felis molestie consequat rhoncus vitae nisl.
                        In pharetra posuere dictum. In eget metus eu leo rutrum venenatis vitae sit amet elit.
                        Duis luctus enim enim.
                    </p>
                    <div class="numbers">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="number">
                                    <figure>68</figure>
                                    <aside>Personen gecoacht</aside>
                                </div>
                                <!--/ .number-->
                            </div>
                            <!--/ .col-md-4-->
                            <div class="col-md-4 col-sm-4">
                                <div class="number">
                                    <figure>45</figure>
                                    <aside>Trainingen gegeven</aside>
                                </div>
                                <!--/ .number-->
                            </div>
                            <!--/ .col-md-4-->
                            <div class="col-md-4 col-sm-4">
                                <div class="number">
                                    <figure>12</figure>
                                    <aside>Soorten Sessies</aside>
                                </div>
                                <!--/ .number-->
                            </div>
                            <!--/ .col-md-4-->
                        </div>
                        <!--/ .row-->
                    </div>
                    <!--/ .numbers-->
                    <hr>
                    <a href="" class="link arrow">Meer over mij</a>
                </div>
                <!--/ .col-sm-6-->
            </div>
            <!--/ .row-->
        </div>
        <!--/ .container-->
    </div>
    <!--/ .block-->

    <div class="space"></div>

    <div class="block" id="five-steps-to-success">
        <div class="container">
            <h2 class="center">Vijf stappen naar succes</h2>
            <div class="steps">
                <div class="step width-20">
                    <figure>
                        <aside>1.</aside>
                        <div class="bar height-20">
                            <div class="arrow"></div>
                        </div>
                    </figure>
                    <h3>Neem contact op</h3>
                    <hr>
                    <p>Sed iaculis dapibus tellus eget condimentum. Curabitur ut tellus congue, convallis tortor et</p>
                </div>
                <!--/ .step-->
                <div class="step width-20">
                    <figure>
                        <aside>2.</aside>
                        <div class="bar height-40">
                            <div class="arrow"></div>
                        </div>
                    </figure>
                    <h3>Maak een afspraak</h3>
                    <hr>
                    <p>Sed iaculis dapibus tellus eget condimentum. Curabitur ut tellus congue, convallis tortor et</p>
                </div>
                <!--/ .step-->
                <div class="step width-20">
                    <figure>
                        <aside>3.</aside>
                        <div class="bar height-60">
                            <div class="arrow"></div>
                        </div>
                    </figure>
                    <h3>Ik bereid me voor</h3>
                    <hr>
                    <p>Sed iaculis dapibus tellus eget condimentum. Curabitur ut tellus congue, convallis tortor et</p>
                </div>
                <!--/ .step-->
                <div class="step width-20">
                    <figure>
                        <aside>4.</aside>
                        <div class="bar height-80">
                            <div class="arrow"></div>
                        </div>
                    </figure>
                    <h3>Sessie</h3>
                    <hr>
                    <p>Sed iaculis dapibus tellus eget condimentum. Curabitur ut tellus congue, convallis tortor et</p>
                </div>
                <!--/ .step-->
                <div class="step width-20">
                    <figure>
                        <aside>5.</aside>
                        <div class="bar height-100">
                            <div class="arrow"></div>
                        </div>
                    </figure>
                    <h3>Reflecteer</h3>
                    <hr>
                    <p>Sed iaculis dapibus tellus eget condimentum. Curabitur ut tellus congue, convallis tortor et</p>
                </div>
                <!--/ .step-->
            </div>
            <!--/ .steps-->
            <div class="center">
                <a href="/veranderjeleven" class="btn btn-default btn-big">Neem Contact op!</a>
            </div>
        </div>
        <!--/ .container-->
        <div class="bg bg-color-neutral opacity-50"></div><!--/ .bg-->
    </div>
    <!--/ .block-->


@endsection