@extends('masterb')

@section('title', 'Intake Invullen')

@section('content')
@if(is_object($intake))
	@if($intake->customer_id == Auth::user()->customer_id)
		@if($intake->visible = 1)

		<p> Er staat een intake klaar.</p>








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