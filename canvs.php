<!DOCTYPE HTML>
<html>
<head>  
<script type="text/javascript">
window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer",
    {
      title:{
        text: "Simple Date-Time Chart"
    },
    axisX:{
        title: "timeline",
        gridThickness: 2
    },
    axisY: {
        title: "Downloads"
    },
    data: [
    {        
        type: "area",
        dataPoints: [//array
        { x: new Date(2012, 01, 1), y: 26},
        { x: new Date(2012, 01, 3), y: 38},
        { x: new Date(2012, 01, 5), y: 43},
        { x: new Date(2012, 01, 7), y: 29},
        { x: new Date(2012, 01, 11), y: 41},
        { x: new Date(2012, 01, 13), y: 54},
        { x: new Date(2012, 01, 20), y: 66},
        { x: new Date(2012, 01, 21), y: 60},
        { x: new Date(2012, 01, 25), y: 53},
        { x: new Date(2012, 01, 27), y: 60}

        ]
    }
    ]
});

    chart.render();
}
  </script>
<script type="text/javascript" src="js/canvasjs.min.js"></script>
</head>
<body>
<div id="chartContainer" style="height: 300px; max-width: 920px; margin: 0px auto;">
</div>
</body>
</html>