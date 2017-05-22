<?php


class Supervisee
{

    private $student_id;
    private $student_name;
    private $student_surname;
    private $supervisor;

    /**
     * Supervisee constructor.
     * @param $student_id
     */
    public function __construct($student_id)
    {
        $this->student_id = $student_id;
    }


    /**
     * @return mixed
     */
    public function getStudentId()
    {
        return $this->student_id;
    }

    /**
     * @param mixed $student_id
     */
    public function setStudentId($student_id)
    {
        $this->student_id = $student_id;
    }

    /**
     * @return mixed
     */
    public function getStudentName()
    {
        return $this->student_name;
    }

    /**
     * @param mixed $student_name
     */
    public function setStudentName($student_name)
    {
        $this->student_name = $student_name;
    }

    /**
     * @return mixed
     */
    public function getStudentSurname()
    {
        return $this->student_surname;
    }

    /**
     * @param mixed $student_surname
     */
    public function setStudentSurname($student_surname)
    {
        $this->student_surname = $student_surname;
    }

    /**
     * @return mixed
     */
    public function getSupervisor()
    {
        return $this->supervisor;
    }

    /**
     * @param mixed $supervisor
     */
    public function setSupervisor($supervisor)
    {
        $this->supervisor = $supervisor;
    }


    //Select Supervisor function
    function selectSupervisor()
    {
        include('db_con.php');
        echo "<form action='stu_option_page.php' method='post'>";
        $query = $handler->query("SELECT Lecturer_name,Lecturer_id FROM lecturer");
        echo "<select name=supervisor onchange=this.form.submit()>";
        echo "<option>Select a lecturer</option>";
        while ($row = $query->fetch()) {
            echo "<option value=" . $row['Lecturer_id'] . ">" . $row['Lecturer_name'] . "</option>";
        }
        echo "</select>";
        echo "</form>";
    }
}

?>