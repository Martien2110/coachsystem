@extends('masterb')

@section('title', 'Intake vragen')

@section('content')

@if (session('status'))
<div class="card-panel green accent-4">
    {{ session('status') }}<!--<strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.-->
</div>
@endif
<div class="row">
    <div class="col s12">
        <div class="page-header">
            <h1>
                <i class="material-icons">pages</i> Intake Vragen
            </h1>

            <p>Overzicht van alle Intake vragen die de Cliënt krijgt, gegroepeerd op categorie vragen.</p>
        </div>
    </div>
</div>
<div class="row">
	<div class="col s12 m6">
		<h5 class="main-text lighten-1">Groep: NAW - Gegevens</h5>
		<table class="datatable bordered">
			<thead>
				<tr>
					<th>Vraag</th>
					<th>Onderwerp</th>
					<th class="center-align" data-searchable="false" data-orderable="false">Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach($questions as $question)
				@if($question->category == 'NAW - Gegevens')
				<tr>
					<td>{{$question->question}}</td>
					<td>{{$question->category}}</td>
					<td class="center-align">
						<div class="btn-group">
							{!! Form::open(array('url' => 'intake/'.$question->id, 'method' => 'delete')) !!}
							<a href="intake/{{$question->id}}/edit" class="btn-flat btn-small waves-effect">
								<i class="material-icons">create</i>
							</a>
							<button class="btn-flat btn-small waves-effect btnDelete">
								<i class="material-icons">delete</i>
							</button>
							{!! Form::close() !!}
						</div>
					</td>
				</tr>
				@endif
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="col s12 m6">
		<h5 class="main-text lighten-1">Groep: Partner</h5>
		<table class="datatable bordered">
			<thead>
				<tr>
					<th>Vraag</th>
					<th>Onderwerp</th>
					<th class="center-align" data-searchable="false" data-orderable="false">Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach($questions as $question)
				@if($question->category == 'Als u een Partner heeft')
				<tr>
					<td>{{$question->question}}</td>
					<td>{{$question->category}}</td>
					<td class="center-align">
						<div class="btn-group">
							{!! Form::open(array('url' => 'intake/'.$question->id, 'method' => 'delete')) !!}
							<a href="intake/{{$question->id}}/edit" class="btn-flat btn-small waves-effect">
								<i class="material-icons">create</i>
							</a>
							<button class="btn-flat btn-small waves-effect btnDelete">
								<i class="material-icons">delete</i>
							</button>
							{!! Form::close() !!}
						</div>
					</td>
				</tr>
				@endif
				@endforeach
			</tbody>
		</table>
	</div>
</div>









@endsection