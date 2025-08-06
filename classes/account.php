<?php
class Account
{
    private $account_number;
    private $account_type;
    private $account_balance;
    private $account_status;
    private $account_created_at;
    private $account_updated_at;
    private $account_deleted_by;
    private $account_deleted_reason;
    private $account_deleted_at;
    public function getAccountNumber()
    {
        return $this->account_number;
    }

    public function getAccountType()
    {
        return $this->account_type;
    }

    public function getAccountBalance()
    {
        return $this->account_balance;
    }

    public function getAccountStatus()
    {
        return $this->account_status;
    }

    public function getAccountCreatedAt()
    {
        return $this->account_created_at;
    }

    public function getAccountUpdatedAt()
    {
        return $this->account_updated_at;
    }

    public function getAccountDeletedBy()
    {
        return $this->account_deleted_by;
    }

    public function getAccountDeletedReason()
    {
        return $this->account_deleted_reason;
    }

    public function getAccountDeletedAt()
    {
        return $this->account_deleted_at;
    }


    // Set Account Number
    public function setAccountNumber($account_number)
    {
        $this->account_number = $account_number;
    }

    // Set Account Type
    public function setAccountType($account_type)
    {
        $this->account_type = $account_type;
    }

    // Set Account Balance
    public function setAccountBalance($account_balance)
    {
        $this->account_balance = $account_balance;
    }

    // Set Account Status
    public function setAccountStatus($account_status)
    {
        $this->account_status = $account_status;
    }

    // Set Account Created At
    public function setAccountCreatedAt($account_created_at)
    {
        $this->account_created_at = $account_created_at;
    }

    // Set Account Updated At
    public function setAccountUpdatedAt($account_updated_at)
    {
        $this->account_updated_at = $account_updated_at;
    }

    // Set Account Deleted By
    public function setAccountDeletedBy($account_deleted_by)
    {
        $this->account_deleted_by = $account_deleted_by;
    }

    // Set Account Deleted Reason
    public function setAccountDeletedReason($account_deleted_reason)
    {
        $this->account_deleted_reason = $account_deleted_reason;
    }

    // Set Account Deleted At
    public function setAccountDeletedAt($account_deleted_at)
    {
        $this->account_deleted_at = $account_deleted_at;
    }
};
?>