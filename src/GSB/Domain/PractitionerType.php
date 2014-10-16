<?php

namespace GSB\Domain;

class PractitionerType {
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
     * Practitioner place.
     *
     * @var string
     */
    private $place;
    
    
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
    
    public function getPlace() {
        return $this->place;
    }

    public function setPlace($place) {
        $this->place = $place;
    }
}
