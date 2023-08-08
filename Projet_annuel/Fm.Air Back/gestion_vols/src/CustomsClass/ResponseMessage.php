<?php


namespace App\CustomsClass;


Class ResponseMessage
{
    public $Data = [];

    public $Success = true;

    public $message;


    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param mixed $Data
     * @return mixed
     */
    public function setData($Data)
    {
        return $this->Data = $Data;
    }

    /**
     * @param mixed $Success
     */
    public function setSuccess($Success): void
    {
        $this->Success = $Success;
    }

    /**
     * @return mixed
     */
    public function getSuccess()
    {
        return $this->Success;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message): void
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }
}