<?php
namespace Model;

class Shift extends Model
{
    public function getShifts()
    {
        return $this->query("SELECT * FROM shift");
    }

    public function getDetails($day = "monday")
    {
        return $this->query("SELECT * FROM shift WHERE day ='$day' ")[0]; // Return the first element from the query result (array)
    }

    public function updateDetails($day = "monday", $startTime = "09:00", $endTime = "18:00", $breakDuration = "60")
    {
        return $this->execute("UPDATE `shift` SET `start_time` = '". $startTime ."', `end_time` = '". $endTime ."', `break_duration` = '". $breakDuration ."' where `day` = '". $day."'");
    }
}

?>