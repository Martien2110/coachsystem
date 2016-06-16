@extends('masterb')

@section('title', 'Cliënt Toevoegen')

@section('content')

<div class="row">
    <div class="col s12">
        <div class="page-header">
            <h3 class="main-text lighten-1">Nieuwe Cliënt toevoegen</h3>
        </div>
    </div>
</div>	

<div class="row">
	<div class="col s12 m12">
		<div class="panel panel-bordered">
			<div class="panel-header">
				<div class="title">Cliënt Toevoegen</div>
				<div class="subtitle">Vul hieronder de gegevens van uw Cliënt in</div>
			</div>
			<div class="panel-body">
				{!! Form::open(array('url' => 'customer')) !!}
				<input name="_token" type="hidden" id="_token" value="{{ csrf_token() }}" />
				<div class="row no-gutter">
					<div class="input-field col s8 m4">
						{!! Form::label('nm', 'Naam', array('for' => 'first_name')) !!}
						{!! Form::text('name', null, array('id' => 'first_name', 'class' => 'validate', 'required')) !!}
					</div>
					<div class="input-field col s4 m2">
						{!! Form::label('lnp', 'Tusenvoegsel', array('for' => 'lm_prefix')) !!}
						{!! Form::text('lm_prefix', null, array('id' => 'lm_prefix', 'class' => 'validate')) !!}
					</div>
					<div class="input-field col s12 m6">
						{!! Form::label('lnm', 'Achternaam', array('for' => 'last')) !!}
						{!! Form::text('lastname', null, array('id' => 'last', 'class' => 'validate', 'required')) !!}
					</div>
				</div>
				<div class="row no-gutter">
					<div class="input-field col s8 m10">
						{!! Form::label('strt', 'Straat', array('for' => 'address')) !!}
						{!! Form::text('address', null, array('id' => 'address', 'class' => 'validate', 'required')) !!}
					</div>
					<div class="input-field col s4 m2">
						{!! Form::label('hsn', 'Nummer', array('for' => 'housenumber')) !!}
						{!! Form::text('housenumber', null, array('id' => 'housenumber', 'class' => 'validate', 'required')) !!}
					</div>
				</div>
				<div class="row no-gutter">
					<div class="input-field col s6 m6">
						{!! Form::label('zip', 'Postcode', array('for' => 'zipcode')) !!}
						{!! Form::text('zipcode', null, array('id' => 'zipcode', 'class' => 'validate', 'required', 'maxlength' => '7')) !!}
					</div>
					<div class="input-field col s6 m6">
						{!! Form::label('city', 'Woonplaats', array('for' => 'city')) !!}
						{!! Form::text('city', null, array('id' => 'city', 'class' => 'validate', 'required')) !!}
					</div>
				</div>
				<div class="row no-gutter">
					<div class="input-field col s6 m3">
						{!! Form::label('ph1', 'Telefoonnummer', array('for' => 'phone')) !!}
						{!! Form::text('phonenumber', null, array('id' => 'phone', 'class' => 'validate', 'required', 'maxlength' => '11')) !!}
					</div>
					<div class="input-field col s6 m3">
						{!! Form::label('ph2', 'Mobiele nummer', array('for' => 'phone2')) !!}
						{!! Form::text('phonenumber2', null, array('id' => 'phone2', 'class' => 'validate', 'maxlength' => '11')) !!}
					</div>
					<div class="input-field col s12 m6">
						{!! Form::label('email', 'Email', array('for' => 'email')) !!}
						{!! Form::email('email', null, array('id' => 'email', 'class' => 'validate', 'required')) !!}
					</div>
				</div>
				<div class="row no-gutter">
					<div class="input-field col s12 m12">
						{!! Form::date('birthday', null, array('placeholder' => 'Geboortedatum: 2016-07-12', 'id' => 'brt', 'required', 'class' => 'datepicker')) !!}
					</div>
				</div>
				<input type="hidden" value="9" name="statuses_id">
				<div class="panel-footer">
					<div class="right-align">
						<button type="reset" class="btn-flat waves-effect">
							RESET
						</button>
						{!! Form::submit('Voeg toe', array('class' => 'btn-flat waves-effect')) !!}
					</div>
				</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>



@endsection