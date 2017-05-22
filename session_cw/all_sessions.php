<?php
include('db_con.php');
include('Supervisee.php');
include('ProjectSession.php');
session_start();
?>

<html>
<head>
<meta charset="utf-8">
<br><br>
<link rel="stylesheet" href="css/styles.css" />
</head>
<body>
<div class="form">

<h2 align="center">All sessions</h2>
<br><br>
<?php 

if (isset($_SESSION['student'])) {
    $student = unserialize($_SESSION['student']);
    $selectAllSessions = $handler->query("SELECT * from session WHERE student_id='" . $student->getStudentId() . "'");

    echo "<table>";
    echo "<th> Date<br><br><br></th>"; 
    echo "<th> Start TIme<br><br><br></th>";
    echo "<th>  End Time<br><br><br></th>";
     echo "<th> Task to do <br><br><br></th>";
     echo "<th> Notes <br><br><br> </th>";
	 echo "";
    while ($row=$selectAllSessions->fetch()) {
		echo "<tr>";
        echo "<td>";
		echo "&nbsp;&nbsp;&nbsp;&nbsp;" . $row['session_date']. "&nbsp;&nbsp;&nbsp;&nbsp;";
        echo "</td>";
        echo "<td>";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row['Start_Time']. "&nbsp;&nbsp;&nbsp;";
        echo "</td>";
        echo "<td>";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row['End_Time']. "&nbsp;&nbsp;&nbsp;";
        echo "</td>";
          echo "<td>";
	    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row['task_to_do'] . "&nbsp;&nbsp;&nbsp;&nbsp;";
        echo "</td>";
         echo "<td>";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row['notes'] . "&nbsp;&nbsp;&nbsp;";
        echo "</td>";

        echo "</tr>";
    }


    echo "</table>";
	echo "<td><br><br><br><a href='home.php'> <center> Go Back </td>";
	 echo "<td><a href='index.php'> <center> Go Home <br><br><br><br></td>";
	 
} else {
    echo "Please Log in!";
}
?>

</div>
</body>
</html>