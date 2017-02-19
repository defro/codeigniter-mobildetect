<?php
// CodeIgniter cannot load Library with namespace
//namespace CodeIgniter/MobileDetect;

defined('BASEPATH') OR exit('No direct script access allowed');

class MobileDetect extends \Detection\MobileDetect
{

    public function __construct(array $headers = null, $userAgent = null)
    {
        log_message('info', "MobileDetect Library Class Initialized");

        parent::__construct($headers, $userAgent);
    }

}
