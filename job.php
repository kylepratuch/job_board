<?php
class JobOpening
{
    private $title;
    private $description;
    private $contact;

    function __contruct($job_title, $job_description, $job_contact)
    {
        $this->title = $job_title;
        $this->description = $job_description;
        $this->contact = $job_contact;
    }

    function getTitle()
    {
        return $this->title;
    }
    function getDescription()
    {
        return $this->description;
    }
    function getContact()
    {
        return $this->contact;
    }

    function setTitle($title)
    {
        $this->title = $title;
    }
    function setDescription($description)
    {
        $this->description = $description;
    }
    function setContact($contact)
    {
        $this->contact = $contact;
    }
}
?>
