@extends('masterb')

@section('title', 'Cliënten')

@section('content')

@if (session('status'))
<div class="card-panel green accent-4">
    {{ session('status') }}<!--<strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.-->
</div>
@endif

<div class="row">
    <div class="col s12">
        <div class="page-header">
            <h3 class="main-text lighten-1">Overzicht Cliënten</h3>
        </div>
    </div>
</div>


@if(empty($customers))

<div class="row">
	<div class="col s12 m6">
		<div class="card-panel indigo darken-3">
    		Er zijn nog geen Cliënten, <a href="/customer/create">Klik hier</a> om er een aan te maken.
		</div>
			<a href="customer/create" class="waves-effect waves-light btn">Voeg Toe</a>
	


@else

<div class="row">
	<div class="col s12 m6">
		<h5 class="main-text lighten-1">Cliënten wachtend op Intake</h5>
		<table class="bordered">
			<thead>
				<tr>
					<th data-field="naam">Naam</th>
					<th data-field="phoneemail">Contactgegevens</th>
					<th data-field="status">Status</th>
				</tr>
			</thead>
			<tbody>
				@foreach($customers as $customer)
					@if($customer->statuses_id <= 10 && $customer->statuses_id > 8)
					<tr>
						<td><a href="/customer/{{ $customer->id }}">{{ $customer->name }} {{ $customer->lm_prefix }} {{ $customer->lastname }}</a></td>
						<td><a href="/customer/{{ $customer->id }}"> {{ $customer->phonenumber }}  {{ ' - '.$customer->phonenumber2 }},
																	<br> {{ $customer->email }}</a></td>
						<td><a href="/customer/{{ $customer->id }}">@foreach($statuses as $status) 
																		@if($status->id == $customer->statuses_id)
																			{{ $status->description }}
																		@endif
																	@endforeach</a></td>
					</tr>
					@endif
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="col s12 m6">
		<h5 class="main-text lighten-1">Intake nog verwerken van Cliënt</h5>
		<table class="bordered">
			<thead>
				<tr>
					<th data-field="naam">Naam</th>
					<th data-field="phoneemail">Contactgegevens</th>
					<th data-field="status">Status</th>
				</tr>
			</thead>
			<tbody>
				@foreach($customers as $customer)
						@if($customer->statuses_id==11 || $customer->statuses_id == 12)
						<tr>
							<td><a href="/customer/{{ $customer->id }}">{{ $customer->name }} {{ $customer->lm_prefix }} {{ $customer->lastname }}</a></td>
							<td><a href="/customer/{{ $customer->id }}"> {{ $customer->phonenumber }}  {{ ' - '.$customer->phonenumber2 }},
																		<br> {{ $customer->email }}</a></td>
							<td><a href="/customer/{{ $customer->id }}">@foreach($statuses as $status) 
																			@if($status->id == $customer->statuses_id)
																				{{ $status->description }}
																			@endif
																		@endforeach</a></td>
						</tr>
						@endif
					@endforeach
			</tbody>
		</table>
	</div>
</div>
<div class="row">
	<div class="col s12 m6">
		<h5 class="main-text lighten-1">Cliënt wachtend op afspraak</h5>
		<table class="bordered">
			<thead>
				<tr>
					<th data-field="naam">Naam</th>
					<th data-field="phoneemail">Contactgegevens</th>
					<th data-field="status">Status</th>
				</tr>
			</thead>
			<tbody>
				@foreach($customers as $customer)
					@if($customer->statuses_id==14 || $customer->statuses_id == 15  || $customer->statuses_id == 13)
					<tr>
						<td><a href="/customer/{{ $customer->id }}">{{ $customer->name }} {{ $customer->lm_prefix }} {{ $customer->lastname }}</a></td>
						<td><a href="/customer/{{ $customer->id }}"> {{ $customer->phonenumber }}  {{ ' - '.$customer->phonenumber2 }},
																	<br> {{ $customer->email }}</a></td>
						<td><a href="/customer/{{ $customer->id }}">@foreach($statuses as $status) 
																		@if($status->id == $customer->statuses_id)
																			{{ $status->description }}
																		@endif
																	@endforeach</a></td>
					</tr>
					@endif
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="col s12 m6">
		<h5 class="main-text lighten-1">Cliënten nog te factureren</h5>
		<table class="bordered">
			<thead>
				<tr>
					<th data-field="naam">Naam</th>
					<th data-field="phoneemail">Contactgegevens</th>
					<th data-field="status">Status</th>
				</tr>
			</thead>
			<tbody>
				@foreach($customers as $customer)
						@if($customer->statuses_id==16)
						<tr>
							<td><a href="/customer/{{ $customer->id }}">{{ $customer->name }} {{ $customer->lm_prefix }} {{ $customer->lastname }}</a></td>
							<td><a href="/customer/{{ $customer->id }}"> {{ $customer->phonenumber }}  {{ ' - '.$customer->phonenumber2 }},
																		<br> {{ $customer->email }}</a></td>
							<td><a href="/customer/{{ $customer->id }}">@foreach($statuses as $status) 
																			@if($status->id == $customer->statuses_id)
																				{{ $status->description }}
																			@endif
																		@endforeach</a></td>
						</tr>
						@endif
					@endforeach
			</tbody>
		</table>
	</div>
</div>


@endif

@endsection