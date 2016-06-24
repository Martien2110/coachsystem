<!-- Hier verder gaan -->
@extends('masterb')

@section('title', 'Verwerk Intake')

@section('content')

<div class="row">
    <div class="col s12 m12">
        <div class="page-header">
            <h1>
                <i class="material-icons">pages</i> Deze Intake is afgenomen op {{$intake->date}}, bij {{$customer->name}} {{$customer->lm_prefix}} {{$customer->lastname}}
            </h1>

            <p>Hier kunt u de antwoorden bekijken van de Cliënt en in het grote notitievlak kunt u aantekeningen maken, een globale plan van aanpak opstellen en meer.</p>
        </div>
    </div>
</div>
<div class="row">
	<div class="col s12 m6">
		<div class="panel panel-bordered">
			<div class="panel-header">
				<div class="title">Cliënt Intake</div>
				<div class="subtitle">Hieronder alle vragen met het antwoord.</div>
			</div>
			<div class="panel-body">
				<table class="datatable bordered">
					@foreach($answers as $answer)
						@foreach($questions as $question)
							@if($answer->questions_id == $question->id)
								<tr>
									<td>{{$question->question}}</td>
									<td> {{$answer->answer}}</td>
								</tr>
							@endif
						@endforeach
					@endforeach
				</table>
			</div>
		</div>
	</div>
	<div class="col s12 m6">
		<div class="panel panel-bordered">
			<div class="panel-header">
				<div class="title">Aantekeningen</div>
				<div class="subtitle">Vul hieronder de aantekeningen voor uw Cliënt in</div>
			</div>
			<div class="panel-body">
					{!! Form::open(array('url' => 'comment/'.$comment->id, 'method' => 'put')) !!}
					<input name="_token" type="hidden" id="_token" value="{{ csrf_token() }}" />
					<div class="row no-gutter">
						<div class="input-field col s12 m12">
							<label for="comment">Aantekening:</label>
							{!! Form::textarea('description', $comment->description, array('class' => 'materialize-textarea', 'placeholder' => 'Vul hier uw aantekeningen in.')) !!}
						</div>
						<input type="hidden" name="intakes_id" value="{{ $intake->id }}"/>
						<input type="hidden" name="customers_id" value="{{$customer->id}}"/>
						<input type="hidden" name="date" value="{{ date('Y-m-d')}}" />
					</div>
					<div class="row no-gutter">
						<div class="right-align">
							<button class="btn waves-effect waves-light" type="submit" >
								Voeg toe aan Dossier
								<i class="material-icons right">send</i>
							</button>
						</div>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection