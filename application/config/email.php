<?php

//Custom email configuration file to send from google (Saves bandwidth). Send emails back to private server. 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['protocol'] = 'smtp';

$config['smtp_host'] = 'ssl://smtp.googlemail.com';

$config['smtp_port'] = 465;

$config['smtp_user'] = 'twitspare@gmail.com';

$config['smtp_pass'] = 'sunboy118';
