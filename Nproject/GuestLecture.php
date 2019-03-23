<!DOCTYPE html>
<html>
<body>

<h2>Guest Lecture</h2>

<form action="localhost/Nproject/eventadd.php" method=post>
<input name="eid" type="text" value="101" hidden>
  Choose Department:
  <select name="branch">
    <option value="CSE" selected>CSE</option>
    <option value="ECE">ECE</option>
    <option value="EEE">EEE</option>
    <option value="MEC">MEC</option>
    <option value="CIV">CIV</option>
    <option value="FED">FED</option>
  </select>
  <br><br>
  Year:<br>
  <input type="text" name="year" value="">
  <br>
  Topic<br>
  <input type="text" name="topic" value="">
  <br><br>
  Organisation<br>
  <input type="text" name="org" value="">
  <br><br>
  Remarks<br>
  <textarea name="remarks" rows="10" columns="30">Write Here</textarea>
  <br><br>
  <input type="submit" value="Submit">
</form> 


</body>
</html>
