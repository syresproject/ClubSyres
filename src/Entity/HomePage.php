<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass="App\Repository\HomePageRepository")
 * @ORM\HasLifecycleCallbacks()
 * @Vich\Uploadable
 */
class HomePage
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="text_welcome", type="string", length=191, nullable=true)
     */
    private $textWelcome;



    /**
     * @return string
     */
    public function getTextWelcome()
    {
        return $this->textWelcome;
    }

    /**
     * @param string $textWelcome
     */
    public function setTextWelcome(string $textWelcome): void
    {
        $this->textWelcome = $textWelcome;
    }










    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="images", fileNameProperty="imageName", size="imageSize")
     *
     * @var File|null
     */
    private $imageFile;

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="images", fileNameProperty="imageNameUn", size="imageSize")
     *
     * @var File|null
     */
    private $imageFileUn;


    /**
     * @ORM\Column(type="string")
     *
     * @var string
     */
    private $imageName;

    /**
     * @ORM\Column(type="string", nullable=true)
     *
     * @var string
     */
    private $imageNameUn;

    /**
     * @return string
     */
    public function getImageNameUn(): string
    {
        return $this->imageNameUn;
    }

    /**
     * @param string $imageNameUn
     */
    public function setImageNameUn(?string $imageNameUn)
    {
        $this->imageNameUn = $imageNameUn;
        return $this;
    }




    /**
     *
     * @var int|null
     */
    private $imageSize;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updatedAt;


    public function __construct()
    {

        //$this->updatedAt = new \DateTime();
    }



    /**
     * @ORM\PrePersist
     *
     * @return void
     * @throws Exception
     */
    public function setCreatedAtValue() {
        $date = new \DateTime();
        $this->updatedAt =$date;
    }



    /**
     * @param File|UploadedFile|null $imageFile
     * @throws Exception
     */
    public function setImageFile(?File $imageFile = null): void
    {
        $this->imageFile = $imageFile;

        if (null !== $imageFile) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    public function setImageName(?string $imageName): void
    {
        $this->imageName = $imageName;
    }

    public function getImageName(): ?string
    {
        return $this->imageName;
    }

    public function setImageSize(?int $imageSize): void
    {
        $this->imageSize = $imageSize;
    }

    public function getImageSize(): ?int
    {
        return $this->imageSize;
    }

    /**
     * @return File|null
     */
    public function getImageFileUn(): ?File
    {
        return $this->imageFileUn;
    }

    /**
     * @param File|null $imageFileUn
     */
    public function setImageFileUn(?File $imageFileUn): void
    {
        $this->imageFileUn = $imageFileUn;
    }




}
