<!DOCTYPE html>
<html lang="en">
<head>
  <title>GuestLectures</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/tut.js"></script>
<link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Quicksand">
<style>
body {
	font-family:Quicksand, sans-serif;
  background: #007bff;
  background: linear-gradient(to right, #0062E6, #33AEFF);
}
</style>
</head>
<body>
<?php require_once 'process.php'; ?>
<center>
<br><br>
<h1 style="color:white;">ADD THE DETAILES OF NEW FACULTY MEETING</h1><br><br>
</center>
<div class="container" style="background-color:yellow;">


<div class="row justify-content-center">
<form action="process.php" method="POST">
<input type="hidden" name="id" value="<?php echo $id; ?>">
<div class="form-group">
<label>Department</label>
<input type="text" name="dept" class="form-control" value="<?php echo $_SESSION['dept']; ?>" placeholder="">
</div>
  <div class="form-group">
<label>Meeting with</label>
<input type="text" name="meetwith" class="form-control" value="<?php echo $meetwith; ?>" placeholder="Enter Meeting with">
</div>
<div class="form-group">
<label>Agenda</label>
<input type="text" name="agenda" class="form-control" value="<?php echo $agenda; ?>" placeholder="Enter Agenda">
</div>
    <div class="form-group">
 <label >Date</label>
 <input value="<?php echo $date; ?>" type="date" name="date" max="3000-12-31" 
        min="1000-01-01" class="form-control">
</div>
 <div class="form-group">
 <label >Time Started</label>
 <input value="<?php echo $timestart; ?>" type="time" name="timestart" 
         class="form-control">
</div>
<div class="form-group">
 <label >Time Ended</label>
 <input value="<?php echo $timeend; ?>" type="time" name="timeend" 
         class="form-control">
</div>


 <div class="form-group">
  <label>Is Minutes Recorded?</label>
  <select name="isminrec" class="form-control" value="<?php echo $isminrec;?>" id="sel2">
    <option value="Y" selected>Y</option>
    <option value="N">N</option>
   
  </select>
  </div>      


<div class="form-group">
  <label>Remarks</label>
  <textarea name="remarks" class="form-control" rows="5" ><?php echo $remarks; ?></textarea>
</div>
<input name="evcode" type="hidden" value="101">
<div class="form-group">

<?php
if($update==true):
?>
<button type="submit" class="btn btn-info" name="update">UPDATE</button>
<?php else: ?>
<button type="submit" class="btn btn-primary" name="save">SAVE</button>
<?php endif; ?>
</div>

</form>
</div>

</div>

</body>
</html>