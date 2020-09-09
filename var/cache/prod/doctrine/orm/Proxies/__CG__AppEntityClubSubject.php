<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ClubSubject extends \App\Entity\ClubSubject implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\ClubSubject' . "\0" . 'id', '' . "\0" . 'App\\Entity\\ClubSubject' . "\0" . 'title', '' . "\0" . 'App\\Entity\\ClubSubject' . "\0" . 'children', '' . "\0" . 'App\\Entity\\ClubSubject' . "\0" . 'parent', '' . "\0" . 'App\\Entity\\ClubSubject' . "\0" . 'list', '' . "\0" . 'App\\Entity\\ClubSubject' . "\0" . 'clubArticles'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\ClubSubject' . "\0" . 'id', '' . "\0" . 'App\\Entity\\ClubSubject' . "\0" . 'title', '' . "\0" . 'App\\Entity\\ClubSubject' . "\0" . 'children', '' . "\0" . 'App\\Entity\\ClubSubject' . "\0" . 'parent', '' . "\0" . 'App\\Entity\\ClubSubject' . "\0" . 'list', '' . "\0" . 'App\\Entity\\ClubSubject' . "\0" . 'clubArticles'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ClubSubject $proxy) {
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
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getStringedParents($stack = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStringedParents', [$stack]);

        return parent::getStringedParents($stack);
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
    public function setTitle($title)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', [$title]);

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', []);

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function addClubArticle(\App\Entity\ClubArticle $clubArticle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addClubArticle', [$clubArticle]);

        return parent::addClubArticle($clubArticle);
    }

    /**
     * {@inheritDoc}
     */
    public function removeClubArticle(\App\Entity\ClubArticle $clubArticle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeClubArticle', [$clubArticle]);

        return parent::removeClubArticle($clubArticle);
    }

    /**
     * {@inheritDoc}
     */
    public function getClubArticles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClubArticles', []);

        return parent::getClubArticles();
    }

    /**
     * {@inheritDoc}
     */
    public function addChild(\App\Entity\ClubSubject $child)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addChild', [$child]);

        return parent::addChild($child);
    }

    /**
     * {@inheritDoc}
     */
    public function removeChild(\App\Entity\ClubSubject $child)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeChild', [$child]);

        return parent::removeChild($child);
    }

    /**
     * {@inheritDoc}
     */
    public function getChildren()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChildren', []);

        return parent::getChildren();
    }

    /**
     * {@inheritDoc}
     */
    public function setParent(\App\Entity\ClubSubject $parent = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParent', [$parent]);

        return parent::setParent($parent);
    }

    /**
     * {@inheritDoc}
     */
    public function getParent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParent', []);

        return parent::getParent();
    }

    /**
     * {@inheritDoc}
     */
    public function getVisibleCount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVisibleCount', []);

        return parent::getVisibleCount();
    }

    /**
     * {@inheritDoc}
     */
    public function setList(\App\Entity\CategoryList $list = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setList', [$list]);

        return parent::setList($list);
    }

    /**
     * {@inheritDoc}
     */
    public function getList()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getList', []);

        return parent::getList();
    }

}
