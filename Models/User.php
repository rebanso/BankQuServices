<?php 
class User{
    public string $first_name;
    public string $last_name;
    public string $phone;
    public string $address;
    public string $city;
    public string $state;
    public string $zip;
    public string $country;
    public string $gender;
    public string $date_of_birth;
    public string $marital_status;
    public string $nationality;
    public string $religion;
    public string $occupation;
    public string $income;
    public string $education;
    public string $email;
    public string $password;
    public string $created_at;
    public string $updated_at;
    public string $deleted_at;
    public string $deleted_by;
    public string $deleted_reason;
    
    // Set Properties
    public function setFirstName($first_name){
        $this->first_name = $first_name;
    }
    public function setLastName($last_name){
        $this->last_name = $last_name;
    }
    public function setPhone($phone){
        $this->phone = $phone;
    }
    public function setAddress($address){
        $this->address = $address;
    }
    public function setCity($city){
        $this->city = $city;
    }
    public function setState($state){
        $this->state = $state;
    }
    public function setZip($zip){
        $this->zip = $zip;
    }
    public function setCountry($country){
        $this->country = $country;
    }
    public function setGender($gender){
        $this->gender = $gender;
    }
    public function setDateOfBirth($date_of_birth){
        $this->date_of_birth = $date_of_birth;
    }
    public function setMaritalStatus($marital_status){
        $this->marital_status = $marital_status;
    }
    public function setNationality($nationality){
        $this->nationality = $nationality;
    }
    public function setReligion($religion){
        $this->religion = $religion;
    }
    public function setOccupation($occupation){
        $this->occupation = $occupation;
    }
    public function setIncome($income){
        $this->income = $income;
    }
    public function setEducation($education){
        $this->education = $education;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setPassword($password){
        $this->password = $password;
    }
    public function setCreatedAt($created_at){
        $this->created_at = $created_at;
    }
    public function setUpdatedAt($updated_at){
        $this->updated_at = $updated_at;
    }
    public function setDeletedAt($deleted_at){
        $this->deleted_at = $deleted_at;
    }
    public function setDeletedBy($deleted_by){
        $this->deleted_by = $deleted_by;
    }
    public function setDeletedReason($deleted_reason){
        $this->deleted_reason = $deleted_reason;
    }

    // Get Properties
    public function getFirstName(){
        return $this->first_name;
    }
    public function getLastName(){
        return $this->last_name;
    }
    public function getPhone(){
        return $this->phone;
    }
    public function getAddress(){
        return $this->address;
    }
    public function getCity(){
        return $this->city;
    }
    public function getState(){
        return $this->state;
    }
    public function getZip(){
        return $this->zip;
    }
    public function getCountry(){
        return $this->country;
    }
    public function getGender(){
        return $this->gender;
    }
    public function getDateOfBirth(){
        return $this->date_of_birth;
    }   
    public function getMaritalStatus(){
        return $this->marital_status;
    }
    public function getNationality(){
        return $this->nationality;
    }
    public function getReligion(){
        return $this->religion;
    }
    public function getOccupation(){
        return $this->occupation;
    }
    public function getIncome(){
        return $this->income;
    }
    public function getEducation(){
        return $this->education;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getCreatedAt(){
        return $this->created_at;
    }
    public function getUpdatedAt(){
        return $this->updated_at;
    }
    public function getDeletedAt(){
        return $this->deleted_at;
    }
    public function getDeletedBy(){
        return $this->deleted_by;
    }
    public function getDeletedReason(){
        return $this->deleted_reason;
    }
}
?>