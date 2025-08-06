<?php
class User
{
    public ?string $first_name = null;
    public ?string $last_name = null;
    public ?string $phone = null;
    public ?string $address = null;
    public ?string $city = null;
    public ?string $state = null;
    public ?string $zip = null;
    public ?string $country = null;
    public ?string $gender = null;
    public ?string $date_of_birth = null;
    public ?string $marital_status = null;
    public ?string $nationality = null;
    public ?string $religion = null;
    public ?string $occupation = null;
    public ?string $income = null;
    public ?string $education = null;
    public ?string $email = null;
    public ?string $password = null;
    public ?string $created_at = null;
    public ?string $updated_at = null;
    public ?string $deleted_at = null;
    public ?string $deleted_by = null;
    public ?string $deleted_reason = null;

    // Set Properties
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
    public function setAddress($address)
    {
        $this->address = $address;
    }
    public function setCity($city)
    {
        $this->city = $city;
    }
    public function setState($state)
    {
        $this->state = $state;
    }
    public function setZip($zip)
    {
        $this->zip = $zip;
    }
    public function setCountry($country)
    {
        $this->country = $country;
    }
    public function setGender($gender)
    {
        $this->gender = $gender;
    }
    public function setDateOfBirth($date_of_birth)
    {
        $this->date_of_birth = $date_of_birth;
    }
    public function setMaritalStatus($marital_status)
    {
        $this->marital_status = $marital_status;
    }
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;
    }
    public function setReligion($religion)
    {
        $this->religion = $religion;
    }
    public function setOccupation($occupation)
    {
        $this->occupation = $occupation;
    }
    public function setIncome($income)
    {
        $this->income = $income;
    }
    public function setEducation($education)
    {
        $this->education = $education;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
    }
    public function setDeletedAt($deleted_at)
    {
        $this->deleted_at = $deleted_at;
    }
    public function setDeletedBy($deleted_by)
    {
        $this->deleted_by = $deleted_by;
    }
    public function setDeletedReason($deleted_reason)
    {
        $this->deleted_reason = $deleted_reason;
    }

    // Get Properties
    public function getFirstName()
    {
        return $this->first_name;
    }
    public function getLastName()
    {
        return $this->last_name;
    }
    public function getPhone()
    {
        return $this->phone;
    }
    public function getAddress()
    {
        return $this->address;
    }
    public function getCity()
    {
        return $this->city;
    }
    public function getState()
    {
        return $this->state;
    }
    public function getZip()
    {
        return $this->zip;
    }
    public function getCountry()
    {
        return $this->country;
    }
    public function getGender()
    {
        return $this->gender;
    }
    public function getDateOfBirth()
    {
        return $this->date_of_birth;
    }
    public function getMaritalStatus()
    {
        return $this->marital_status;
    }
    public function getNationality()
    {
        return $this->nationality;
    }
    public function getReligion()
    {
        return $this->religion;
    }
    public function getOccupation()
    {
        return $this->occupation;
    }
    public function getIncome()
    {
        return $this->income;
    }
    public function getEducation()
    {
        return $this->education;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getCreatedAt()
    {
        return $this->created_at;
    }
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
    public function getDeletedAt()
    {
        return $this->deleted_at;
    }
    public function getDeletedBy()
    {
        return $this->deleted_by;
    }
    public function getDeletedReason()
    {
        return $this->deleted_reason;
    }
    public function getFullDetails()
    {
        return json_encode([
            "firstname: " => $this->first_name,
            "lastname: " => $this->last_name,
            "phone: " => $this->phone,
            "address: " => $this->address,
            "city: " => $this->city,
            "state: " => $this->state,
            "zip: " => $this->zip,
            "country: " => $this->country,
            "gender: " => $this->gender,
            "date_of_birth: " => $this->date_of_birth,
            "marital_status: " => $this->marital_status,
            "nationality: " => $this->nationality,
            "religion: " => $this->religion,
            "occupation: " => $this->occupation,
            "income: " => $this->income,
            "education: " => $this->education,
            "email: " => $this->email,
            "password: " => $this->password,
            "created_at: " => $this->created_at,
            "updated_at: " => $this->updated_at,
            "deleted_at: " => $this->deleted_at,
            "deleted_by: " => $this->deleted_by,
            "deleted_reason: " => $this->deleted_reason,
        ], JSON_OBJECT_AS_ARRAY);
    }
}
