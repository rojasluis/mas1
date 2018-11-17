    
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



<?php
include "./usuarios/conexion.php";
$sql0= "select count(*) as c from usuario";
$sql1= "select count(*) as cli from clientes";
$sql2= "select count(*) as d from documento";

$query0 = $con->query($sql0);
$count = $query0->fetch_array();
$npages = $count["c"];

$query1 = $con->query($sql1);
$count1 = $query1->fetch_array();
$npages1 = $count1["cli"];

$query2 = $con->query($sql2);
$count2 = $query2->fetch_array();
$npages2 = $count2["d"];

?>

<div class="row">
&nbsp;
&nbsp;
<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-header">Usuarios</div>
  <div class="card-body">
    <h5 class="card-title">Success card title</h5>
    <p class="card-text"><h4>Cantidad de Usuarios: <?php echo $npages; ?></h4></p>
  </div>
</div>
&nbsp;
&nbsp;
<div class="card text-white bg-success mb-3" style="max-width: 18rem;">
  <div class="card-header">Clientes</div>
  <div class="card-body">
    <h5 class="card-title">Success card title</h5>
    <p class="card-text"><h4>Cantidad de clientes: <?php echo $npages1; ?></h4></p>
  </div>
</div>
&nbsp;
&nbsp;
<div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
  <div class="card-header">Documentos</div>
  <div class="card-body">
    <h5 class="card-title">Success card title</h5>
    <p class="card-text"><h4>Cantidad de documentos: <?php echo $npages2; ?></h4></p>
  </div>
</div>

</div>





<?php
 
 $dataPoints = array(
   array("x"=> 10, "y"=> 41),
   array("x"=> 20, "y"=> 35, "indexLabel"=> "Lowest"),
   array("x"=> 30, "y"=> 50),
   array("x"=> 40, "y"=> 45),
   array("x"=> 50, "y"=> 52),
   array("x"=> 60, "y"=> 68),
   array("x"=> 70, "y"=> 38),
   array("x"=> 80, "y"=> 71, "indexLabel"=> "Highest"),
   array("x"=> 90, "y"=> 52),
   array("x"=> 100, "y"=> 60),
   array("x"=> 110, "y"=> 36),
   array("x"=> 120, "y"=> 49),
   array("x"=> 130, "y"=> 41)
 );
   
 ?>
 <!DOCTYPE HTML>
 <html>
 <head>  
 <script>
 window.onload = function () {
  
 var chart = new CanvasJS.Chart("chartContainer", {
   animationEnabled: true,
   exportEnabled: true,
   theme: "light1", // "light1", "light2", "dark1", "dark2"
   title:{
     text: "Simple Column Chart with Index Labels"
   },
   data: [{
     type: "column", //change type to bar, line, area, pie, etc
     //indexLabel: "{y}", //Shows y value on all Data Points
     indexLabelFontColor: "#5A5757",
     indexLabelPlacement: "outside",   
     dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
   }]
 });
 chart.render();
  
 }
 </script>
 </head>
 <body>
 <div id="chartContainer" style="height: 370px; width: 100%;"></div>
 <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
 </body>
 </html>