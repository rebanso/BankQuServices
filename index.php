<?php
if (file_exists(__DIR__ . '/Models/User.php')) {
    require_once __DIR__ . '/Models/User.php';
    $User = new User();
};

if (file_exists(__DIR__ . '/Classes/Account.php')) {
    require_once __DIR__ . '/Classes/Account.php';
    $Account = new Account();
};

if (file_exists(__DIR__ . '/Classes/Bank.php')) {
    require_once __DIR__ . '/Classes/Bank.php';
    $Bank = new Bank();
};


// SET TIMEZONE TO PARIS
date_default_timezone_set('Europe/Paris');
// Create a new user
$User = new User();
$User->first_name = 'Rebanso';
$User->last_name = 'Chau';
$User->phone = '15402270769';
$User->address = 'US, Dan.. street, 90396';
$User->city = 'La';
$User->state = 'LondawnRoad';
$User->zip = "72";
$User->country = 'USA';
$User->gender = 'male';
$User->date_of_birth = "-";
$User->marital_status = "Married";
$User->nationality = "US";
$User->occupation = "-";
$User->religion = "-";
$User->income = "-";
$User->education = "P.h.D";
$User->email = 'rebansochau@gmail.com';
$User->password = hash('sha256', "Admin");
$User->created_at = date("h:i:s A");
$User->updated_at = date("h:i:s A");
$User->deleted_at = date("2025/3/15");
$User->deleted_by = "Natalie Retando Veilo";
$User->deleted_reason = "The account has been suspended!";
// SHOW USER DETAILS AS JSON
print_r($User->getFullDetails());
