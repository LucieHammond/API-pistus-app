<?php

namespace ApiBundle\Entity;

use JsonSerializable;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ApiBundle\Repository\UserRepository")
 */
class User implements JsonSerializable
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="hash", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $hash;

    /**
     * @var string
     * @ORM\Column(name="FirstName", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $firstName;

    /**
     * @var string
     * @ORM\Column(name="LastName", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $lastName;

    /**
     * @ORM\ManyToOne(targetEntity="ApiBundle\Entity\Room", cascade={"all"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $room;

    /**
     * @ORM\ManyToMany(targetEntity="ApiBundle\Entity\Target", mappedBy="users")
     */
    private $targets;
    

    /**
    * @var string
    * @ORM\Column(name="Login",type="string", length=255)
    */
    private $login;

    /**
     * @var string
     * @ORM\Column(name="Email", type="string", length=255)
     * @Assert\Email
     */
    private $email;

    /**
     * @var string
     * @ORM\Column(name="Tel", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="auth_key", type="string", length=255)
     */
    private $authKey;

    /**
     * @var string
     *
     * @ORM\Column(name="surName", type="string", length=255)
     */
    private $surName = "";

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_seen", type="datetime")
     */
    private $lastSeen;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_pos_update", type="datetime")
     */
    private $lastPosUpdate;

    /**
     * @var int
     *
     * @ORM\Column(name="mapPoint", type="integer")
     */
    private $mapPoint = 0;

    /**
     * @var float
     *
     * @ORM\Column(name="mapPrecision", type="float")
     */
    private $precision = 0;

    /**
     * @var float
     *
     * @ORM\Column(name="altMax", type="float")
     */
    private $altMax = 0;

    /**
     * @var float
     *
     * @ORM\Column(name="altMin", type="float")
     */
    private $altMin = 0;

    /**
     * @var float
     *
     * @ORM\Column(name="denivele", type="float")
     */
    private $denivele = 0;

    /**
     * @var float
     *
     * @ORM\Column(name="kmTot", type="float")
     */
    private $kmTot = 0;

    /**
     * @var float
     *
     * @ORM\Column(name="kmSki", type="float")
     */
    private $kmSki = 0;

    /**
     * @var float
     *
     * @ORM\Column(name="maxSpeed", type="float")
     */
    private $maxSpeed = 0;

    /**
     * @var float
     *
     * @ORM\Column(name="avgSpeed", type="float")
     */
    private $avgSpeed = 0;

    /**
     * @var float
     *
     * @ORM\Column(name="skiTime", type="float")
     */
    private $skiTime = 0;

    /**
     * @var float
     *
     * @ORM\Column(name="totalTime", type="float")
     */
    private $totalTime = 0;

    function __construct() {
        $this->targets = new \Doctrine\Common\Collections\ArrayCollection();
        $this->setLastSeen(date_create());
        $this->setLastPosUpdate(date_create("0000-00-00 00:00:00"));
    }

    public function getFullName(){
        return $this->firstName.' '.$this->lastName;
    }
    public function getTargets()
    {
        return $this->targets;
    }

    public function addTarget($target)
    {
        $this->targets[] = $target;
    }

    public function setTargets($targets)
    {
        $this->targets = $targets;
    }
    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set login
     *
     * @param string $login
     *
     * @return User
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return User
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set surName
     *
     * @param string $surName
     *
     * @return User
     */
    public function setSurName($surName)
    {
        $this->surName = $surName;

        return $this;
    }

    /**
     * Get surName
     *
     * @return string
     */
    public function getSurName()
    {
        return $this->surName;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set eleve
     *
     * @param string $eleve
     * @return User
     */
    public function setEleve($eleve)
    {
        $this->eleve = $eleve;

        return $this;
    }

    /**
     * Get eleve
     *
     * @return string
     */
    public function getEleve()
    {
        return $this->eleve;
    }

    /**
     * Set authKey
     *
     * @param string $authKey
     * @return User
     */
    public function setAuthKey($authKey)
    {
        $this->authKey = $authKey;

        return $this;
    }

    /**
     * Get authKey
     *
     * @return string
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }


    /**
     * Set lastSeen
     *
     * @param \DateTime $lastSeen
     * @return User
     */
    public function setLastSeen($lastSeen)
    {
        $this->lastSeen = $lastSeen;

        return $this;
    }

    /**
     * Get lastSeen
     *
     * @return \DateTime
     */
    public function getLastSeen()
    {
        return $this->lastSeen;
    }

    /**
     * Set lastPosUpdate
     *
     * @param \DateTime $lastPosUpdate
     * @return User
     */
    public function setLastPosUpdate($lastPosUpdate)
    {
        //if the argument is a string (see handleRequest below) then make a date out of it
        if (gettype($lastPosUpdate) == "string")
            $lastPosUpdate = date_create($lastPosUpdate);

        $this->lastPosUpdate = $lastPosUpdate;

        return $this;
    }

    /**
     * Get lastPosUpdate
     *
     * @return \DateTime
     */
    public function getLastPosUpdate()
    {
        return $this->lastPosUpdate;
    }

    /**
     * Set mapPoint
     *
     * @param integer $mapPoint
     * @return User
     */
    public function setMapPoint($mapPoint)
    {
        $this->mapPoint = $mapPoint;

        return $this;
    }

    /**
     * Set precision
     *
     * @param float $precision
     * @return User
     */
    public function setPrecision($precision)
    {
        $this->precision = $precision;

        return $this;
    }

    /**
     * Get precision
     *
     * @return float
     */
    public function getPrecision()
    {
        return $this->precision;
    }

    /**
     * Get mapPoint
     *
     * @return integer
     */
    public function getMapPoint()
    {
        return $this->mapPoint;
    }

    /**
     * Set altMax
     *
     * @param float $altMax
     * @return User
     */
    public function setAltMax($altMax)
    {
        $this->altMax = $altMax;

        return $this;
    }

    /**
     * Get altMax
     *
     * @return float
     */
    public function getAltMax()
    {
        return $this->altMax;
    }

    /**
     * Set altMin
     *
     * @param float $altMin
     * @return User
     */
    public function setAltMin($altMin)
    {
        $this->altMin = $altMin;

        return $this;
    }

    /**
     * Get altMin
     *
     * @return float
     */
    public function getAltMin()
    {
        return $this->altMin;
    }

    /**
     * Set denivele
     *
     * @param float $denivele
     * @return User
     */
    public function setDenivele($denivele)
    {
        $this->denivele = $denivele;

        return $this;
    }

    /**
     * Get denivele
     *
     * @return float
     */
    public function getDenivele()
    {
        return $this->denivele;
    }

    /**
     * Set kmTot
     *
     * @param float $kmTot
     * @return User
     */
    public function setKmTot($kmTot)
    {
        $this->kmTot = $kmTot;

        return $this;
    }

    /**
     * Get kmTot
     *
     * @return float
     */
    public function getKmTot()
    {
        return $this->kmTot;
    }

    /**
     * Set kmSki
     *
     * @param float $kmSki
     * @return User
     */
    public function setKmSki($kmSki)
    {
        $this->kmSki = $kmSki;

        return $this;
    }

    /**
     * Get kmSki
     *
     * @return float
     */
    public function getKmSki()
    {
        return $this->kmSki;
    }

    /**
     * Set maxSpeed
     *
     * @param float $maxSpeed
     * @return User
     */
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;

        return $this;
    }

    /**
     * Get maxSpeed
     *
     * @return float
     */
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    /**
     * Get avgSpeed
     *
     * @return float
     */
    public function getAvgSpeed()
    {
        return $this->avgSpeed;
    }

    /**
     * Set avgSpeed
     *
     * @param float $avgSpeed
     * @return User
     */
    public function setAvgSpeed($avgSpeed)
    {
        $this->avgSpeed = $avgSpeed;

        return $this;
    }

    /**
     * Set skiTime
     *
     * @param float $skiTime
     * @return User
     */
    public function setSkiTime($skiTime)
    {
        $this->skiTime = $skiTime;

        return $this;
    }

    /**
     * Get skiTime
     *
     * @return float
     */
    public function getSkiTime()
    {
        return $this->skiTime;
    }

    /**
     * Set totalTime
     *
     * @param float $totalTime
     * @return User
     */
    public function setTotalTime($totalTime)
    {
        $this->totalTime = $totalTime;

        return $this;
    }

    /**
     * Get totalTime
     *
     * @return float
     */
    public function getTotalTime()
    {
        return $this->totalTime;
    }

    public function jsonSerialize(){
        return array('login' =>$this->getLogin(),
                        'firstName'=>$this->getFirstName(),
                        'lastName'=>$this->getLastName(),
                        'surName'=>$this->getSurName(),
                        'room'=>($this->getRoom() ? $this->getRoom()->getNumber() : null),
                        'lastSeen'=>$this->lastSeen->format('Y-m-d H:i:s'),
                        'lastPosUpdate'=>$this->lastPosUpdate->format('Y-m-d H:i:s'),
                        'mapPoint'=>$this->mapPoint,
                        'precision'=>$this->precision,
                        'altMax'=>$this->altMax,
                        'altMin'=>$this->altMin,
                        'denivele'=>$this->denivele,
                        'kmTot'=>$this->kmTot,
                        'kmSki'=>$this->kmSki,
                        'maxSpeed'=>$this->maxSpeed,
                        'avgSpeed'=>$this->avgSpeed,
                        'skiTime'=>$this->skiTime,
                        'totalTime'=>$this->totalTime
                        );
    }

    public function handleRequest($request){
        $data = json_decode($request->getContent(), true);
        if (!$data)
            return false;
        foreach ($data as $key => $value) {
            $func = "set" . ucfirst($key);
            $this->$func($value);
        }
        $this->setLastSeen(date_create());
        return true;
    }

    /**
     * Set room
     *
     * @param \ApiBundle\Entity\Room $room
     *
     * @return User
     */
    public function setRoom(\ApiBundle\Entity\Room $room = null)
    {
        $this->room = $room;

        return $this;
    }

    /**
     * Get room
     *
     * @return \ApiBundle\Entity\Room
     */
    public function getRoom()
    {
        return $this->room;
    }

    /**
     * Set hash
     *
     * @param string $hash
     *
     * @return User
     */
    public function setHash($hash)
    {
        $this->hash = $hash;

        return $this;
    }

    /**
     * Get hash
     *
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Remove target
     *
     * @param \ApiBundle\Entity\Target $target
     */
    public function removeTarget(\ApiBundle\Entity\Target $target)
    {
        $this->targets->removeElement($target);
    }
}
