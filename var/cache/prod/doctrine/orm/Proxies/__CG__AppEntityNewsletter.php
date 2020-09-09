<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Newsletter extends \App\Entity\Newsletter implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Newsletter' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Newsletter' . "\0" . 'imageFile', '' . "\0" . 'App\\Entity\\Newsletter' . "\0" . 'imageName', '' . "\0" . 'App\\Entity\\Newsletter' . "\0" . 'imageFileUn', '' . "\0" . 'App\\Entity\\Newsletter' . "\0" . 'imageNameUn', '' . "\0" . 'App\\Entity\\Newsletter' . "\0" . 'imageFileDeux', '' . "\0" . 'App\\Entity\\Newsletter' . "\0" . 'imageNameDeux', '' . "\0" . 'App\\Entity\\Newsletter' . "\0" . 'imageFileTrois', '' . "\0" . 'App\\Entity\\Newsletter' . "\0" . 'imageNameTrois', '' . "\0" . 'App\\Entity\\Newsletter' . "\0" . 'imageFileQuatre', '' . "\0" . 'App\\Entity\\Newsletter' . "\0" . 'imageNameQuatre', '' . "\0" . 'App\\Entity\\Newsletter' . "\0" . 'imageSize', '' . "\0" . 'App\\Entity\\Newsletter' . "\0" . 'updatedAt', '' . "\0" . 'App\\Entity\\Newsletter' . "\0" . 'presentation', '' . "\0" . 'App\\Entity\\Newsletter' . "\0" . 'salutation', '' . "\0" . 'App\\Entity\\Newsletter' . "\0" . 'textDesc', '' . "\0" . 'App\\Entity\\Newsletter' . "\0" . 'footerTextUn', '' . "\0" . 'App\\Entity\\Newsletter' . "\0" . 'footerTextDeux', '' . "\0" . 'App\\Entity\\Newsletter' . "\0" . 'footerTextTrois', '' . "\0" . 'App\\Entity\\Newsletter' . "\0" . 'footerTextQuatre', '' . "\0" . 'App\\Entity\\Newsletter' . "\0" . 'footerTextCinq', '' . "\0" . 'App\\Entity\\Newsletter' . "\0" . 'footerTextSix', '' . "\0" . 'App\\Entity\\Newsletter' . "\0" . 'footerTextSept', '' . "\0" . 'App\\Entity\\Newsletter' . "\0" . 'footerTextHuit'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Newsletter' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Newsletter' . "\0" . 'imageFile', '' . "\0" . 'App\\Entity\\Newsletter' . "\0" . 'imageName', '' . "\0" . 'App\\Entity\\Newsletter' . "\0" . 'imageFileUn', '' . "\0" . 'App\\Entity\\Newsletter' . "\0" . 'imageNameUn', '' . "\0" . 'App\\Entity\\Newsletter' . "\0" . 'imageFileDeux', '' . "\0" . 'App\\Entity\\Newsletter' . "\0" . 'imageNameDeux', '' . "\0" . 'App\\Entity\\Newsletter' . "\0" . 'imageFileTrois', '' . "\0" . 'App\\Entity\\Newsletter' . "\0" . 'imageNameTrois', '' . "\0" . 'App\\Entity\\Newsletter' . "\0" . 'imageFileQuatre', '' . "\0" . 'App\\Entity\\Newsletter' . "\0" . 'imageNameQuatre', '' . "\0" . 'App\\Entity\\Newsletter' . "\0" . 'imageSize', '' . "\0" . 'App\\Entity\\Newsletter' . "\0" . 'updatedAt', '' . "\0" . 'App\\Entity\\Newsletter' . "\0" . 'presentation', '' . "\0" . 'App\\Entity\\Newsletter' . "\0" . 'salutation', '' . "\0" . 'App\\Entity\\Newsletter' . "\0" . 'textDesc', '' . "\0" . 'App\\Entity\\Newsletter' . "\0" . 'footerTextUn', '' . "\0" . 'App\\Entity\\Newsletter' . "\0" . 'footerTextDeux', '' . "\0" . 'App\\Entity\\Newsletter' . "\0" . 'footerTextTrois', '' . "\0" . 'App\\Entity\\Newsletter' . "\0" . 'footerTextQuatre', '' . "\0" . 'App\\Entity\\Newsletter' . "\0" . 'footerTextCinq', '' . "\0" . 'App\\Entity\\Newsletter' . "\0" . 'footerTextSix', '' . "\0" . 'App\\Entity\\Newsletter' . "\0" . 'footerTextSept', '' . "\0" . 'App\\Entity\\Newsletter' . "\0" . 'footerTextHuit'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Newsletter $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getImageFileUn(): ?\Symfony\Component\HttpFoundation\File\File
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageFileUn', []);

        return parent::getImageFileUn();
    }

    /**
     * {@inheritDoc}
     */
    public function setImageFileUn(\Symfony\Component\HttpFoundation\File\File $imageFileUn = NULL): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImageFileUn', [$imageFileUn]);

        parent::setImageFileUn($imageFileUn);
    }

    /**
     * {@inheritDoc}
     */
    public function getImageNameUn()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageNameUn', []);

        return parent::getImageNameUn();
    }

    /**
     * {@inheritDoc}
     */
    public function setImageNameUn(string $imageNameUn)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImageNameUn', [$imageNameUn]);

        return parent::setImageNameUn($imageNameUn);
    }

    /**
     * {@inheritDoc}
     */
    public function getImageFileDeux()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageFileDeux', []);

        return parent::getImageFileDeux();
    }

    /**
     * {@inheritDoc}
     */
    public function setImageFileDeux(\Symfony\Component\HttpFoundation\File\File $imageFileDeux = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImageFileDeux', [$imageFileDeux]);

        return parent::setImageFileDeux($imageFileDeux);
    }

    /**
     * {@inheritDoc}
     */
    public function getImageNameDeux()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageNameDeux', []);

        return parent::getImageNameDeux();
    }

    /**
     * {@inheritDoc}
     */
    public function setImageNameDeux(string $imageNameDeux)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImageNameDeux', [$imageNameDeux]);

        return parent::setImageNameDeux($imageNameDeux);
    }

    /**
     * {@inheritDoc}
     */
    public function getImageFileTrois(): ?\Symfony\Component\HttpFoundation\File\File
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageFileTrois', []);

        return parent::getImageFileTrois();
    }

    /**
     * {@inheritDoc}
     */
    public function setImageFileTrois(\Symfony\Component\HttpFoundation\File\File $imageFileTrois = NULL): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImageFileTrois', [$imageFileTrois]);

        parent::setImageFileTrois($imageFileTrois);
    }

    /**
     * {@inheritDoc}
     */
    public function getImageNameTrois()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageNameTrois', []);

        return parent::getImageNameTrois();
    }

    /**
     * {@inheritDoc}
     */
    public function setImageNameTrois(string $imageNameTrois): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImageNameTrois', [$imageNameTrois]);

        parent::setImageNameTrois($imageNameTrois);
    }

    /**
     * {@inheritDoc}
     */
    public function getImageFileQuatre(): ?\Symfony\Component\HttpFoundation\File\File
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageFileQuatre', []);

        return parent::getImageFileQuatre();
    }

    /**
     * {@inheritDoc}
     */
    public function setImageFileQuatre(\Symfony\Component\HttpFoundation\File\File $imageFileQuatre = NULL): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImageFileQuatre', [$imageFileQuatre]);

        parent::setImageFileQuatre($imageFileQuatre);
    }

    /**
     * {@inheritDoc}
     */
    public function getImageNameQuatre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageNameQuatre', []);

        return parent::getImageNameQuatre();
    }

    /**
     * {@inheritDoc}
     */
    public function setImageNameQuatre(string $imageNameQuatre): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImageNameQuatre', [$imageNameQuatre]);

        parent::setImageNameQuatre($imageNameQuatre);
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAtValue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAtValue', []);

        return parent::setCreatedAtValue();
    }

    /**
     * {@inheritDoc}
     */
    public function setImageFile(\Symfony\Component\HttpFoundation\File\File $imageFile = NULL): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImageFile', [$imageFile]);

        parent::setImageFile($imageFile);
    }

    /**
     * {@inheritDoc}
     */
    public function getImageFile(): ?\Symfony\Component\HttpFoundation\File\File
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageFile', []);

        return parent::getImageFile();
    }

    /**
     * {@inheritDoc}
     */
    public function setImageName(?string $imageName): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImageName', [$imageName]);

        parent::setImageName($imageName);
    }

    /**
     * {@inheritDoc}
     */
    public function getImageName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageName', []);

        return parent::getImageName();
    }

    /**
     * {@inheritDoc}
     */
    public function setImageSize(?int $imageSize): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImageSize', [$imageSize]);

        parent::setImageSize($imageSize);
    }

    /**
     * {@inheritDoc}
     */
    public function getImageSize(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageSize', []);

        return parent::getImageSize();
    }

    /**
     * {@inheritDoc}
     */
    public function getPresentation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPresentation', []);

        return parent::getPresentation();
    }

    /**
     * {@inheritDoc}
     */
    public function setPresentation(string $presentation): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPresentation', [$presentation]);

        parent::setPresentation($presentation);
    }

    /**
     * {@inheritDoc}
     */
    public function getSalutation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalutation', []);

        return parent::getSalutation();
    }

    /**
     * {@inheritDoc}
     */
    public function setSalutation(string $salutation): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSalutation', [$salutation]);

        parent::setSalutation($salutation);
    }

    /**
     * {@inheritDoc}
     */
    public function getTextDesc()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTextDesc', []);

        return parent::getTextDesc();
    }

    /**
     * {@inheritDoc}
     */
    public function setTextDesc(string $textDesc): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTextDesc', [$textDesc]);

        parent::setTextDesc($textDesc);
    }

    /**
     * {@inheritDoc}
     */
    public function getFooterTextUn()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFooterTextUn', []);

        return parent::getFooterTextUn();
    }

    /**
     * {@inheritDoc}
     */
    public function setFooterTextUn(string $footerTextUn): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFooterTextUn', [$footerTextUn]);

        parent::setFooterTextUn($footerTextUn);
    }

    /**
     * {@inheritDoc}
     */
    public function getFooterTextDeux()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFooterTextDeux', []);

        return parent::getFooterTextDeux();
    }

    /**
     * {@inheritDoc}
     */
    public function setFooterTextDeux(string $footerTextDeux): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFooterTextDeux', [$footerTextDeux]);

        parent::setFooterTextDeux($footerTextDeux);
    }

    /**
     * {@inheritDoc}
     */
    public function getFooterTextTrois()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFooterTextTrois', []);

        return parent::getFooterTextTrois();
    }

    /**
     * {@inheritDoc}
     */
    public function setFooterTextTrois(string $footerTextTrois): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFooterTextTrois', [$footerTextTrois]);

        parent::setFooterTextTrois($footerTextTrois);
    }

    /**
     * {@inheritDoc}
     */
    public function getFooterTextQuatre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFooterTextQuatre', []);

        return parent::getFooterTextQuatre();
    }

    /**
     * {@inheritDoc}
     */
    public function setFooterTextQuatre(string $footerTextQuatre): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFooterTextQuatre', [$footerTextQuatre]);

        parent::setFooterTextQuatre($footerTextQuatre);
    }

    /**
     * {@inheritDoc}
     */
    public function getFooterTextCinq()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFooterTextCinq', []);

        return parent::getFooterTextCinq();
    }

    /**
     * {@inheritDoc}
     */
    public function setFooterTextCinq(string $footerTextCinq): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFooterTextCinq', [$footerTextCinq]);

        parent::setFooterTextCinq($footerTextCinq);
    }

    /**
     * {@inheritDoc}
     */
    public function getFooterTextSix()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFooterTextSix', []);

        return parent::getFooterTextSix();
    }

    /**
     * {@inheritDoc}
     */
    public function setFooterTextSix(string $footerTextSix): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFooterTextSix', [$footerTextSix]);

        parent::setFooterTextSix($footerTextSix);
    }

    /**
     * {@inheritDoc}
     */
    public function getFooterTextSept()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFooterTextSept', []);

        return parent::getFooterTextSept();
    }

    /**
     * {@inheritDoc}
     */
    public function setFooterTextSept(string $footerTextSept): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFooterTextSept', [$footerTextSept]);

        parent::setFooterTextSept($footerTextSept);
    }

    /**
     * {@inheritDoc}
     */
    public function getFooterTextHuit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFooterTextHuit', []);

        return parent::getFooterTextHuit();
    }

    /**
     * {@inheritDoc}
     */
    public function setFooterTextHuit(string $footerTextHuit): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFooterTextHuit', [$footerTextHuit]);

        parent::setFooterTextHuit($footerTextHuit);
    }

}