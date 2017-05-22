<?php
//include db connection file and Student,Lecturer class files
include('db_con.php');
include('Supervisee.php');
include('Supervisor.php');

//Checks login button of login form is set
if (isset($_POST['login'])) {
    $type = $_POST['type'];
    $password;

    if ($type == 'student') {
        //creates student object
        $student = new Supervisee($_POST['Student_ID']);
        $password = $_POST['password'];
        $std_id = $student->getStudentId();

        $query = $handler->query("SELECT * FROM student WHERE Student_id='" . $std_id . "'");
        $row = $query->fetch();
        if($row['Student_id']!=null){
            if ($password == $row['password']) {
                session_start();
                $student->setStudentName($row['Student_Name']);
                $student->setStudentSurname($row['Student_surname']);
                $student->setSupervisor($row['Lecturer_id']);
                $_SESSION['student']=serialize($student);
                header('Location: stu_option_page.php');
            } else {
                echo "Password incorrect";
            }
        }else{
            echo "Username incorrect";
        }
    }else{

        //creates lecturer object
        $lecturer = new Supervisor($_POST['lecturer_Id']);
        $password = $_POST['password'];
        $lec_id = $lecturer->getLecturerId();

        $query = $handler->query("SELECT * FROM lecturer WHERE Lecturer_id='" . $lec_id . "'");
        $row = $query->fetch();
        if($row['Lecturer_id']!=null){
            if ($password == $row['password']) {
                session_start();
                $lecturer->setLecturerName($row['Lecturer_name']);
                $lecturer->setLecturerSurname($row['Lecturer_surname']);
                $lecturer->setLecturerOffice($row['office']);
                $_SESSION['lecturer']=serialize($lecturer);
                header('Location: lec_option_page.php');
            } else {
                echo "Password incorrect";
            }
        }else{
            echo "Username incorrect";
        }
    }
}