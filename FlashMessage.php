<?php namespace ModernPUG\FlashMessage;

class FlashMessage
{
    private $message;

    public function __construct()
    {
        if(isset($_SESSION['flash']) && $_SESSION['flash']){
            $this->setMessage($_SESSION['flash']);
        }
    }

    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function getMessage()
    {
        $message = $this->message;
        $this->clearFlashMessage();

        return $message;
    }

    public function clearFlashMessage()
    {
        $this->message = '';
        $_SESSION['flash'] = '';
    }

    public function exist()
    {
        return $this->message ? true : false;
    }
}