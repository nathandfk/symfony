<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Posts extends \App\Entity\Posts implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Posts' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Posts' . "\0" . 'user', '' . "\0" . 'App\\Entity\\Posts' . "\0" . 'dwelling', '' . "\0" . 'App\\Entity\\Posts' . "\0" . 'type', '' . "\0" . 'App\\Entity\\Posts' . "\0" . 'title', '' . "\0" . 'App\\Entity\\Posts' . "\0" . 'abstract', '' . "\0" . 'App\\Entity\\Posts' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Posts' . "\0" . 'statut', '' . "\0" . 'App\\Entity\\Posts' . "\0" . 'number', '' . "\0" . 'App\\Entity\\Posts' . "\0" . 'picture', '' . "\0" . 'App\\Entity\\Posts' . "\0" . 'addedAt', '' . "\0" . 'App\\Entity\\Posts' . "\0" . 'updatedAt', '' . "\0" . 'App\\Entity\\Posts' . "\0" . 'postMetas', '' . "\0" . 'App\\Entity\\Posts' . "\0" . 'dwellings', '' . "\0" . 'App\\Entity\\Posts' . "\0" . 'deletedAt'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Posts' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Posts' . "\0" . 'user', '' . "\0" . 'App\\Entity\\Posts' . "\0" . 'dwelling', '' . "\0" . 'App\\Entity\\Posts' . "\0" . 'type', '' . "\0" . 'App\\Entity\\Posts' . "\0" . 'title', '' . "\0" . 'App\\Entity\\Posts' . "\0" . 'abstract', '' . "\0" . 'App\\Entity\\Posts' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Posts' . "\0" . 'statut', '' . "\0" . 'App\\Entity\\Posts' . "\0" . 'number', '' . "\0" . 'App\\Entity\\Posts' . "\0" . 'picture', '' . "\0" . 'App\\Entity\\Posts' . "\0" . 'addedAt', '' . "\0" . 'App\\Entity\\Posts' . "\0" . 'updatedAt', '' . "\0" . 'App\\Entity\\Posts' . "\0" . 'postMetas', '' . "\0" . 'App\\Entity\\Posts' . "\0" . 'dwellings', '' . "\0" . 'App\\Entity\\Posts' . "\0" . 'deletedAt'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Posts $proxy) {
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
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
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
    public function getUser(): ?\App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(?\App\Entity\Users $user): \App\Entity\Posts
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getDwelling(): ?\App\Entity\Dwelling
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDwelling', []);

        return parent::getDwelling();
    }

    /**
     * {@inheritDoc}
     */
    public function setDwelling(?\App\Entity\Dwelling $dwelling): \App\Entity\Posts
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDwelling', [$dwelling]);

        return parent::setDwelling($dwelling);
    }

    /**
     * {@inheritDoc}
     */
    public function getType(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function setType(string $type): \App\Entity\Posts
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', []);

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle(string $title): \App\Entity\Posts
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', [$title]);

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getAbstract(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAbstract', []);

        return parent::getAbstract();
    }

    /**
     * {@inheritDoc}
     */
    public function setAbstract(string $abstract): \App\Entity\Posts
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAbstract', [$abstract]);

        return parent::setAbstract($abstract);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription(string $description): \App\Entity\Posts
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatut(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatut', []);

        return parent::getStatut();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatut(?string $statut): \App\Entity\Posts
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatut', [$statut]);

        return parent::setStatut($statut);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumber(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumber', []);

        return parent::getNumber();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumber(?int $number): \App\Entity\Posts
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumber', [$number]);

        return parent::setNumber($number);
    }

    /**
     * {@inheritDoc}
     */
    public function getPicture(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPicture', []);

        return parent::getPicture();
    }

    /**
     * {@inheritDoc}
     */
    public function setPicture(?string $picture): \App\Entity\Posts
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPicture', [$picture]);

        return parent::setPicture($picture);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddedAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddedAt', []);

        return parent::getAddedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddedAt(\DateTimeInterface $addedAt): \App\Entity\Posts
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddedAt', [$addedAt]);

        return parent::setAddedAt($addedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt(\DateTimeInterface $updatedAt): \App\Entity\Posts
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getPostMetas(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPostMetas', []);

        return parent::getPostMetas();
    }

    /**
     * {@inheritDoc}
     */
    public function addPostMeta(\App\Entity\PostMeta $postMeta): \App\Entity\Posts
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPostMeta', [$postMeta]);

        return parent::addPostMeta($postMeta);
    }

    /**
     * {@inheritDoc}
     */
    public function removePostMeta(\App\Entity\PostMeta $postMeta): \App\Entity\Posts
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePostMeta', [$postMeta]);

        return parent::removePostMeta($postMeta);
    }

    /**
     * {@inheritDoc}
     */
    public function getDwellings(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDwellings', []);

        return parent::getDwellings();
    }

    /**
     * {@inheritDoc}
     */
    public function addDwelling(\App\Entity\Dwelling $dwelling): \App\Entity\Posts
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addDwelling', [$dwelling]);

        return parent::addDwelling($dwelling);
    }

    /**
     * {@inheritDoc}
     */
    public function removeDwelling(\App\Entity\Dwelling $dwelling): \App\Entity\Posts
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeDwelling', [$dwelling]);

        return parent::removeDwelling($dwelling);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeletedAt(): ?\DateTimeImmutable
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeletedAt', []);

        return parent::getDeletedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeletedAt(?\DateTimeImmutable $deletedAt): \App\Entity\Posts
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeletedAt', [$deletedAt]);

        return parent::setDeletedAt($deletedAt);
    }

}
