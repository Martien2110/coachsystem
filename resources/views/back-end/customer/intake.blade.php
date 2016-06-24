@extends('masterb')

@section('title', 'Intake Invullen')

@section('content')
@if(is_object($intake))
	@if($intake->customer_id == Auth::user()->customer_id)
		@if($intake->visible = 1)


		<div class="row">
		    <div class="col s12">
		        <div class="page-header">
		            <h1>
		                <i class="material-icons">pages</i> Intake
		            </h1>

		            <p>Let wel op, de gehele vragenlijst moet in een keer afgenomen worden en kan niet tussentijds opgeslagen worden.
		            	Het zal ongeveer een half uur tot een uur duren.</p>
		        </div>
		    </div>
		</div>
		{!! Form::open(array('url' => 'intake')) !!}
		<input name="_token" type="hidden" id="_token" value="{{ csrf_token() }}" />
		<div id="addquestion" class="col s12 m12">
		<div class="panel panel-bordered">
			<div class="panel-header">
				<div class="title">Uw Intake</div>
				<div class="subtitle">Vul de antwoorden naar waarheid in. Als u niets in wilt/kan vullen, vult u 'nvt' in.</div>
			</div>
			<div class="panel-body">
		@foreach($intakequestions as $intakequestion)
			@foreach($questions as $question)
				@if($intakequestion->questions_id == $question->id )
				<div class="row no-gutter">
					<div class="input-field col s12 m12">
						{!! Form::label('lb', $question->question, array('for' => 'first_name')) !!}
						{!! Form::text('answers[]', null, array('id' => 'first_name', 'class' => 'validate', 'required')) !!}
					</div>
					<input type="hidden" name="questions[]" value="{{$question->id}}">
				</div>
				@endif
			@endforeach
		@endforeach
			<input type="hidden" name="intakes_id" value="{{$intake->id}}"
			</div>
			<div class="panel-footer">
				<div class="right-align">
					{!! Form::submit('Stuur Intake op', array('class' => 'btn-flat waves-effect')) !!}
				</div>
			</div>
		{!! Form::close() !!}
		</div>
		@elseif($intake->visible = 2)
		<p> U heeft de intake al afgenomen. Hoort deze wel klaar te staan, neem dan contact op met de coach.</p>
		@endif
	@else

	<p> Hier hoort u niet te zijn, navigeer terug middels de navigatiebalk</p>


	@endif
@else
<p> Er staat nog geen intake klaar, hoort deze wel klaar te staan, neem dan contact op met uw coach.</p>
@endif


@endsection