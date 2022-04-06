<?php

namespace App\Entity;

use App\Repository\UserRepository;
use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @UniqueEntity(fields={"email"}, message="There is already an account with this email")
 * * @Vich\Uploadable
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=30, unique=true)
     */
    private $username;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=90, nullable=true)
     */
    private $job;

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname): void
    {
        $this->lastname = $lastname;
    }


    /**
     * @ORM\Column(type="string", length=90, nullable=true)
     */
    private $lastname;


    /**
     * @ORM\Column(type="string", length=90, nullable=true)
     */
    private $firstname;


    /**
     * @ORM\Column(type="bigint", nullable=true)
     */
    private $numTel;

    /**
     * @return mixed
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * @param mixed $zip
     */
    public function setZip($zip): void
    {
        $this->zip = $zip;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country): void
    {
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city): void
    {
        $this->city = $city;
    }

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $zip;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $exp;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $age;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $etat;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $sex;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $qualification;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $titre1='Vide';

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $institut1='Vide';

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $periode1='Vide';

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description1='Vide';

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $titre2='Vide';

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $institut2='Vide';

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $periode2 ='Vide';

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description2 ='Vide';


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $work1 ='Vide';

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $company1='Vide';

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $workperiod1='Vide';

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $workdescription1='Vide';

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $work2='Vide';

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $company2='Vide';

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $societe='';

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $locationsociete='';

    /**
     * @return string
     */
    public function getLocationsociete(): string
    {
        return $this->locationsociete;
    }

    /**
     * @param string $locationsociete
     */
    public function setLocationsociete(string $locationsociete): void
    {
        $this->locationsociete = $locationsociete;
    }

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $categoriesociete='';

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $numtelsociete='';

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $emailsociete='';

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $societesize='';

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $societewebsite='';

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $societebio='';

    /**
     * @return string
     */
    public function getSociete(): string
    {
        return $this->societe;
    }

    /**
     * @param string $societe
     */
    public function setSociete(string $societe): void
    {
        $this->societe = $societe;
    }

    /**
     * @return string
     */
    public function getCategoriesociete(): string
    {
        return $this->categoriesociete;
    }

    /**
     * @param string $categoriesociete
     */
    public function setCategoriesociete(string $categoriesociete): void
    {
        $this->categoriesociete = $categoriesociete;
    }

    /**
     * @return string
     */
    public function getNumtelsociete(): string
    {
        return $this->numtelsociete;
    }

    /**
     * @param string $numtelsociete
     */
    public function setNumtelsociete(string $numtelsociete): void
    {
        $this->numtelsociete = $numtelsociete;
    }

    /**
     * @return string
     */
    public function getEmailsociete(): string
    {
        return $this->emailsociete;
    }

    /**
     * @param string $emailsociete
     */
    public function setEmailsociete(string $emailsociete): void
    {
        $this->emailsociete = $emailsociete;
    }

    /**
     * @return string
     */
    public function getSocietesize(): string
    {
        return $this->societesize;
    }

    /**
     * @param string $societesize
     */
    public function setSocietesize(string $societesize): void
    {
        $this->societesize = $societesize;
    }

    /**
     * @return string
     */
    public function getSocietewebsite(): string
    {
        return $this->societewebsite;
    }

    /**
     * @param string $societewebsite
     */
    public function setSocietewebsite(string $societewebsite): void
    {
        $this->societewebsite = $societewebsite;
    }

    /**
     * @return string
     */
    public function getSocietebio(): string
    {
        return $this->societebio;
    }

    /**
     * @param string $societebio
     */
    public function setSocietebio(string $societebio): void
    {
        $this->societebio = $societebio;
    }



    /**
     * @return string
     */
    public function getWork1(): string
    {
        return $this->work1;
    }

    /**
     * @param string $work1
     */
    public function setWork1(string $work1): void
    {
        $this->work1 = $work1;
    }

    /**
     * @return string
     */
    public function getCompany1(): string
    {
        return $this->company1;
    }

    /**
     * @param string $company1
     */
    public function setCompany1(string $company1): void
    {
        $this->company1 = $company1;
    }

    /**
     * @return string
     */
    public function getWorkperiod1(): string
    {
        return $this->workperiod1;
    }

    /**
     * @param string $workperiod1
     */
    public function setWorkperiod1(string $workperiod1): void
    {
        $this->workperiod1 = $workperiod1;
    }

    /**
     * @return string
     */
    public function getWorkdescription1(): string
    {
        return $this->workdescription1;
    }

    /**
     * @param string $workdescription1
     */
    public function setWorkdescription1(string $workdescription1): void
    {
        $this->workdescription1 = $workdescription1;
    }

    /**
     * @return string
     */
    public function getWork2(): string
    {
        return $this->work2;
    }

    /**
     * @param string $work2
     */
    public function setWork2(string $work2): void
    {
        $this->work2 = $work2;
    }

    /**
     * @return string
     */
    public function getCompany2(): string
    {
        return $this->company2;
    }

    /**
     * @param string $company2
     */
    public function setCompany2(string $company2): void
    {
        $this->company2 = $company2;
    }

    /**
     * @return string
     */
    public function getWorkperiod2(): string
    {
        return $this->workperiod2;
    }

    /**
     * @param string $workperiod2
     */
    public function setWorkperiod2(string $workperiod2): void
    {
        $this->workperiod2 = $workperiod2;
    }

    /**
     * @return string
     */
    public function getWorkdescription2(): string
    {
        return $this->workdescription2;
    }

    /**
     * @param string $workdescription2
     */
    public function setWorkdescription2(string $workdescription2): void
    {
        $this->workdescription2 = $workdescription2;
    }

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $workperiod2='Vide';

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $workdescription2='Vide';

    /**
     * @return mixed
     */
    public function getTitre1()
    {
        return $this->titre1;
    }

    /**
     * @param mixed $titre1
     */
    public function setTitre1($titre1): void
    {
        $this->titre1 = $titre1;
    }

    /**
     * @return mixed
     */
    public function getInstitut1()
    {
        return $this->institut1;
    }

    /**
     * @param mixed $institut1
     */
    public function setInstitut1($institut1): void
    {
        $this->institut1 = $institut1;
    }

    /**
     * @return mixed
     */
    public function getPeriode1()
    {
        return $this->periode1;
    }

    /**
     * @param mixed $periode1
     */
    public function setPeriode1($periode1): void
    {
        $this->periode1 = $periode1;
    }

    /**
     * @return mixed
     */
    public function getDescription1()
    {
        return $this->description1;
    }

    /**
     * @param mixed $description1
     */
    public function setDescription1($description1): void
    {
        $this->description1 = $description1;
    }

    /**
     * @return mixed
     */
    public function getTitre2()
    {
        return $this->titre2;
    }

    /**
     * @param mixed $titre2
     */
    public function setTitre2($titre2): void
    {
        $this->titre2 = $titre2;
    }

    /**
     * @return mixed
     */
    public function getInstitut2()
    {
        return $this->institut2;
    }

    /**
     * @param mixed $institut2
     */
    public function setInstitut2($institut2): void
    {
        $this->institut2 = $institut2;
    }

    /**
     * @return mixed
     */
    public function getPeriode2()
    {
        return $this->periode2;
    }

    /**
     * @param mixed $periode2
     */
    public function setPeriode2($periode2): void
    {
        $this->periode2 = $periode2;
    }

    /**
     * @return mixed
     */
    public function getDescription2()
    {
        return $this->description2;
    }

    /**
     * @param mixed $description2
     */
    public function setDescription2($description2): void
    {
        $this->description2 = $description2;
    }

    /**
     * @return DateTime
     */
    public function getUpdateAt(): DateTime
    {
        return $this->update_at;
    }

    /**
     * @param DateTime $update_at
     */
    public function setUpdateAt(DateTime $update_at): void
    {
        $this->update_at = $update_at;
    }



    /**
     * @return mixed
     */
    public function getExp()
    {
        return $this->exp;
    }

    /**
     * @param mixed $exp
     */
    public function setExp($exp): void
    {
        $this->exp = $exp;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age): void
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param mixed $etat
     */
    public function setEtat($etat): void
    {
        $this->etat = $etat;
    }

    /**
     * @return mixed
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @param mixed $sex
     */
    public function setSex($sex): void
    {
        $this->sex = $sex;
    }

    /**
     * @return mixed
     */
    public function getQualification()
    {
        return $this->qualification;
    }

    /**
     * @param mixed $qualification
     */
    public function setQualification($qualification): void
    {
        $this->qualification = $qualification;
    }


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $country;

    /**
     * @return mixed
     */
    public function getBio()
    {
        return $this->bio;
    }

    /**
     * @param mixed $bio
     */
    public function setBio($bio): void
    {
        $this->bio = $bio;
    }

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $bio;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $city;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @ORM\OneToMany(targetEntity=Annonce::class, mappedBy="user", orphanRemoval=true)
     */
    private $annonces;




    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ImageProfil;

    /**
     * @Vich\UploadableField(mapping="photo", fileNameProperty="ImageProfil")
     */
    private $imageFile;

	public function getImageFile()
    {
        return $this->imageFile;
    }

    public function setImageFile($imageFile): void
    {
        $this->imageFile = $imageFile;
        if($imageFile){
            $this->update_at= new \DateTime();
        }

    }


    /**
     * @ORM\Column(type="datetime")
     */
    private $update_at;


    public function __construct()
    {
        $this->annonces = new ArrayCollection();
        $this->update_at = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }


    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getJob(): ?string
    {
        return $this->job;
    }

    public function setJob(?string $job): self
    {
        $this->job = $job;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(?string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getNumTel(): ?string
    {
        return $this->numTel;
    }

    public function setNumTel(?string $numTel): self
    {
        $this->numTel = $numTel;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * @return Collection|Annonce[]
     */
    public function getAnnonces(): Collection
    {
        return $this->annonces;
    }

    public function addAnnonce(Annonce $annonce): self
    {
        if (!$this->annonces->contains($annonce)) {
            $this->annonces[] = $annonce;
            $annonce->setUser($this);
        }

        return $this;
    }

    public function removeAnnonce(Annonce $annonce): self
    {
        if ($this->annonces->removeElement($annonce)) {
            // set the owning side to null (unless already changed)
            if ($annonce->getUser() === $this) {
                $annonce->setUser(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->email;
    }

    public function getImageProfil(): ?string
    {
        return $this->ImageProfil;
    }

    public function setImageProfil(?string $ImageProfil): self
    {
        $this->ImageProfil = $ImageProfil;

        return $this;
    }
}
