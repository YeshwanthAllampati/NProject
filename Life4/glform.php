<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
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

<?php require_once 'process.php'; ?>
<center>
<br><br>
<h1 style="color:white;">ADD THE DETAILES OF NEW CERTIFICATE COURSE</h1><br><br>
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
  <label>Year</label>
  <select name="year" class="form-control" value="<?php echo $year;?>" id="sel2">
    <option value="1" selected>1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
  </select>
  </div>
  <div class="form-group">
<label>Resource Person</label>
<input type="text" name="resperson" class="form-control" value="<?php echo $resperson; ?>" placeholder="Enter Resource Person">
</div>
<div class="form-group">
<label>Certificate or ADD-ON Course on</label>
<input type="text" name="course" class="form-control" value="<?php echo $course; ?>" placeholder="Enter Topic">
</div>
<div class="form-group">
<label>Organisation</label>
<input type="text" name="org" class="form-control" value="<?php echo $org; ?>" placeholder="Enter Organisation">
</div>

       
    <div class="form-group">
 <label >Starting Date</label>
 <input value="<?php echo $datest; ?>" type="date" name="datest" max="3000-12-31" 
        min="1000-01-01" class="form-control">
</div>
<div class="form-group">
 <label >Ending Date</label>
 <input value="<?php echo $dateend; ?>" type="date" name="dateend" min="1000-01-01"
        max="3000-12-31" class="form-control">
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
</html>