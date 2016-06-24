@extends('masterb')

@section('title', 'Vraag aanmaken')

@section('content')


<div class="row">
    <div class="col s12">
        <div class="page-header">
            <h1>
                <i class="material-icons">pages</i> Intake Vragen
            </h1>

            <p>Hier kunt u vragen en categoriëen aanmaken.</p>
        </div>
    </div>
</div>
<div class="row">
	<div class="col s12 m12">
		<ul class="tabs">
			<li class="tab col s6"><a class="active" href="#addquestion">Vragen Toevoegen</a></li>
			<li class="tab col s6"><a href="#addcategory">Categorie Toevoegen</a></li>
		</ul>
	</div>
	<div id="addquestion" class="col s12 m12">
		<div class="panel panel-bordered">
			<div class="panel-header">
				<div class="title">Voeg een nieuwe vraag toe</div>
				<div class="subtitle">U kunt hier een nieuwe vraag toevoegen en een categorie aan koppelen.</div>
			</div>
			<div class="panel-body">
				{!! Form::open(array('url' => 'question')) !!}
				<input name="_token" type="hidden" id="_token" value="{{ csrf_token() }}" />
				<div class="row no-gutter">
					<div class="input-field col s12 m12">
						{!! Form::label('nm', 'Vraag', array('for' => 'first_name')) !!}
						{!! Form::text('question', null, array('id' => 'first_name', 'class' => 'validate', 'required')) !!}
					</div>
				</div>
				<div class="row no-gutter">
					<div class="input-field col s12 m12">
						<select name="category">
							@foreach($specs as $spec)
							<option value="{{$spec->category}}">{{$spec->category}}</option>
							@endforeach
						</select>
						{!! Form::label('spec', 'Categorie') !!}
					</div>
				</div>
				<input type="hidden" value="intake" name="specification">
				<div class="panel-footer">
					<div class="right-align">
						{!! Form::submit('Voeg toe', array('class' => 'btn-flat waves-effect')) !!}
					</div>
				</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
	<div id="addcategory" class="col s12 m12">
		<div class="panel panel-bordered">
			<div class="panel-header">
					<div class="title">Voeg een nieuwe Catgorie toe</div>
					<div class="subtitle">U kunt hier een nieuwe categorie toevoegen.</div>
			</div>
			<div class="panel-body">
			{!! Form::open(array('url' => 'questions_specification')) !!} <!-- Create script to add category -->
				<input name="_token" type="hidden" id="_token" value="{{ csrf_token() }}" />
				<div class="row no-gutter">
					<div class="input-field col s12 m12">
						{!! Form::label('nm', 'Categorie:', array('for' => 'first_name')) !!}
						{!! Form::text('category', null, array('id' => 'first_name', 'class' => 'validate', 'required')) !!}
					</div>
				</div>
				<div class="panel-footer">
					<div class="right-align">
						{!! Form::submit('Voeg toe', array('class' => 'btn-flat waves-effect')) !!}
					</div>
				</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>




@endsection