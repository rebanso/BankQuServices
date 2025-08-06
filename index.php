<?php


if(file_exists(__DIR__ . '/Classes/Account.php')){
    require_once __DIR__ . '/Classes/Account.php';
    $Account = new Account();
};

if(file_exists(__DIR__ . '/Classes/Bank.php')){
    require_once __DIR__ . '/Classes/Bank.php';
    $Bank = new Bank();
};
if(file_exists(__DIR__ . '/Models/User.php')){
    require_once __DIR__ . '/Models/User.php';
    $User = new User();
};