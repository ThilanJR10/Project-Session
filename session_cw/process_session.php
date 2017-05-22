<?php
include("db_con.php");
include('Supervisor.php');
include('ProjectSession.php');

session_start();
if (isset($_SESSION['lecturer'])) {
    //initialize variables
    $lecturer = unserialize($_SESSION['lecturer']);
    $lec_id = $lecturer->getLecturerId();
    $stu_id = $_POST['stu_id'];
    $stu_first_name = $_POST['stu_first_name'];
    $stu_last_name = $_POST['stu_last_name'];
    $notes = $_POST['notes'];
    $session = new ProjectSession();
    $session->setSessionDate($_POST['session_date']);
    $session->setStartTime($_POST['start_time']);
    $session->setEndTime($_POST['end_time']);
    $session->setTaskToDo($_POST['task_to_do']);
    echo $session->getSessionDate()."<br>";
    echo $session->getStartTIme()."<br>";
    echo $session->getEndTIme()."<br>";
    echo $stu_id."<br>";
    echo $lec_id;
    //Insert data into session table
    try{
        $sql="INSERT INTO session(Start_Time,End_Time,session_date,student_id,lec_id,task_to_do,notes) VALUES ('" . $session->getStartTime() . "','" .
            $session->getEndTime() . "','".$session->getSessionDate()."','".$stu_id."','".$lec_id."','".$session->getTaskToDo()."','".$notes."')";
        echo "<br>".$sql."<br>";
        $update = $handler->query($sql);
        $handler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        if($handler){
            header('Location: lec_option_page.php');
        }
    }catch (PDOException $e){
        echo $e->getMessage();
    }

}else{
    echo "PLease login!";
}