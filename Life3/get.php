<!DOCTYPE html>
<html>
<head>
<title>ChartJS - BarGrapgh</title>

<style type="text/css">

#chart-container
{

width: 640px;
height: auto;

}

</style>


</head>
<body>

<center>
<form action="get.php" method="post" class="ajax">
  <div class="form-group">
  <label for="selgraph">Choose the Type of Graph</label>
  <select class="form-control" name="choice" id="sel1">
    <option>BarGraph</option>
    <option>PieGraph</option>
    <option>LineGraph</option>
    <option>DoughnutGraph</option>
  </select>
</div>
<br>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</center>
<br><br><br><br>
<center>
<div id="chart-container">
	<canvas id="mycanvas"></canvas>

</div>
</center>

<script type="text/javascript" src="js/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

<script type="text/javascript" src="js/new.js"></script>

</body>


</html>