<?php

include('db_con.php');
include('Supervisor.php');
/*echo "a href ";*/
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

<h2 align="center">Lecture Options</h2>
<br><br>
<?php 


if (isset($_SESSION['lecturer'])) {

    $lecturer = unserialize($_SESSION['lecturer']);
    $isRequest = $handler->query("SELECT * FROM request WHERE lecturer_id='" . $lecturer->getLecturerId() . "'");
    $row = $isRequest->fetch();
    if (isset($_POST['stu_id'])) {
        $stu_id = $_POST['stu_id'];

        //delete record from the request table
        $deleteRequest = $handler->query("DELETE FROM request WHERE student_id='" . $stu_id . "'");
        //update student table
        $updateStudent = $handler->query("UPDATE student SET Lecturer_id='" . $lecturer->getLecturerId() . "' WHERE Student_id='" . $stu_id . "'");
    }
    if ($row['request_id'] != null) {
        echo "You have following requests from students";
        echo "<form action=lec_option_page.php method=POST>";
        while ($row = $isRequest->fetch()) {
            echo "<input type='hidden' name='stu_id' value='" . $row['student_id'] . "'>";
            echo "<br>" . $row['student_id'] . "<span><input type='submit' value='Accept Request'>";
        }
        echo "</form>";
    }    
    echo "<h2><center>Session Details</h2>";
    echo "<table>";
    echo "<th>Student ID</th>";
    echo "<th>Student Name</th>";
    echo "<th>Session Date</th>";
    echo "<th>Start Time</th>";
    echo "<th>End Time</th>";
    echo "<th>Task To Do</th>";
    echo "<th>Notes</th>";	
    

    //retrieve session details from the session table
    $selectSessions=$handler->query("SELECT * FROM session WHERE lec_id='".$lecturer->getLecturerId()."'");

    while($row=$selectSessions->fetch()){
        echo "<tr>";
        echo "<td>".$row['student_id'];
        $selectStudentName=$handler->query("SELECT Student_Name,Student_surname FROM student where Student_id='".$row['student_id']."'");
        $rowStuName=$selectStudentName->fetch();
        echo "<td>".$rowStuName['Student_Name']." ".$rowStuName['Student_surname'];
        echo "<td>".$row['session_date'];
        echo "<td>".$row['Start_Time'];
        echo "<td>".$row['End_Time'];
        echo "<td>".$row['task_to_do'];
        echo "<td>".$row['notes'];
        echo "</tr>";
    }
    echo "</table>";
     
     echo "<td><a href='home.php'> <center> Go Back </td>";
	 echo "<td><a href='index.php'> <center> Go Home <br><br><br><br></td>";
	 
	 echo "<table>";
    echo "<tr>";
    echo "<td><a href='create_session.php'> <center>Create a new session</td>";
    echo "</tr>";
    echo "</table>";


}
?>

</div>
</body>
</html>