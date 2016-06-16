@extends('masterb')

@section('title', 'Gebruiker')

@section('content')

<div class="row">
    <div class="col s12">
        <div class="page-header">
            <h3 class="main-text lighten-1">Gebruikers</h3>
            <div class="subtitle">Dit scherm is bedoeld voor het koppelen van een gebruiker aan een Cliënt. Voor het Cliëntendossier wordt u verwezen naar Cliëntenprofiel. </div>
        </div>
    </div>
</div>

<div class="row">
	<div class="col s12 m12">
		<div class="col s12 m4">
			<div class="panel panel-bordered">
				<div class="panel-header">
					<div class="title">Gebruiker gegevens</div>
					<div class="subtitle">Hieronder een overzicht van de gegevens van de Gebruiker</div>
				</div>
				<div class="panel-body">
					<table class="striped">
						<tr>
							<td class="right-align">Naam:</td>
							<td>{{ $user->name }}</td>
						</tr>
						<tr>
							<td class="right-align">Email:</td>
							<td>{{ $user->email }}</td>
						</tr>
						<tr>
							<td class="right-align">Aangemaakt op:</td>
							<td>{{ $user->created_at }}</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<div class="col s12 m8">
			<div class="panel panel-bordered">
				<div class="panel-header">
					<div class="title">Mogelijke Cliënten</div>
					<div class="subtitle">Selecteer hier de Cliënt die bij de gebruiker hoort.</div>
				</div>
				<div class="panel-body">
					{!! Form::open(array('method' => 'put', 'url' => 'user/'.$user->id)) !!}
					<input name="_token" type="hidden" id="_token" value="{{ csrf_token() }}" />
					<div class="input-field col s12 m12">
						<select name="customer_id">
							<option value="" disabled selected>Kies uit onderstaande mogelijkheden</option>
							@foreach($customers as $customer)
								<option value="{{$customer->id}}">{{$customer->name}} {{$customer->lm_prefix}} {{$customer->lastname}}, {{$customer->email}}</option>
 							@endforeach
						</select>
						<label>Selecteer Cliënt</label>
					</div>
 					<input type="hidden" name="status_id" value="10">
 					<button type="submit" class="btn-flat btn-small waves-effect">Koppel aan gebruiker</button>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>



@endsection