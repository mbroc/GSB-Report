<?php

namespace GSB\Domain;

use Symfony\Component\Security\Core\User\UserInterface;

class Visitor implements UserInterface {

    /**
     * Visitor id.
     *
     * @var integer
     */
    private $id;

    /**
     * Visitor Sector ID.
     *
     * @var integer
     */
    private $sector_id;

    /**
     * Visitor Laboratory ID.
     *
     * @var integer
     */
    private $laboratory_id;

    /**
     * Visitor name.
     *
     * @var string
     */
    private $visitorName;

    /**
     * Visitor first name.
     *
     * @var string
     */
    private $visitorFirstName;

    /**
     * Visitor address.
     *
     * @var string
     */
    private $address;

    /**
     * Visitor city.
     *
     * @var string
     */
    private $city;

    /**
     * Visitor zip code.
     *
     * @var string
     */
    private $zipCode;

    /**
     * Visitor hiring date.
     *
     * @var string
     */
    private $hiringDate;

    /**
     * Visitor login.
     *
     * @var string
     */
    private $login;

    /**
     * Visitor password.
     *
     * @var string
     */
    private $password;

    /**
     * Salt that was originally used to encode the password.
     *
     * @var string
     */
    private $salt;

    /**
     * Role.
     * Values : ROLE_VISITOR or ROLE_ADMIN.
     *
     * @var string
     */
    private $role;

    /**
     * Visitor type.
     *
     * @var string
     */
    private $visitorType;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getSector_id() {
        return $this->sector_id;
    }

    public function setSector_id($sector_id) {
        $this->sector_id = $sector_id;
    }

    public function getLaboratory_id() {
        return $this->laboratory_id;
    }

    public function setLaboratory_id($laboratory_id) {
        $this->laboratory_id = $laboratory_id;
    }

    public function getVisitorName() {
        return $this->visitorName;
    }

    public function setVisitorName($visitorName) {
        $this->visitorName = $visitorName;
    }

    public function getVisitorFirstName() {
        return $this->visitorFirstName;
    }

    public function setVisitorFirstName($visitorFirstName) {
        $this->visitorFirstName = $visitorFirstName;
    }

    public function getAddress() {
        return $this->address;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    public function getCity() {
        return $this->city;
    }

    public function setCity($city) {
        $this->city = $city;
    }

    public function getZipCode() {
        return $this->zipCode;
    }

    public function setZipCode($zipCode) {
        $this->zipCode = $zipCode;
    }

    public function getHiringDate() {
        return $this->hiringDate;
    }

    public function setHiringDate($hiringDate) {
        $this->hiringDate = $hiringDate;
    }

    public function getUsername() {
        return $this->login;
    }

    public function setUsername($login) {
        $this->login = $login;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getSalt() {
        return $this->salt;
    }

    public function setSalt($salt) {
        $this->salt = $salt;
    }

    public function getRole() {
        return $this->role;
    }

    public function setRole($role) {
        $this->role = $role;
    }

    public function getType() {
        return $this->visitorType;
    }

    public function setType($visitorType) {
        $this->visitorType = $visitorType;
    }

    public function eraseCredentials() {
    }
    
    public function getRoles() {
        return array($this->getRole());
    }
}
