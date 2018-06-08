<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		.navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
    float: right;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
  
	</style>
</head>
<body>
	<h1>Tenri Schools</h1>
	<nav>
		<h2>Offial webpage</h2>
   <div class="navbar">
  <a href="admin.php">Faculty/Admissions</a>
  <a href="" class="active">Students</a>
  <a href="news.php">News</a>
  <a href="index.php">Home</a>
    </div> 
</nav><br>
<fieldset>
    <h2>Student's Portal</h2><br>
   <form action="pp.php" method="POST">
    <label>Student_Name</label><br>
    <input type="text" name="Student_Name"><br>
    <label>Index</label><br>
    <input type="text" name="Index"><br>
    Maths<br>
    <input type="text" name="Maths" maxlength="3"><br>
    Eng<br>
    <input type="text" name="Eng" maxlength="3"><br>
    Art<br>
    <input type="text" name="Art" maxlength="3"><br>
    Geography<br>
    <input type="text" name="Geo" maxlength="3"><br>
    French<br>
    <input type="text" name="French" maxlength="3"><br><br>
    <input type="submit" name="submit" ><br>
</form>
 </fieldset>
</body>
</html>