@extends('masterf')

@section('title', 'Over mij')

@section('list')
<li><a href="/home">Home</a></li>
<li class="active"><a href="/overmij">Over mij</a></li>
<li><a href="/veranderjeleven">Verander je leven</a></li>
@endsection

@section('content')

<div class="heading">
    <div class="container">
        <h1>About Me</h1>
    </div>
</div>

<div class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <img src="{{ asset('front-end/assets/img/author.jpg') }}" alt="">
                </div>
                <div class="col-md-8 col-sm-8">
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
                    <p>
                        Nunc hendrerit, tortor at congue posuere, metus ante bibendum orci, quis tincidunt mi nunc vel
                        lacus. Fusce nec turpis quis velit condimentum pretium vitae sed nulla. Nunc sed eros a dui
                        imperdiet maximus eget vel odio. Praesent porttitor, ante consequat accumsan facilisis, diam
                        nisl volutpat quam, sed finibus neque sem eget lorem.
                    </p>
                    <br>
                </div>
                <!--/ .col-md-8-->
            </div>
            <!--/ .row-->
        </div>
        <!--/ .container-->
    </div>
    <!--/ .block-->



@endsection



