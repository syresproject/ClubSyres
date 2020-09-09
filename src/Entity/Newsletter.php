<?php

namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;
use Exception;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;


/**
 * @ORM\Entity(repositoryClass="App\Repository\NewsletterRepository")
 * @ORM\Table(name="newsletter")
 * @ORM\HasLifecycleCallbacks()
 * @Vich\Uploadable
 */
class Newsletter
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
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
     * @ORM\Column(type="string", nullable=true)
     *
     * @var string
     */
    private $imageName;


    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="images", fileNameProperty="imageNameUn", size="imageSize")
     *
     * @var File|null
     */
    private $imageFileUn;

    /**
     * @ORM\Column(type="string", nullable=true)
     *
     * @var string
     */
    private $imageNameUn;

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="images", fileNameProperty="imageNameDeux", size="imageSize")
     *
     * @var File|null
     */
    private $imageFileDeux;

    /**
     * @ORM\Column(type="string", nullable=true)
     *
     * @var string
     */
    private $imageNameDeux;

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="images", fileNameProperty="imageNameTrois", size="imageSize")
     *
     * @var File|null
     */
    private $imageFileTrois;

    /**
     * @ORM\Column(type="string", nullable=true)
     *
     * @var string
     */
    private $imageNameTrois;

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="images", fileNameProperty="imageNameQuatre", size="imageSize")
     *
     * @var File|null
     */
    private $imageFileQuatre;

    /**
     * @ORM\Column(type="string", nullable=true)
     *
     * @var string
     */
    private $imageNameQuatre;

    /**
     * @return File|null
     */
    public function getImageFileUn(): ?File
    {
        return $this->imageFileUn;
    }

    /**
     * @param File|UploadedFile|null $imageFileUn
     */
    public function setImageFileUn(?File $imageFileUn = null): void
    {
        $this->imageFileUn = $imageFileUn;

        if (null !== $imageFileUn) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    /**
     * @return string
     */
    public function getImageNameUn()
    {
        return $this->imageNameUn;
    }

    /**
     * @param string $imageNameUn
     */
    public function setImageNameUn(string $imageNameUn)
    {
        $this->imageNameUn = $imageNameUn;
    }

    /**
     * @return File|null
     */
    public function getImageFileDeux()
    {
        return $this->imageFileDeux;
    }

    /**
     * @param File|UploadedFile|null $imageFileDeux
     */
    public function setImageFileDeux(?File $imageFileDeux = null)
    {
        $this->imageFileDeux = $imageFileDeux;
        if (null !== $imageFileDeux) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    /**
     * @return string
     */
    public function getImageNameDeux()
    {
        return $this->imageNameDeux;
    }

    /**
     * @param string $imageNameDeux
     */
    public function setImageNameDeux(string $imageNameDeux)
    {
        $this->imageNameDeux = $imageNameDeux;
    }

    /**
     * @return File|null
     */
    public function getImageFileTrois(): ?File
    {
        return $this->imageFileTrois;
    }

    /**
     *  @param File|UploadedFile|null $imageFileTrois
     */
    public function setImageFileTrois(?File $imageFileTrois = null): void
    {
        $this->imageFileTrois = $imageFileTrois;

        if (null !== $imageFileTrois) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    /**
     * @return string
     */
    public function getImageNameTrois()
    {
        return $this->imageNameTrois;
    }

    /**
     * @param string $imageNameTrois
     */
    public function setImageNameTrois(string $imageNameTrois): void
    {
        $this->imageNameTrois = $imageNameTrois;
    }

    /**
     * @return File|null
     */
    public function getImageFileQuatre(): ?File
    {
        return $this->imageFileQuatre;
    }

    /**
     * @param File|null $imageFileQuatre
     * @throws Exception
     */
    public function setImageFileQuatre(?File $imageFileQuatre = null): void
    {
        $this->imageFileQuatre = $imageFileQuatre;
        if (null !== $imageFileQuatre) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }



    /**
     * @return string
     */
    public function getImageNameQuatre()
    {
        return $this->imageNameQuatre;
    }

    /**
     * @param string $imageNameQuatre
     */
    public function setImageNameQuatre(string $imageNameQuatre): void
    {
        $this->imageNameQuatre = $imageNameQuatre;

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
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
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
     * @var string
     *
     * @ORM\Column(name="presentation", type="string", length=191, nullable=true)
     */
    private $presentation;

    /**
     * @var string
     *
     * @ORM\Column(name="salutation", type="string", length=191, nullable=true)
     */
    private $salutation;

    /**
     * @var string
     *
     * @ORM\Column(name="text_desc", type="string", length=191, nullable=true)
     */
    private $textDesc;


    /**
     * @var string
     *
     * @ORM\Column(name="footer_text_un", type="string", length=191, nullable=true)
     */
    private $footerTextUn;

    /**
     * @var string
     *
     * @ORM\Column(name="footer_text_deux", type="string", length=191, nullable=true)
     */
    private $footerTextDeux;

    /**
     * @var string
     *
     * @ORM\Column(name="footer_text_trois", type="string", length=191, nullable=true)
     */
    private $footerTextTrois;

    /**
     * @var string
     *
     * @ORM\Column(name="footer_text_quatre", type="string", length=191, nullable=true)
     */
    private $footerTextQuatre;

    /**
     * @var string
     *
     * @ORM\Column(name="footer_text_cinq", type="string", length=191, nullable=true)
     */
    private $footerTextCinq;

    /**
     * @var string
     *
     * @ORM\Column(name="footer_text_six", type="string", length=191, nullable=true)
     */
    private $footerTextSix;

    /**
     * @var string
     *
     * @ORM\Column(name="footer_text_sept", type="string", length=191, nullable=true)
     */
    private $footerTextSept;

    /**
     * @var string
     *
     * @ORM\Column(name="footer_text_huit", type="string", length=191, nullable=true)
     */
    private $footerTextHuit;

    /**
     * @return string
     */
    public function getPresentation()
    {
        return $this->presentation;
    }

    /**
     * @param string $presentation
     */
    public function setPresentation(string $presentation): void
    {
        $this->presentation = $presentation;
    }

    /**
     * @return string
     */
    public function getSalutation()
    {
        return $this->salutation;
    }

    /**
     * @param string $salutation
     */
    public function setSalutation(string $salutation): void
    {
        $this->salutation = $salutation;
    }

    /**
     * @return string
     */
    public function getTextDesc()
    {
        return $this->textDesc;
    }

    /**
     * @param string $textDesc
     */
    public function setTextDesc(string $textDesc): void
    {
        $this->textDesc = $textDesc;
    }

    /**
     * @return string
     */
    public function getFooterTextUn()
    {
        return $this->footerTextUn;
    }

    /**
     * @param string $footerTextUn
     */
    public function setFooterTextUn(string $footerTextUn): void
    {
        $this->footerTextUn = $footerTextUn;
    }

    /**
     * @return string
     */
    public function getFooterTextDeux()
    {
        return $this->footerTextDeux;
    }

    /**
     * @param string $footerTextDeux
     */
    public function setFooterTextDeux(string $footerTextDeux): void
    {
        $this->footerTextDeux = $footerTextDeux;
    }

    /**
     * @return string
     */
    public function getFooterTextTrois()
    {
        return $this->footerTextTrois;
    }

    /**
     * @param string $footerTextTrois
     */
    public function setFooterTextTrois(string $footerTextTrois): void
    {
        $this->footerTextTrois = $footerTextTrois;
    }

    /**
     * @return string
     */
    public function getFooterTextQuatre()
    {
        return $this->footerTextQuatre;
    }

    /**
     * @param string $footerTextQuatre
     */
    public function setFooterTextQuatre(string $footerTextQuatre): void
    {
        $this->footerTextQuatre = $footerTextQuatre;
    }

    /**
     * @return string
     */
    public function getFooterTextCinq()
    {
        return $this->footerTextCinq;
    }

    /**
     * @param string $footerTextCinq
     */
    public function setFooterTextCinq(string $footerTextCinq): void
    {
        $this->footerTextCinq = $footerTextCinq;
    }

    /**
     * @return string
     */
    public function getFooterTextSix()
    {
        return $this->footerTextSix;
    }

    /**
     * @param string $footerTextSix
     */
    public function setFooterTextSix(string $footerTextSix): void
    {
        $this->footerTextSix = $footerTextSix;
    }

    /**
     * @return string
     */
    public function getFooterTextSept()
    {
        return $this->footerTextSept;
    }

    /**
     * @param string $footerTextSept
     */
    public function setFooterTextSept(string $footerTextSept): void
    {
        $this->footerTextSept = $footerTextSept;
    }

    /**
     * @return string
     */
    public function getFooterTextHuit()
    {
        return $this->footerTextHuit;
    }

    /**
     * @param string $footerTextHuit
     */
    public function setFooterTextHuit(string $footerTextHuit): void
    {
        $this->footerTextHuit = $footerTextHuit;
    }





}
