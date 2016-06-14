@extends('masterb')

@section('title', 'Berichten')

@section('content')

<div class="row">
    <div class="col s12">
            <h3 class="main-text lighten-1">Ontvangen Berichten via de Website</h3>
    </div>
</div>

<div class="row">
	<div class="col s12">
		<h4 class="main-text lighten-1">Berichten</h4>
		<table class="highligt">
			<thead>
				<tr>
					<th data-field="id">Naam</th>
					<th data-field="name">Email</th>
					<th data-field="price">Ontvangen op</th>
				</tr>
			</thead>
			<tbody>
				@foreach($messages as $message)
					<tr>
						<td><a href="/message/{{ $message->id }}">{{ $message->name }}</a></td>
						<td><a href="/message/{{ $message->id }}">{{ $message->email }}</a></td>
						<td><a href="/message/{{ $message->id }}">{{ $message->date }}</a></td>
					</tr>
					@endforeach
			</tbody>
		</table>
	</div>
</div>





@endsection