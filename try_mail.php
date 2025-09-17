<?php
require_once 'ClassAutoLoad.php';

$mailCnt = [
    'name_from' => 'ICS Community',
    'email_from' => 'no-reply@icscommunity.com',
    'name_to' => 'Austin Maina',
    'email_to' => 'austinndiangui@gmail.com',
    'subject' => 'Welcome to ICS Community C',
    'body' => 'This is a new semester. <br> Let\'s make the most of it </br>'
];



$objSendMail->Send_Mail($conf, $mailCnt);