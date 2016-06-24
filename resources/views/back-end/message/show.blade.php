@extends('masterb')

@section('title', 'Bericht')

@section('content')


<div class="row">
    <div class="col s12">
            <h3 class="main-text lighten-1">Bericht van {{ $message->name }}</h3>
    </div>
</div>
<div class="row">
	<div class="col s12 m12">
		<div class="col s12 m6">
			<div class="panel panel-bordered">
				<div class="panel-header">
					<div class="title">Ontvangen Bericht</div>
					<div class="subtitle">Bericht ontvangen op {{ $message->date }}</div>
				</div>
				<div class="panel-body">
					<div class="row no-gutter">
						<div class="input-field col s12">
						<label for="first_name">Van:</label>
						<input disabled value="{{$message->name}}" id="name" type="text" class="validate">
						</div>
					</div>
					<div class="row no-gutter">
						<div class="input-field col s12">
						<label for="email">Email:</label>
						<input disabled value="{{$message->email}}" id="email" type="text" class="validate">
						</div>
					</div>
					<div class="row no-gutter">
						<div class="input-field col s12">
						<label for="email">Bericht:</label>
						<textarea disabled  id="message" class="materialize-textarea">{{ $message->message }}</textarea>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col s12 m6">
			<div class="panel panel-bordered">
				<div class="panel-header">
					<div class="title">Opmerkingen</div>
					<div class="subtitle">Hier kunt u opmerkingen plaatsen als het bericht nog in behandeling is.</div>
				</div>
				<div class="panel-body">
				{!! Form::open(array('url' => 'message/'.$message->id, 'method' => 'put', 'class' => 'form-horizontal')) !!}
					<input name="_token" type="hidden" id="_token" value="{{ csrf_token() }}" />
					<div class="row no-gutter">
						<div class="input-field col s12">

							{!! Form::select('status_id', $statuses, null, array('class'=>'form-control', 'required')) !!}
							
							<label>Status</label>
						</div>
					</div>
					<div class="row no-gutter">
						<div class="input-field col s12">
							<label for="comment">Opmerking:</label>
							{!! Form::textarea('comment', $message->comment, array('class' => 'materialize-textarea', 'placeholder' => 'Gewenst format: Datum: Opmerking')) !!}
						</div>
					</div>
					<div class="row no-gutter">
						<div class="right-align">
							<button class="btn waves-effect waves-light" type="submit" name="action">
								Submit
								<i class="material-icons right">send</i>
							</button>
						</div>
					</div>
				{{Form::close() }}
				</div>
			</div>
		</div>
	</div>
</div>


@endsection