<?php

namespace Its\Example\Dashboard\Core\Application\Service\AddUsers;

class AddUsersResponse
{
    protected $message;
    protected $error;

    public function __construct($message = NULL, $error = NULL)
    {
        $this->message = $message;
        $this->error = $error;
    }

    public function getError()
    {
        return $this->error;
    }

    public function getMessage()
    {
        return $this->message;
    }
}