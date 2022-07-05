<?php

class CIActivityContr extends CIActivities
{
    private $title;
    private $date;
    private $venue;
    private $department;
    private $division;
    private $description;
    private $type;
    private $duration;
    private $supervisor;
    private $cipoints;

    public function __construct($title, $date, $venue, $department, $division, $description, $type, $duration, $supervisor, $cipoints)
    {
        $this->title = $title;
        $this->date = $date;
        $this->venue = $venue;
        $this->department = $department;
        $this->division = $division;
        $this->description = $description;
        $this->type = $type;
        $this->duration = $duration;
        $this->supervisor = $supervisor;
        $this->cipoints = $cipoints;
    }

    public function AddActivities()
    {
        if ($this->isEmpty() == false) {
            header('Location: ../view/Create_activity.php?error=emptyinput');
            exit;
        }

        $this->setActivity($this->title, $this->date, $this->venue, $this->department, $this->division, $this->description, $this->type, $this->duration, $this->supervisor, $this->cipoints);
    }


    private function isEmpty()
    {
        if (empty($this->title) || empty($this->date) || empty($this->venue) || empty($this->department) || empty($this->division) || empty($this->supervisor) || empty($this->description) || empty($this->type) || empty($this->duration) || empty($this->cipoints)) {
            return false;
        }

        return true;
    }
}

class EditActivityContr extends EditActivity
{
    private $id;
    private $title;
    private $date;
    private $venue;
    private $department;
    private $division;
    private $supervisor;
    private $description;
    private $type;
    private $duration;
    private $cipoints;

    public function __construct($id, $title, $date, $venue, $department, $division, $description, $type, $duration, $supervisor, $cipoints)
    {
        $this->id = $id;
        $this->title = $title;
        $this->date = $date;
        $this->venue = $venue;
        $this->department = $department;
        $this->division = $division;
        $this->description = $description;
        $this->type = $type;
        $this->duration = $duration;
        $this->supervisor = $supervisor;
        $this->cipoints = $cipoints;
    }

    public function EditActivity()
    {
        if ($this->isEmpty() == false) {
            header('Location: ../view/CI_activityEdit.php?id=' . $this->id . '&error=emptyinput');
            exit;
        }

        $this->setActivity($this->id, $this->title, $this->date, $this->venue, $this->department, $this->division, $this->description, $this->type, $this->duration, $this->supervisor, $this->cipoints);
    }

    private function isEmpty()
    {
        if (empty($this->title) || empty($this->date) || empty($this->venue) || empty($this->type) || empty($this->duration) || empty($this->supervisor) || empty($this->cipoints)) {
            return false;
        }

        return true;
    }
}
