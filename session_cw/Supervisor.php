<?php
class Supervisor{
    private $lecturer_name;
    private $lecturer_surname;
    private $lecturer_office;
    private $lecturer_id;

    /**
     * Supervisor constructor.
     * @param $lectuer_id
     */
    public function __construct($lecturer_id)
    {
        $this->lecturer_id = $lecturer_id;
    }


    /**
     * @return mixed
     */
    public function getLecturerId()
    {
        return $this->lecturer_id;
    }

    /**
     * @param mixed $lectuer_id
     */
    public function setLecturerId($lecturer_id)
    {
        $this->lectuer_id = $lecturer_id;
    }


    /**
     * @return mixed
     */
    public function getLecturerName()
    {
        return $this->lecturer_name;
    }

    /**
     * @param mixed $lecturer_name
     */
    public function setLecturerName($lecturer_name)
    {
        $this->lecturer_name = $lecturer_name;
    }

    /**
     * @return mixed
     */
    public function getLecturerSurname()
    {
        return $this->lecturer_sername;
    }

    /**
     * @param mixed $lecturer_sername
     */
    public function setLecturerSurname($lecturer_surname)
    {
        $this->lecturer_sername = $lecturer_surname;
    }

    /**
     * @return mixed
     */
    public function getLecturerOffice()
    {
        return $this->lecturer_office;
    }

    /**
     * @param mixed $lecturer_office
     */
    public function setLecturerOffice($lecturer_office)
    {
        $this->lecturer_office = $lecturer_office;
    }

}
?>