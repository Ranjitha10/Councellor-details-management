<?php
	session_start();
	    if(isset($_SESSION['sess_username']))
    {
	//  include "navigation.php";
    
?> 
 
 
 <html>
  <script type="text/javascript" src="canvasjs.min.js"></script>
 <script type="text/javascript">
  window.onload = function () 
  {
    var chart = new CanvasJS.Chart("chartContainer1",
    {   width:400,
      height:300,
      theme: "theme3",
      animationEnabled: true, // change to false
     
     /* legend: {
       horizontalAlign: "center"  // "center" , "right"
       verticalAlign: "center",  // "top" , "bottom"

     }, */

       axisX:{
       title: "Subject",
       labelMaxWidth: 190,
       gridThickness: 1,
       tickLength: 10
        },

      axisY:{
       title: "Average Marks Scored",
       interlacedColor: "#F8F1E4",
       tickLength: 10
        },

     title:{
        text: "Performance Comparison"              
        },

       data: [       
        {       
       type: "column",
       name: "First Internals",
       showInLegend: true,
       dataPoints: [
     
       { label: "M&OB", y: 22.72 }
       ]
        },

        { 

      type: "column",
      name: "Second Internals", 
      showInLegend: true,               
      dataPoints: [
     
      { label: "M&OB", y: 33.13 }
      ]
        },
        
        { //dataSeries - second quarter

      type: "column",
      name: "Third Internals", 
      showInLegend: true,               
      dataPoints: [
     
      { label: "M&OB", y: 33.47 }
      ]
      }
    ]
  });

    chart.render();





    var chart = new CanvasJS.Chart("chartContainer2",
    {   width:400,
      height:300,
      theme: "theme3",
      animationEnabled: true, // change to false
     
     /* legend: {
       horizontalAlign: "center"  // "center" , "right"
       verticalAlign: "center",  // "top" , "bottom"

     }, */

       axisX:{
       title: "Subject",
       labelMaxWidth: 190,
       gridThickness: 1,
       tickLength: 10
        },

      axisY:{
       title: "Average Marks Scored",
       interlacedColor: "#F8F1E4",
       tickLength: 10
        },

     title:{
        text: "Performance Comparison"              
        },

       data: [       
        {       
       type: "column",
       name: "First Internals",
       showInLegend: true,
       dataPoints: [
     
       { label: "Elective C", y: 27.98 }
       ]
        },

        { 

      type: "column",
      name: "Second Internals", 
      showInLegend: true,               
      dataPoints: [
     
      { label: "Elective C", y: 35.33 }
      ]
        },
        
        { //dataSeries - second quarter

      type: "column",
      name: "Third Internals", 
      showInLegend: true,               
      dataPoints: [
     
      { label: "Elective C", y: 25.59 }
      ]
      }
    ]
  });

    chart.render();





    var chart = new CanvasJS.Chart("chartContainer3",
    {   width:400,
      height:300,
      theme: "theme3",
      animationEnabled: true, // change to false
     
     /* legend: {
       horizontalAlign: "center"  // "center" , "right"
       verticalAlign: "center",  // "top" , "bottom"

     }, */

       axisX:{
       title: "Subject",
       labelMaxWidth: 190,
       gridThickness: 1,
       tickLength: 10
        },

      axisY:{
       title: "Average Marks Scored",
       interlacedColor: "#F8F1E4",
       tickLength: 10
        },

     title:{
        text: "Performance Comparison"              
        },

       data: [       
        {       
       type: "column",
       name: "First Internals",
       showInLegend: true,
       dataPoints: [
     
       { label: "Software Engineering", y: 32.14 }
       ]
        },

        { 

      type: "column",
      name: "Second Internals", 
      showInLegend: true,               
      dataPoints: [
     
      { label: "Software Engineering", y: 15.94 }
      ]
        },
        
        { //dataSeries - second quarter

      type: "column",
      name: "Third Internals", 
      showInLegend: true,               
      dataPoints: [
     
      { label: "Software Engineering", y: 22.7 }
      ]
      }
    ]
  });

    chart.render();




    var chart = new CanvasJS.Chart("chartContainer4",
    {   width:400,
      height:300,
      theme: "theme3",
      animationEnabled: true, // change to false
     
     /* legend: {
       horizontalAlign: "center"  // "center" , "right"
       verticalAlign: "center",  // "top" , "bottom"

     }, */

       axisX:{
       title: "Subject",
       labelMaxWidth: 190,
       gridThickness: 1,
       tickLength: 10
        },

      axisY:{
       title: "Average Marks Scored",
       interlacedColor: "#F8F1E4",
       tickLength: 10
        },

     title:{
        text: "Performance Comparison"              
        },

       data: [       
        {       
       type: "column",
       name: "First Internals",
       showInLegend: true,
       dataPoints: [
     
       { label: "Computer Networks and Security", y: 11.4 }
       ]
        },

        { 

      type: "column",
      name: "Second Internals", 
      showInLegend: true,               
      dataPoints: [
     
      { label: "Computer Networks and Security", y: 29.06 }
      ]
        },
        
        { //dataSeries - second quarter

      type: "column",
      name: "Third Internals", 
      showInLegend: true,               
      dataPoints: [
     
      { label: "Computer Networks and Security", y: 21.33 }
      ]
      }
    ]
  });

    chart.render();






    var chart = new CanvasJS.Chart("chartContainer5",
    {   width:400,
      height:300,
      theme: "theme3",
      animationEnabled: true, // change to false
     
     /* legend: {
       horizontalAlign: "center"  // "center" , "right"
       verticalAlign: "center",  // "top" , "bottom"

     }, */

       axisX:{
       title: "Subject",
       labelMaxWidth: 190,
       gridThickness: 1,
       tickLength: 10
        },

      axisY:{
       title: "Average Marks Scored",
       interlacedColor: "#F8F1E4",
       tickLength: 10
        },

     title:{
        text: "Performance Comparison"              
        },

       data: [       
        {       
       type: "column",
       name: "First Internals",
       showInLegend: true,
       dataPoints: [
     
       { label: "Database Management Systems", y: 21.3 }
       ]
        },

        { 

      type: "column",
      name: "Second Internals", 
      showInLegend: true,               
      dataPoints: [
     
      { label: "Database Management Systems", y: 12.89 }
      ]
        },
        
        { //dataSeries - second quarter

      type: "column",
      name: "Third Internals", 
      showInLegend: true,               
      dataPoints: [
     
      { label: "Database Management Systems", y: 32.01 }
      ]
      }
    ]
  });

    chart.render();




    var chart = new CanvasJS.Chart("chartContainer6",
    {   width:400,
      height:300,
      theme: "theme3",
      animationEnabled: true, // change to false
     
       axisX:{
       title: "Subject",
       labelMaxWidth: 190,
       gridThickness: 1,
       tickLength: 10
        },

      axisY:{
       title: "Average Marks Scored",
       interlacedColor: "#F8F1E4",
       tickLength: 10
        },

     title:{
        text: "Performance Comparison"              
        },

       data: [       
        {       
       type: "column",
       name: "First Internals",
       showInLegend: true,
       dataPoints: [
     
       { label: "Elective D", y: 25.59 }
       ]
        },

        { 

      type: "column",
      name: "Second Internals", 
      showInLegend: true,               
      dataPoints: [
     
      { label: "Elective D", y: 13.13 }
      ]
        },
        
        { //dataSeries - second quarter

      type: "column",
      name: "Third Internals", 
      showInLegend: true,               
      dataPoints: [
     
      { label: "Elective D", y: 27.89 }
      ]
      }
    ]
  });

    chart.render();
  }

  </script>
  <script type="text/javascript" src="/assets/script/canvasjs.min.js"></script>
</head>
<body>


  <div id="chartContainer1" style="height: 300px; width: 450px; float:right"> </div></br>          
  <div id="chartContainer2" style="height: 300px; width: 450px; float:left;"> </div>
  <div id="chartContainer3" style="height: 300px; width: 450px; float:center;"></div></br>
  <div id="chartContainer4" style="height: 300px; width: 450px; float:right;"></div>
  <div id="chartContainer5" style="height: 300px; width: 450px; float:left;"></div>
  <div id="chartContainer6" style="height: 300px; width: 450px; float:center;"></div></br>
</body>
</html>
<?php
}
else
{
	header('location: ../index.php');
}
?>
