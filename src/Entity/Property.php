<?php

namespace App\Entity;

use DateTimeImmutable;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\PropertyRepository;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\HasLifecycleCallbacks]
#[ORM\Entity(repositoryClass: PropertyRepository::class)]
class Property
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
     #[Assert\NotBlank()]
    #[Assert\Length(min:2,max:50)]
    private ?string $category = null;

    #[ORM\Column(length: 50)]
     #[Assert\NotBlank()]
    #[Assert\Length(min:2,max:50)]
    private ?string $type = null;


    #[ORM\Column(length: 255)]
     #[Assert\NotBlank()]
    private ?string $picture = null;

    #[ORM\Column]
    #[Assert\NotNull()]
    #[Assert\Positive()]
    private ?float $surface = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank()]
    #[Assert\Length(min:2,max:255)]
    private ?string $status = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank()]
    private ?string $description = null;

    #[ORM\Column]
    #[Assert\NotNull()]
    #[Assert\Positive()]
    private ?float $price = null;

    #[ORM\Column]
    #[Assert\NotNull()]
    #[Assert\Positive()]
    private ?int $num_rooms = null;

    #[ORM\Column]
    #[Assert\NotNull()]
    #[Assert\Positive()]
    private ?int $num_bathrooms = null;

    #[ORM\Column]
    #[Assert\NotNull()]
    #[Assert\Positive()]
    private ?int $num_parkings = null;

    #[ORM\Column]
    #[Assert\NotNull()]
    #[Assert\Positive()]
    private ?int $num_stage = null;

    #[ORM\Column]
    #[Assert\NotNull()]
    #[Assert\Positive()]
    private ?int $numero_stage = null;

    #[ORM\Column(type: Types::BINARY)]
    #[Assert\NotNull()]
    #[Assert\Image(
        minWidth: 5000,
        maxWidth: 10000,
        minHeight: 5000,
        maxHeight: 10000,
    )]
    private $image = null;

    #[ORM\Column(nullable: true)]
    private ?bool $internet = null;

    #[ORM\Column(nullable: true)]
    private ?bool $balcon = null;

    #[ORM\Column(nullable: true)]
    private ?bool $salle_sport = null;

    #[ORM\Column(nullable: true)]
    private ?bool $piscine = null;

    #[ORM\Column(nullable: true)]
    private ?bool $cuisine = null;

    #[ORM\Column(nullable: true)]
    private ?bool $security_cam = null;

    #[ORM\Column]
    #[Assert\NotNull()]
   #[Assert\Positive()]
   private ?int $numero_way = null;

   #[ORM\Column(length: 50)]
   #[Assert\NotBlank()]
   #[Assert\Length(min:2,max:50)]
   private ?string $name_way = null;

   #[ORM\Column(length: 50)]
   #[Assert\NotBlank()]
   #[Assert\Length(min:2,max:50)]
   private ?string $type_way = null;

   #[ORM\Column(length: 50)]
   #[Assert\NotBlank()]
   #[Assert\Length(min:2,max:50)]
   private ?string $city = null;

   #[ORM\Column]
   #[Assert\NotNull()]
   #[Assert\Positive()]
   private ?int $zipecode = null;

   #[ORM\Column(length: 50)]
   #[Assert\NotBlank()]
   #[Assert\Length(min:2,max:50)]
   private ?string $departement = null;

   #[ORM\Column(length: 50)]
   #[Assert\NotBlank()]
   #[Assert\Length(min:2,max:50)]
   private ?string $region = null;

   #[ORM\Column(type: Types::BINARY)]
   #[Assert\NotNull()]
   #[Assert\Image(
       minWidth: 200,
       maxWidth: 400,
       minHeight: 200,
       maxHeight: 400,
   )]
   private $map = null;

    #[ORM\Column]
     #[Assert\NotNull()]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column]
    #[Assert\NotNull()]
    private ?\DateTimeImmutable $updatedAt = null;

    public function __construct()
    {
        $this->createdAt=new DateTimeImmutable();
        $this->updatedAt = new DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(string $category): static
    {
        $this->category = $category;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getSurface(): ?float
    {
        return $this->surface;
    }

    public function setSurface(float $surface): static
    {
        $this->surface = $surface;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): static
    {
        $this->price = $price;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): static
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): static
    {
        $this->city = $city;

        return $this;
    }

    public function getZipecode(): ?int
    {
        return $this->zipecode;
    }

    public function setZipecode(int $zipecode): static
    {
        $this->zipecode = $zipecode;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(string $picture): static
    {
        $this->picture = $picture;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }
    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeImmutable $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    #[ORM\PrePersist]
    public function setUpdatedAtValue(): void
   {
       $this->updatedAt = new \DateTimeImmutable();
   }

    public function isInternet(): ?bool
    {
        return $this->internet;
    }

    public function setInternet(?bool $internet): static
    {
        $this->internet = $internet;

        return $this;
    }

   

    public function isBalcon(): ?bool
    {
        return $this->balcon;
    }

    public function setBalcon(?bool $balcon): static
    {
        $this->balcon = $balcon;

        return $this;
    }

    
    public function isSalleSport(): ?bool
    {
        return $this->salle_sport;
    }

    public function setSalleSport(?bool $salle_sport): static
    {
        $this->salle_sport = $salle_sport;

        return $this;
    }

    
    public function isPiscine(): ?bool
    {
        return $this->piscine;
    }

    public function setPiscine(?bool $piscine): static
    {
        $this->piscine = $piscine;

        return $this;
    }


    public function isCuisine(): ?bool
    {
        return $this->cuisine;
    }

    public function setCuisine(?bool $cuisine): static
    {
        $this->cuisine = $cuisine;

        return $this;
    }

    public function isSecurityCam(): ?bool
    {
        return $this->security_cam;
    }

    public function setSecurityCam(?bool $security_cam): static
    {
        $this->security_cam = $security_cam;

        return $this;
    }


    /**
     * Get the value of description
     *
     * @return ?string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @param ?string $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of num_rooms
     *
     * @return ?int
     */
    public function getNumRooms(): ?int
    {
        return $this->num_rooms;
    }

    /**
     * Set the value of num_rooms
     *
     * @param ?int $num_rooms
     *
     * @return self
     */
    public function setNumRooms(?int $num_rooms): self
    {
        $this->num_rooms = $num_rooms;

        return $this;
    }

    /**
     * Get the value of num_bathrooms
     *
     * @return ?int
     */
    public function getNumBathrooms(): ?int
    {
        return $this->num_bathrooms;
    }

    /**
     * Set the value of num_bathrooms
     *
     * @param ?int $num_bathrooms
     *
     * @return self
     */
    public function setNumBathrooms(?int $num_bathrooms): self
    {
        $this->num_bathrooms = $num_bathrooms;

        return $this;
    }

    /**
     * Get the value of num_parkings
     *
     * @return ?int
     */
    public function getNumParkings(): ?int
    {
        return $this->num_parkings;
    }

    /**
     * Set the value of num_parkings
     *
     * @param ?int $num_parkings
     *
     * @return self
     */
    public function setNumParkings(?int $num_parkings): self
    {
        $this->num_parkings = $num_parkings;

        return $this;
    }

    /**
     * Get the value of num_stage
     *
     * @return ?int
     */
    public function getNumStage(): ?int
    {
        return $this->num_stage;
    }

    /**
     * Set the value of num_stage
     *
     * @param ?int $num_stage
     *
     * @return self
     */
    public function setNumStage(?int $num_stage): self
    {
        $this->num_stage = $num_stage;

        return $this;
    }

    /**
     * Get the value of numero_stage
     *
     * @return ?int
     */
    public function getNumeroStage(): ?int
    {
        return $this->numero_stage;
    }

    /**
     * Set the value of numero_stage
     *
     * @param ?int $numero_stage
     *
     * @return self
     */
    public function setNumeroStage(?int $numero_stage): self
    {
        $this->numero_stage = $numero_stage;

        return $this;
    }

    /**
     * Get the value of image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     */
    public function setImage($image): self
    {
        $this->image = $image;

        return $this;
    }

   /**
    * Get the value of numero_way
    *
    * @return ?int
    */
   public function getNumeroWay(): ?int
   {
      return $this->numero_way;
   }

   /**
    * Set the value of numero_way
    *
    * @param ?int $numero_way
    *
    * @return self
    */
   public function setNumeroWay(?int $numero_way): self
   {
      $this->numero_way = $numero_way;

      return $this;
   }

   /**
    * Get the value of name_way
    *
    * @return ?string
    */
   public function getNameWay(): ?string
   {
      return $this->name_way;
   }

   /**
    * Set the value of name_way
    *
    * @param ?string $name_way
    *
    * @return self
    */
   public function setNameWay(?string $name_way): self
   {
      $this->name_way = $name_way;

      return $this;
   }

   /**
    * Get the value of type_way
    *
    * @return ?string
    */
   public function getTypeWay(): ?string
   {
      return $this->type_way;
   }

   /**
    * Set the value of type_way
    *
    * @param ?string $type_way
    *
    * @return self
    */
   public function setTypeWay(?string $type_way): self
   {
      $this->type_way = $type_way;

      return $this;
   }

   /**
    * Get the value of departement
    *
    * @return ?string
    */
   public function getDepartement(): ?string
   {
      return $this->departement;
   }

   /**
    * Set the value of departement
    *
    * @param ?string $departement
    *
    * @return self
    */
   public function setDepartement(?string $departement): self
   {
      $this->departement = $departement;

      return $this;
   }

   /**
    * Get the value of region
    *
    * @return ?string
    */
   public function getRegion(): ?string
   {
      return $this->region;
   }

   /**
    * Set the value of region
    *
    * @param ?string $region
    *
    * @return self
    */
   public function setRegion(?string $region): self
   {
      $this->region = $region;

      return $this;
   }

   /**
    * Get the value of map
    */
   public function getMap()
   {
      return $this->map;
   }

   /**
    * Set the value of map
    */
   public function setMap($map): self
   {
      $this->map = $map;

      return $this;
   }
}
