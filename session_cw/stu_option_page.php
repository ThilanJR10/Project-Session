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

<h2 align="center">Student Details</h2>
<br><br>
<?php 
if (isset($_SESSION['student'])) {
    $student = unserialize($_SESSION['student']);
    echo "<table>";
    echo "<tr>";
    echo "<td>Student ID <br><br> </td>";
    echo "<td>" . $student->getStudentId() . "<br><br>" . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Student Name <br><br></td>";
    echo "<td>" . $student->getStudentName() . " " . $student->getStudentSurname() . "<br><br>" . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td><br>Supervisor <br><br></td>";
    echo "<td>";
    //$rowLec;
    if (isset($_POST['supervisor'])) {
        //query to select lecturer details
        $selectLecId = $handler->query("SELECT * FROM lecturer WHERE Lecturer_id='" . $_POST['supervisor'] . "'" . "");
        $rowLec = $selectLecId->fetch();
        //query to insert a new lecture request to request table
        $handler->query("INSERT INTO request(student_id,lecturer_id) VALUES ('" . $student->getStudentId() . "','" . $rowLec['Lecturer_id']."')");
        //$handler->query("UPDATE student SET lecturer_id='" . $rowLec['Lecturer_id'] . "' WHERE Student_id='" . $student->getStudentId() . "'");
        //$student->setSupervisor($rowLec['Lecturer_name']);

    } else {
        if ($student->getSupervisor() == null) {
            $query = $handler->query("SELECT lecturer_id FROM request WHERE student_id='" . $student->getStudentId() . "'");
            $result = $query->fetch();
            echo $result['lecturer_id'];
            if ($result['lecturer_id'] != null) {
                echo "Supervisor request is pending to <br> " . $result['lecturer_id'];
            } else {
                $student->selectSupervisor();
            }


        } else {
            $selectLecId = $handler->query("SELECT Lecturer_name FROM lecturer WHERE Lecturer_id='" . $student->getSupervisor() . "'");
            $rowLec = $selectLecId->fetch();
            echo $rowLec['Lecturer_name'];
        }
    }

	echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td> <br><br>Last Session Details <br></td>";
    $lastProject = new ProjectSession();
    $selectLastSession = $handler->query("SELECT * FROM session where student_id='" . $student->getStudentId() . "' ORDER BY End_Time");
    $lastSessionRaw = $selectLastSession->fetch();
    echo "<td>";
    echo "Session date:" . $lastSessionRaw['session_date'] . "<br> <br> Start time:" . $lastSessionRaw['Start_Time'] . "<br><br> End TIme:" . $lastSessionRaw['End_Time'];
    echo "</td>";
	echo "<tr>";
    echo "<td>";
    echo "<a href=all_sessions.php> <br> <br><br><br> <center> View All Sessions </center> ";
    echo "</tr>";
	echo "</td>";
    echo "</tr>";
    echo "</table>";
	echo "<td><br><br><br><a href='home.php'> <center> Go Back </td>";
	 echo "<td><a href='index.php'> <center> Go Home <br><br><br><br></td>";
	 
} else {
    echo "Please login!";
     echo "<td><a href='home.php'>Go Back</td>";
}
?>

</div>
</body>
</html>



