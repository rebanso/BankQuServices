<?php

class Bank{

    // Properties
    public $name;
    public $balance;
    public $account_number;
    public $account_type;
    /**
     * FALSE [0] FOR NEW ACCOUNT REGISTRATION AND TRUE [1] FOR LOGIN.
     * /
     * @var bool
     */
    public bool $account_permission = true;
    public $interest_rate;
    public $account_status;
    public $account_created_at;
    public $account_updated_at;
    public $account_deleted_by;
    public $account_deleted_reason;
    public $account_deleted_at;


    public function get_name()
    {
        return $this->name;
    }

    public function get_balance()
    {
        return $this->balance;
    }

    public function get_account_number()
    {
        return $this->account_number;
    }

    public function get_account_type()
    {
        return $this->account_type;
    }

    public function get_interest_rate()
    {
        return $this->interest_rate;
    }

    public function get_account_status()
    {
        return $this->account_status;
    }

    public function get_account_created_at()
    {
        return $this->account_created_at;
    }

    public function get_account_updated_at()
    {
        return $this->account_updated_at;
    }

    public function get_account_deleted_by()
    {
        return $this->account_deleted_by;
    }

    public function get_account_deleted_reason()
    {
        return $this->account_deleted_reason;
    }

    public function get_account_deleted_at()
    {
        return $this->account_deleted_at;
    }

    // Set Properties
    public function setName($name){
        $this->name = $name;
    }
    public function setBalance($balance){
        $this->balance = $balance;
    }
    public function setAccountNumber($account_number){
        $this->account_number = $account_number;
    }
    public function setAccountType($account_type){
        $this->account_type = $account_type;
    }
    public function setInterestRate($interest_rate){
        $this->interest_rate = $interest_rate;
    }
    public function setAccountStatus($account_status){
        $this->account_status = $account_status;
    }
    public function setAccountCreatedAt($account_created_at){
        $this->account_created_at = $account_created_at;
    }
    public function setAccountUpdatedAt($account_updated_at){
        $this->account_updated_at = $account_updated_at;
    }
    public function setAccountDeletedBy($account_deleted_by){
        $this->account_deleted_by = $account_deleted_by;
    }
    public function setAccountDeletedReason($account_deleted_reason){
        $this->account_deleted_reason = $account_deleted_reason;
    }
    public function setAccountDeletedAt($account_deleted_at){
        $this->account_deleted_at = $account_deleted_at;
    }
    public function setAccountPermission($account_permission){
        $this->account_permission = $account_permission;
    }
    public function getAccountPermission($account_permission){
        $this->account_permission = $account_permission;
    }
};