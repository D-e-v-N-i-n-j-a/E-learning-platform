<?php

namespace App\Services;

class FlashMessageService
{
    public function setMessage($type, $message)
    {
        session()->flash($type, $message);
    }

    public function getMessage($type)
    {
        return session($type);
    }
}
