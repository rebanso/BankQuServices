<?php

class Bank
{

    // Properties
    public $name;
    public $balance;
    public $account_number;
    public $account_type;
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
};