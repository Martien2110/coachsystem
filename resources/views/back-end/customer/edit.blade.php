@extends('masterb')

@section('title', 'Cliënt Toevoegen')

@section('content')

<div class="row">
    <div class="col s12">
        <div class="page-header">
            <h3 class="main-text lighten-1">Cliënt wijzigen</h3>
        </div>
    </div>
</div>	

<div class="row">
	<div class="col s12 m12">
		<div class="panel panel-bordered">
			<div class="panel-header">
				<div class="title">Cliënt Wijzigen</div>
				<div class="subtitle">Vul hieronder de gegevens van uw Cliënt in</div>
			</div>
			<div class="panel-body">
				{!! Form::open(array('url' => 'customer/'.$customer->id, 'method' => 'put')) !!}
				<input name="_token" type="hidden" id="_token" value="{{ csrf_token() }}" />
				<div class="row no-gutter">
					<div class="input-field col s8 m4">
						{!! Form::label('nm', 'Naam', array('for' => 'first_name')) !!}
						{!! Form::text('name', $customer->name, array('id' => 'first_name', 'class' => 'validate', 'required')) !!}
					</div>
					<div class="input-field col s4 m2">
						{!! Form::label('lnp', 'Tusenvoegsel', array('for' => 'lm_prefix')) !!}
						{!! Form::text('lm_prefix', $customer->lm_prefix, array('id' => 'lm_prefix', 'class' => 'validate')) !!}
					</div>
					<div class="input-field col s12 m6">
						{!! Form::label('lnm', 'Achternaam', array('for' => 'last')) !!}
						{!! Form::text('lastname', $customer->lastname, array('id' => 'last', 'class' => 'validate', 'required')) !!}
					</div>
				</div>
				<div class="row no-gutter">
					<div class="input-field col s8 m10">
						{!! Form::label('strt', 'Straat', array('for' => 'address')) !!}
						{!! Form::text('address', $customer->address, array('id' => 'address', 'class' => 'validate', 'required')) !!}
					</div>
					<div class="input-field col s4 m2">
						{!! Form::label('hsn', 'Nummer', array('for' => 'housenumber')) !!}
						{!! Form::text('housenumber', $customer->housenumber, array('id' => 'housenumber', 'class' => 'validate', 'required')) !!}
					</div>
				</div>
				<div class="row no-gutter">
					<div class="input-field col s6 m6">
						{!! Form::label('zip', 'Postcode', array('for' => 'zipcode')) !!}
						{!! Form::text('zipcode', $customer->zipcode, array('id' => 'zipcode', 'class' => 'validate', 'required', 'maxlength' => '7')) !!}
					</div>
					<div class="input-field col s6 m6">
						{!! Form::label('city', 'Woonplaats', array('for' => 'city')) !!}
						{!! Form::text('city', $customer->city, array('id' => 'city', 'class' => 'validate', 'required')) !!}
					</div>
				</div>
				<div class="row no-gutter">
					<div class="input-field col s6 m3">
						{!! Form::label('ph1', 'Telefoonnummer', array('for' => 'phone')) !!}
						{!! Form::text('phonenumber', $customer->phonenumber, array('id' => 'phone', 'class' => 'validate', 'required', 'maxlength' => '11')) !!}
					</div>
					<div class="input-field col s6 m3">
						{!! Form::label('ph2', 'Mobiele nummer', array('for' => 'phone2')) !!}
						{!! Form::text('phonenumber2', $customer->phonenumber2, array('id' => 'phone2', 'class' => 'validate', 'maxlength' => '11')) !!}
					</div>
					<div class="input-field col s12 m6">
						{!! Form::label('email', 'Email', array('for' => 'email')) !!}
						{!! Form::email('email', $customer->email, array('id' => 'email', 'class' => 'validate', 'required')) !!}
					</div>
				</div>
				<div class="row no-gutter">
					<div class="input-field col s12 m12">
						{!! Form::date('birthday', $customer->birthday, array('placeholder' => 'Geboortedatum: 2016-07-12', 'id' => 'brt', 'required', 'class' => 'datepicker')) !!}
					</div>
				</div>
				<div class="panel-footer">
					<div class="right-align">
						<button type="reset" class="btn-flat waves-effect">
							RESET
						</button>
						{!! Form::submit('Wijzig Cliënt', array('class' => 'btn-flat waves-effect')) !!}
					</div>
				</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>



@endsection