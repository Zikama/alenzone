<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| EMAIL CONFING
| -------------------------------------------------------------------
| Configuration of outgoing mail server.
| */
$config = array(
    'protocol'  => get_settings('protocol'),
    'smtp_host' => get_settings('smtp_host'),
    'smtp_port' => get_settings('smtp_port'),
    'smtp_user' => get_settings('smtp_user'),
    'smtp_pass' => get_settings('smtp_pass'),
    'mailtype'  => 'html',
    'charset'   => 'utf-8'
);

/* End of file email.php */
/* Location: ./system/application/config/email.php */
