<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Email
| -------------------------------------------------------------------------
| This file lets you define parameters for sending emails.
| Please see the user guide for info:
|
|	http://codeigniter.com/user_guide/libraries/email.html
|
*/
$config['mailtype'] = 'html';
$config['charset'] = 'utf-8';
$config['newline'] = "\r\n";
$config['useragent'] = 'CodeIgniter';
$config['protocol'] = 'smtp';
$config['mailpath'] = '/usr/sbin/sendmail -t -i';
$config['smtp_host'] = 'ssl://smtp.googlemail.com';
$config['smtp_user'] = 'enjamath@gmail.com';
$config['smtp_pass'] = 'planedry';
$config['smtp_port'] = 465;
$config['smtp_timeout'] = 5;
$config['wordwrap'] = TRUE;
$config['wrapchars'] = 76;
$config['mailtype'] = 'html';
$config['charset'] = 'utf-8';
$config['validate'] = FALSE;
$config['priority'] = 3;
$config['crlf'] = "\r\n";
$config['newline'] = "\r\n";
$config['bcc_batch_mode'] = FALSE;
$config['bcc_batch_size'] = 200;


/* End of file email.php */
/* Location: ./application/config/email.php */
