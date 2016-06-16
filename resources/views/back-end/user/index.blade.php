@extends('masterb')

@section('title', 'Gebruikers')

@section('content')

@if (session('status'))
<div class="card-panel green accent-4">
    {{ session('status') }}<!--<strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert user</a>.-->
</div>
@endif
<div class="row">
    <div class="col s12">
        <div class="page-header">
            <h3 class="main-text lighten-1">Gebruikers</h3>
        </div>
    </div>
</div>

<div class="row"> 
	<div class="col s12 m6">
		<h5 class="main-text lighten-1">Nieuwe Gebruikers</h5>
		<table class="highlight">
			<thead>
				<tr>
					<th data-field="id">Naam</th>
					<th data-field="name">Email</th>
					<th data-field="date">Aangemaakt op</th>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $user)
					@if($user->customer_id == 0)
					<tr>
						<td><a href="/user/{{ $user->id }}">{{ $user->name }}</a></td>
						<td><a href="/user/{{ $user->id }}">{{ $user->email }}</a></td>
						<td><a href="/user/{{ $user->id }}">{{  $user->created_at }}</a></td>
					</tr>
					@endif
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="col s12 m6">
		<h5 class="main-text lighten-1">Gebruikers al toegekend aan Cliënten</h5>
		<table class="highlight">
			<thead>
				<tr>
					<th data-field="id">Naam</th>
					<th data-field="name">Email</th>
					<th data-field="date">aangemaakt op</th>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $user)
					@if($user->customer_id != 0)
					<tr>
						<td><a href="/user/{{ $user->id }}">{{ $user->name }}</a></td>
						<td><a href="/user/{{ $user->id }}">{{ $user->email }}</a></td>
						<td><a href="/user/{{ $user->id }}">{{ $user->created_at }}</a></td>
					</tr>
					@endif
					@endforeach
			</tbody>
		</table>
	</div>
</div>









@endsection