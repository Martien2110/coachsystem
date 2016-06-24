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

	</div>
	<div class="col s12 m6">

	</div>
</div>

@endsection