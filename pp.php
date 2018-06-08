<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
	.navbar{
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
  <a href="admin.php">Faculty/Admissions</a>>
  <a href="students.php">Students</a>
  <a href="news.php">News</a>
  <a href="index.php">Home</a>
    </div> 
</nav>
<?php 
  $Student_Name=0;
  $Index=0;
  $Maths=0;
  $Eng=0;
  $Art=0;
  $Geo=0;
  $French=0;
  $Total_Sum="";
    
   $Student_Name=$_POST['Student_Name'];
   $Index=$_POST['Index'];
  $Maths=$_POST['Maths'];
  $Eng=$_POST['Eng'];
  $Art=$_POST['Art'];
  $Geo=$_POST['Geo'];
  $French=$_POST['French'];

  $sum=($Maths+$Eng+$Art+$Geo+$French);
    $average=$sum/5;
   
   echo "<br>";
   echo "Maths";
   echo "<br>";
   echo "$Maths";
  if ($Maths<=30) {
   echo "D";
    }
   elseif ($Maths<=50) {
   echo "C";
   }
   elseif ($Maths<=70) {
   	echo "B";
   }
   	elseif ($Maths<=100) {
   	echo "A";
   	}
   	echo "<br>";
   	echo "Eng";
   	echo "<br>";
   	echo "$Eng";
  if ($Eng<=30) {
   echo "D";
    }
   elseif ($Eng<=50) {
   echo "C";
   }
   elseif ($Eng<=70) {
   	echo "B";
   }
   	elseif ($Eng<=100) {
   	echo "A";
   	}

    echo "<br>";
   	echo "Art";
   	echo "<br>";
   	echo "$Art";
  if ($Art<=30) {
   echo "D";
    }
   elseif ($Art<=50) {
   echo "C";
   }
   elseif ($Art<=70) {
   	echo "B";
   }
   	elseif ($Art<=100) {
   	echo "A";
   	}

   	echo "<br>";
   	echo "Geo";
   	echo "<br>";
   	echo "$Geo";
  if ($Geo<=30) {
   echo "D";
    }
   elseif ($Geo<=50) {
   echo "C";
   }
   elseif ($Geo<=70) {
   	echo "B";
   }
   	elseif ($Geo<=100) {
   	echo "A";
   	}

   	echo "<br>";
   	echo "French";
   	echo "<br>";
   	echo "$French";
  if ($French<=30) {
   echo "D";
    }
   elseif ($French<=50) {
   echo "C";
   }
   elseif ($French<=70) {
   	echo "B";
   }
   	elseif ($French<=100) {
   	echo "A";
   	}
   	 echo "<table border='2px'>
    <tr>
   <th>Student_Name</th>
   <th>Index</th>
   <th>Maths</th>
   <th>English</th>
   <th>Art</th>
   <th>Geography</th>
   <th>French</th>
   <th>Total_Sum</th>

   </tr>
   <tr>
    <th>$Student_Name</th>
    <th>$Index</th>
    <th>$Maths</th>
    <th>$Eng</th>
    <th>$Art</th>
    <th>$Geo</th>
    <th>$French</th>
    <th>$Total_Sum</th>
     </tr>
    </table>";
     echo "Your average is " .$average;
 ?>