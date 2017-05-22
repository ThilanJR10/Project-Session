<?php
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

<h2 align="center">Create Session</h2>
<br>
<?php 

if(isset($_SESSION['lecturer'])){

    echo "<form action='process_session.php' method='post'>";
    echo "<h3>Please enter following details<h3>";
    echo "<table>";
    echo "<tr>";
    echo "<td>Supervisor's full name</td>";
    echo "<td><input type='text' name='supervisor_name'></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Student Id</td>";
    echo "<td><input type='text' name='stu_id'> ";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Student First name</td>";
    echo "<td><input type='text' name='stu_first_name'></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Student Last name</td>";
    echo "<td><input type='text' name='stu_last_name'></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Session Date</td>";
    echo "<td><input type='date' name='session_date'></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Start Time</td>";
    echo "<td><input type='time' name='start_time'></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>End Time</td>";
    echo "<td><input type='time' name='end_time'></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Task To Do</td>";
    echo "<td><input type='text' name='task_to_do'></td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Notes</td>";
    echo "<td><input type='text' name='notes'></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td><input type='submit' value='Save session'>";
    echo "</tr>";
    echo "</table>";
    echo "</form>";
}else{
    echo "Please login!";
}
echo "<tr>";
    echo "<td><input type='submit' value='Add Details Automatically'>";
    echo "</tr>";
?>
<br><br>
<a href=lec_option_page.php><center> Back </center> <a href=index.php><center> Home  </center> </a>


</div>
</body>
</html>