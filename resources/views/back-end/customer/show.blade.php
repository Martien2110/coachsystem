@extends('masterb')

@section('title', 'Cliënt Profiel')

@section('content')


<div class="row">
    <div class="col s12">
        <div class="page-header">
            <h3 class="main-text lighten-1">Cliënt: {{ $customer->name }} {{ $customer->lm_prefix }} {{$customer->lastname}}</h3>
        </div>
    </div>
</div>
<div class="row">
	<div class="col s12 m12">
		<div class="col s12 m4">
			@if(is_object($user))
			<a class="waves-effect waves-light btn" href="/customer/{{$customer->id}}/deleteuser"><i class="material-icons left">send</i>Verwijder Cliënt account</a>
			@else
			<a class="waves-effect waves-light btn" href="#"><i class="material-icons left">send</i>Cliënt heeft geen Account</a>
			@endif
		</div>
		<div class="col s12 m4">
			@if(is_object($intake))
				@if($intake->visible == 1)
				<a class="waves-effect waves-light btn" href="#"><i class="material-icons left">assignment</i>Intake formulier al klaargezet</a>
				@else
				<a class="waves-effect waves-light btn" href="#"><i class="material-icons left">assignment</i>Intake formulier al behandeld.</a>
				@endif
			@else
			<a class="waves-effect waves-light btn" href="/customer/{{$customer->id}}/intake"><i class="material-icons left">assignment</i>Zet Intake Formulier klaar voor Cliënt</a>
			@endif
		</div>
		<div class="col s12 m4">
			<a class="waves-effect waves-light btn" href="/customer/{{$customer->id}}/intake/process"><i class="material-icons left">assignment</i>Verwerk Intake Formulier van de Cliënt</a>
		</div>
	</div>
</div>
<div class="row">
	<div class="col s12 m12">
		<div class="col s12 m4">
			<a class="waves-effect waves-light btn" href="/customer/{{$customer->id}}/appointment/process"><i class="material-icons left">assignment</i>Verwerk Coach sessie van de Cliënt</a>
		</div>
		<div class="col s12 m4">
			<a class="waves-effect waves-light btn" href="/customer/{{$customer->id}}/evaluation/"><i class="material-icons left">send</i>Verstuur Evaluatie Verzoek naar Cliënt</a>
		</div>
		<div class="col s12 m4">
			<a class="waves-effect waves-light btn" href="/customer/{{$customer->id}}/invoice"><i class="material-icons left">send</i>Verstuur Factuur naar Cliënt</a>
		</div>
	</div>
</div>

<div class="row">
	<div class="col s12 m12">
		<div class="col s14 m4">
			<div class="panel panel-bordered">
				<div class="panel-header">
					<div class="title">Cliënt gegevens</div>
					<div class="subtitle">Hieronder een overzicht van de gegevens van de Cliënt</div>
				</div>
				<div class="panel-body">
					<table class="datatable bordered">
						<tr>
							<td class="right-align">Naam: </td>
							<td>{{ $customer->name }} {{ $customer->lm_prefix }} {{$customer->lastname}}</td>
						</tr>
						<tr>
							<td class="right-align">Adres: </td>
							<td>{{ $customer->address }} {{ $customer->housenumber }}, {{$customer->zipcode}} te {{$customer->city}}</td>
						</tr>
						<tr>
							<td class="right-align">Contactgegevens: </td>
							<td>{{ $customer->phonenumber }} {{ $customer->phonenumber2 }} <br> {{$customer->email}}</td>
						</tr>
						<tr>
							<td class="right-align">Cliënt Status: </td>
							<td>{{ $status->description }}</td>
						</tr>
						<tr>
							<td class="right-align">Cliënt Account: </td>
							<td> @if(is_object($user)) Cliënt heeft reeds een account. @else Cliënt heeft geen account @endif </td>
						</tr>
					</table>
					<div class="btn-group right-align ">
						{!! Form::open(array('url' => '/customer/'.$customer->id,'method' => 'delete')) !!}

						<a class="btn-flat btn-small waves-effect" href="/customer/{{$customer->id}}/edit"><i class="material-icons">create</i></a>
						<button type="submit" class="btn-flat btn-small waves-effect btnDelete"><i class="material-icons">delete</i></button>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
		<div class="col s14 m8">
			<div class="panel panel-bordered">
				<div class="panel-header">
					<div class="title">Lopende Afspraken</div>
					<div class="subtitle">Hieronder een overzicht van de afspraken van de Cliënt</div>
				</div>
			</div>
		</div>
	</div>
</div>





@endsection