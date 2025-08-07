<?php
$files = ["/Models/User.php", "/Classes/Account.php", "/Classes/Bank.php"];
$list = [];
foreach ($files as $index => $file) {
    if (file_exists(__DIR__ . $file)) {
        $list[] = __DIR__ . $file;
        require_once($list[$index]);
    }
}

$Account = new Account();

// SET ACCOUNT PROPERTIES
$Account->setAccountNumber(true);
$Account->setAccountType('N');
$Account->setAccountBalance(0);
$Account->setAccountStatus('active');
$Account->setAccountCreatedAt(date('h:i:s'));
$Account->setAccountUpdatedAt(date('h:i:s'));
$Account->setAccountDeletedBy('manager');
$Account->setAccountDeletedReason('-');
$Account->setAccountDeletedAt('-');
// SHOW ALL DETAILS
echo $Account->getFullDetails();
