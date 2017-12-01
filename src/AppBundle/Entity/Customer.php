<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Customer
 *
 * @ORM\Table(name="Customer", indexes={@ORM\Index(name="IFK_CustomerSupportRepId", columns={"SupportRepId"})})
 * @ORM\Entity
 */
class Customer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="CustomerId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $customerid;

    /**
     * @var string
     *
     * @ORM\Column(name="FirstName", type="string", length=40, nullable=false)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="LastName", type="string", length=20, nullable=false)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="Company", type="string", length=80, nullable=true)
     */
    private $company;

    /**
     * @var string
     *
     * @ORM\Column(name="Address", type="string", length=70, nullable=true)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="City", type="string", length=40, nullable=true)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="State", type="string", length=40, nullable=true)
     */
    private $state;

    /**
     * @var string
     *
     * @ORM\Column(name="Country", type="string", length=40, nullable=true)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="PostalCode", type="string", length=10, nullable=true)
     */
    private $postalcode;

    /**
     * @var string
     *
     * @ORM\Column(name="Phone", type="string", length=24, nullable=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="Fax", type="string", length=24, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=60, nullable=false)
     */
    private $email;

    /**
     * @var Employee
     *
     * @ORM\ManyToOne(targetEntity="Employee")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="SupportRepId", referencedColumnName="EmployeeId")
     * })
     */
    private $supportrepid;

    /**
     * @return int
     */
    public function getCustomerid()
    {
        return $this->customerid;
    }

    /**
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param string $company
     */
    public function setCompany($company)
    {
        $this->company = $company;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getPostalcode()
    {
        return $this->postalcode;
    }

    /**
     * @param string $postalcode
     */
    public function setPostalcode($postalcode)
    {
        $this->postalcode = $postalcode;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * @param string $fax
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return Employee
     */
    public function getSupportrepid()
    {
        return $this->supportrepid;
    }

    /**
     * @param Employee $supportrepid
     */
    public function setSupportrepid($supportrepid)
    {
        $this->supportrepid = $supportrepid;
    }

    function __toString()
    {
        return $this->getFirstname().' '.$this->getLastname();
    }


}

