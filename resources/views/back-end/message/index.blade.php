@extends('masterb')

@section('title', 'Berichten')

@section('content')

<div class="row">
    <div class="col s12">
        <div class="page-header">
            <h3 class="main-text lighten-1">Ontvangen berichten via de website</h3>
        </div>
    </div>
</div>

<section id="tables_basic">
	<div class="row"> 
		<div class="col s12 m4">
			<h5 class="main-text lighten-1">Nieuwe Berichten</h5>
			<table class="highlight">
				<thead>
					<tr>
						<th data-field="id">Naam</th>
						<th data-field="name">Email</th>
						<th data-field="price">Ontvangen op</th>
					</tr>
				</thead>
				<tbody>
					@foreach($messages as $message)
					@if($message->status_id==1)
						<tr>
							<td><a href="/message/{{ $message->id }}">{{ $message->name }}</a></td>
							<td><a href="/message/{{ $message->id }}">{{ $message->email }}</a></td>
							<td><a href="/message/{{ $message->id }}">{{ $message->date }}</a></td>
						</tr>
						@endif
						@endforeach
				</tbody>
			</table>
		</div>
		<div class="col s12 m4">
			<h5 class="main-text lighten-1">Berichten In de wacht</h5>
			<table class="highlight">
				<thead>
					<tr>
						<th data-field="id">Naam</th>
						<th data-field="name">Email</th>
						<th data-field="price">Ontvangen op</th>
					</tr>
				</thead>
				<tbody>
					@foreach($messages as $message)
					@if($message->status_id==2)
						<tr>
							<td><a href="/message/{{ $message->id }}">{{ $message->name }}</a></td>
							<td><a href="/message/{{ $message->id }}">{{ $message->email }}</a></td>
							<td><a href="/message/{{ $message->id }}">{{ $message->date }}</a></td>
						</tr>
						@endif
						@endforeach
				</tbody>
			</table>
		</div>
		<div class="col s12 m4">
			<h5 class="main-text lighten-1">Berichten in Behandeling</h5>
			<table class="highlight">
				<thead>
					<tr>
						<th data-field="id">Naam</th>
						<th data-field="name">Email</th>
						<th data-field="price">Ontvangen op</th>
					</tr>
				</thead>
				<tbody>
					@foreach($messages as $message)
					@if($message->status_id==3)
						<tr>
							<td><a href="/message/{{ $message->id }}">{{ $message->name }}</a></td>
							<td><a href="/message/{{ $message->id }}">{{ $message->email }}</a></td>
							<td><a href="/message/{{ $message->id }}">{{ $message->date }}</a></td>
						</tr>
						@endif
						@endforeach
				</tbody>
			</table>
		</div>
	</div>
</section>



@endsection