@extends('masterb')

@section('title', 'Dashboard')

@section('extrascript')



@endsection
@section('content')






@if(Auth::user()->role < 2)
<div class="row">
	<div class="col s12 m4">
		<div id="boxSalesPerDay" class="panel panel-stats main lighten-1 white-text z-depth-1">
			<div class="panel-header">
				<div class="title">
					Berichten via de Website
				</div>
				<div class="subtitle">
					<i class="material-icons">schedule</i> Geüpdatet op {{ date("d-m-Y") }}
				</div>
			</div>
			<div class="panel-body">
				<div id="chartdiv" class="chart-wrapper"></div>
				<script type="text/javascript">
					var chartData = <?php echo json_encode($messagesperday1); ?>;

				        var chart = AmCharts.makeChart( "chartdiv", {
				          type: "serial",
				          dataProvider: chartData,
				          pathToImages: "http://www.amcharts.com/lib/images/",
				          categoryField: "amount_messages",
				          dataDateFormat: "YYYY-MM-DD",
				          startDuration: 1,
				          rotate: true,
				          categoryAxis: {
				            parseDates: true
				          }, 
				          graphs:[ {
				            valueField: "date",
				            bullet: "round",
				            bulletBorderColor: "#FFFFFF",
				            bulletBorderThickness: 2,
				            lineThickness: 2,
				            lineAlpha: 0.5
				          } ]
				        } );
				</script>
			</div>
			<div class="panel-footer valign-wrapper">
				<div class="col s6 valign center-align bordered">
					<div class="value">{{count($messagesthismonth)}}</div>
					<div class="description">Deze maand</div>
				</div>

				<div class="col s6 valign center-align">
					<div class="value">	@foreach($messagesperday as $mpd) 
											@if( $mpd->day == date('j'))
												{{$mpd->amount_messages}} 
											@endif 
										@endforeach</div>
					<div class="description">Vandaag</div>
				</div>
			</div>
		</div>
	</div>
</div>
@else

<p> U heeft hier geen toegang toe </p>
<p> hier komen de client dashboards, zoals melding dat intake klaar staat enzo..</p>
@endif
















@endsection