<?php

class ProjectSession
{
    private $session_no;
    private $session_date;
    private $start_time;
    private $end_time;
    private $task_to_do;


    /**
     * @return mixed
     */
    public function getSessionNo()
    {
        return $this->session_no;
    }

    /**
     * @param mixed $session_no
     */
    public function setSessionNo($session_no)
    {
        $this->session_no = $session_no;
    }

    /**
     * @return mixed
     */
    public function getSessionDate()
    {
        return $this->session_date;
    }

    /**
     * @param mixed $session_date
     */
    public function setSessionDate($session_date)
    {
        $this->session_date = $session_date;
    }

    /**
     * @return mixed
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    /**
     * @param mixed $start_time
     */
    public function setStartTime($start_time)
    {
        $this->start_time = $start_time;
    }

    /**
     * @return mixed
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    /**
     * @param mixed $end_time
     */
    public function setEndTime($end_time)
    {
        $this->end_time = $end_time;
    }

    /**
     * @return mixed
     */
    public function getTaskToDo()
    {
        return $this->task_no_do;
    }

    /**
     * @param mixed $task_no_do
     */
    public function setTaskToDo($task_to_do)
    {
        $this->task_no_do = $task_to_do;
    }

    function addTask()
    {

    }

    function editTime()
    {

    }
}

?>