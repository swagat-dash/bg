//[Dashboard Javascript]

//Project:	Aries Admin - Responsive Admin Template
//Last change:  25/11/2017
//Primary use:   Used only for the main dashboard (index.html)


$(function () {

  'use strict';

  // Make the dashboard widgets sortable Using jquery UI
  $('.connectedSortable').sortable({
    placeholder         : 'sort-highlight',
    connectWith         : '.connectedSortable',
    handle              : '.box-header, .nav-tabs',
    forcePlaceholderSize: true,
    zIndex              : 999999
  });
  $('.connectedSortable .box-header, .connectedSortable .nav-tabs-custom').css('cursor', 'move');

  // jQuery UI sortable for the todo list
  $('.todo-list').sortable({
    placeholder         : 'sort-highlight',
    handle              : '.handle',
    forcePlaceholderSize: true,
    zIndex              : 999999
  });

  // bootstrap WYSIHTML5 - text editor
  $('.textarea').wysihtml5();

  $('.daterange').daterangepicker({
    ranges   : {
      'Today'       : [moment(), moment()],
      'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
      'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
      'Last 30 Days': [moment().subtract(29, 'days'), moment()],
      'This Month'  : [moment().startOf('month'), moment().endOf('month')],
      'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
    },
    startDate: moment().subtract(29, 'days'),
    endDate  : moment()
  }, function (start, end) {
    window.alert('You chose: ' + start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
  });


  // SLIMSCROLL FOR CHAT WIDGET
  $('#direct-chat').slimScroll({
    height: '300px'
  });
	
		
// donut chart
		$('.donut').peity('donut');

// chart
	$("#linechart").sparkline([1,4,3,7,6,4,8,9,6,8,12], {
			type: 'line',
			width: '100',
			height: '38',
			lineColor: '#06d79c',
			fillColor: '#272c33',
			lineWidth: 2,
			minSpotColor: '#0fc491',
			maxSpotColor: '#0fc491',
		});
		
		$("#barchart").sparkline([1,4,3,7,6,4,8,9,6,8,12], {
			type: 'bar',
			height: '38',
			barWidth: 6,
			barSpacing: 4,
			barColor: '#e9ab2e',
		});
		$("#discretechart").sparkline([1,4,3,7,6,4,8,9,6,8,12], {
			type: 'discrete',
			width: '50',
			height: '38',
			lineColor: '#745af2',
		});
//--------------
		//- AREA CHART -
		//--------------

 // Get context with jQuery - using jQuery's .get() method.
		var areaChartCanvas = $('#areaChart').get(0).getContext('2d')
		// This will get the first returned node in the jQuery collection.
		var areaChart       = new Chart(areaChartCanvas)

		var areaChartData = {
		  labels  : ['0', '4', '8', '12', '16', '20', '24', '30', '16', '20', '24', '30', '34', '38', '42', '46', '50', '54'],
		  datasets: [
			{
			  label               : 'Electronics',
			  fillColor           : 'rgba(30,172,190,0.3)',
			  strokeColor         : 'rgba(30,172,190,0)',
			  pointColor          : 'rgba(30,172,190,0.5)',
			  pointStrokeColor    : '#1eacbe',
			  pointHighlightFill  : '#fff',
			  pointHighlightStroke: 'rgba(30,172,190,1)',
			  data                : [14, 4, 6, 17, 5, 10, 14, 15, 14, 17, 29, 26, 30, 16, 37, 31, 44, 52]
			},
			{
			  label               : 'Digital Goods',
			  fillColor           : 'rgba(38,198,218,0.7)',
			  strokeColor         : 'rgba(38,198,218,0)',
			  pointColor          : '#06d79c',
			  pointStrokeColor    : 'rgba(38,198,218,0.5)',
			  pointHighlightFill  : '#fff',
			  pointHighlightStroke: 'rgba(38,198,218,1)',
			  data                : [8, 3, 4, 14, 13, 5, 17, 24, 24, 45, 27, 20, 28, 13, 34, 48, 31, 50]
			}
		  ]
		}

		var areaChartOptions = {
		  //Boolean - If we should show the scale at all
		  showScale               : true,
		  //Boolean - Whether grid lines are shown across the chart
		  scaleShowGridLines      : true,
		  //String - Colour of the grid lines
		  scaleGridLineColor      : 'rgba(0,0,0,.05)',
		  //Number - Width of the grid lines
		  scaleGridLineWidth      : 1,
		  //Boolean - Whether to show horizontal lines (except X axis)
		  scaleShowHorizontalLines: true,
		  //Boolean - Whether to show vertical lines (except Y axis)
		  scaleShowVerticalLines  : true,
		  //Boolean - Whether the line is curved between points
		  bezierCurve             : true,
		  //Number - Tension of the bezier curve between points
		  bezierCurveTension      : 0.5,
		  //Boolean - Whether to show a dot for each point
		  pointDot                : true,
		  //Number - Radius of each point dot in pixels
		  pointDotRadius          : 1,
		  //Number - Pixel width of point dot stroke
		  pointDotStrokeWidth     : 1,
		  //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
		  pointHitDetectionRadius : 20,
		  //Boolean - Whether to show a stroke for datasets
		  datasetStroke           : true,
		  //Number - Pixel width of dataset stroke
		  datasetStrokeWidth      : 0,
		  //Boolean - Whether to fill the dataset with a color
		  datasetFill             : true,
		  //String - A legend template
		  legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].lineColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
		  //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
		  maintainAspectRatio     : true,
		  //Boolean - whether to make the chart responsive to window resizing
		  responsive              : true
		};
		
		//Create the line chart
		areaChart.Line(areaChartData, areaChartOptions);


}); // End of use strict
