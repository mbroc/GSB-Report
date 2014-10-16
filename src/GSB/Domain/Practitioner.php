<?php
namespace GSB\Domain;

class Practitioner {
    /**
     * Practitioner id.
     *
     * @var integer
     */
    private $id;
    /**
     * Practitioner name.
     *
     * @var string
     */
    private $name;
    /**
     * Practitioner firstName.
     *
     * @var string
     */
    private $firstName;
    /**
     * Practitioner address.
     *
     * @var string
     */
    private $address;
    /**
     * Practitioner city.
     *
     * @var string
     */
    private $zipCode;
    /**
     * Practitioner city.
     *
     * @var string
     */
    private $city;
    /**
     * Practitioner address.
     *
     * @var double
     */
    private $notorietyCoefficient;
    /**
     * Practitioner type.
     *
     * @var \GSB\Domaine\PractitionerType
     */
    private $type;
    
    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
    }
    
    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        $this->name = $name;
    }
    
    public function getFirstName() {
        return $this->firstName;
    }
    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }
    
    public function getAddress() {
        return $this->address;
    }
    public function setAddress($address) {
        $this->address = $address;
    }
    
    public function getZipCode() {
        return $this->zipCode;
    }
    public function setZipCode($zipCode) {
        $this->zipCode = $zipCode;
    }
    
    public function getCity() {
        return $this->city;
    }
    public function setCity($city) {
        $this->city = $city;
    }
    
    public function getNotorietyCoefficient() {
        return $this->notorietyCoefficient;
    }
    public function setNotorietyCoefficient($notorietyCoefficient) {
        $this->notorietyCoefficient = $notorietyCoefficient;
    }
    
    public function getType() {
        return $this->type;
    }
    public function setType($type) {
        $this->type = $type;
    }
}
