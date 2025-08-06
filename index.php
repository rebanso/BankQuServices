<?php

if(file_exists(__DIR__ . '/classes/account.php')){
    require_once __DIR__ . '/classes/account.php';
    $Account = new Account();
}

if(file_exists(__DIR__ . '/classes/bank.php')){
    require_once __DIR__ . '/classes/bank.php';
    $Bank = new Bank();
}

