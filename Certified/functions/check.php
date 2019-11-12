<?php
 
require_once 'init.php';
 
if (!isLoggedIn())
{
    header('Location: https://ibcmed.com/Certificados');
}