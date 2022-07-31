<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Dwelling extends \App\Entity\Dwelling implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Dwelling' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Dwelling' . "\0" . 'user', '' . "\0" . 'App\\Entity\\Dwelling' . "\0" . 'type', '' . "\0" . 'App\\Entity\\Dwelling' . "\0" . 'pictures', '' . "\0" . 'App\\Entity\\Dwelling' . "\0" . 'title', '' . "\0" . 'App\\Entity\\Dwelling' . "\0" . 'abstract', '' . "\0" . 'App\\Entity\\Dwelling' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Dwelling' . "\0" . 'price', '' . "\0" . 'App\\Entity\\Dwelling' . "\0" . 'equipments', '' . "\0" . 'App\\Entity\\Dwelling' . "\0" . 'address', '' . "\0" . 'App\\Entity\\Dwelling' . "\0" . 'complAddress', '' . "\0" . 'App\\Entity\\Dwelling' . "\0" . 'country', '' . "\0" . 'App\\Entity\\Dwelling' . "\0" . 'city', '' . "\0" . 'App\\Entity\\Dwelling' . "\0" . 'state', '' . "\0" . 'App\\Entity\\Dwelling' . "\0" . 'longitude', '' . "\0" . 'App\\Entity\\Dwelling' . "\0" . 'latitude', '' . "\0" . 'App\\Entity\\Dwelling' . "\0" . 'activate', '' . "\0" . 'App\\Entity\\Dwelling' . "\0" . 'addedAt', '' . "\0" . 'App\\Entity\\Dwelling' . "\0" . 'updatedAt', '' . "\0" . 'App\\Entity\\Dwelling' . "\0" . 'dwellingMetas', '' . "\0" . 'App\\Entity\\Dwelling' . "\0" . 'posts', '' . "\0" . 'App\\Entity\\Dwelling' . "\0" . 'reservations', '' . "\0" . 'App\\Entity\\Dwelling' . "\0" . 'deletedAt'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Dwelling' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Dwelling' . "\0" . 'user', '' . "\0" . 'App\\Entity\\Dwelling' . "\0" . 'type', '' . "\0" . 'App\\Entity\\Dwelling' . "\0" . 'pictures', '' . "\0" . 'App\\Entity\\Dwelling' . "\0" . 'title', '' . "\0" . 'App\\Entity\\Dwelling' . "\0" . 'abstract', '' . "\0" . 'App\\Entity\\Dwelling' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Dwelling' . "\0" . 'price', '' . "\0" . 'App\\Entity\\Dwelling' . "\0" . 'equipments', '' . "\0" . 'App\\Entity\\Dwelling' . "\0" . 'address', '' . "\0" . 'App\\Entity\\Dwelling' . "\0" . 'complAddress', '' . "\0" . 'App\\Entity\\Dwelling' . "\0" . 'country', '' . "\0" . 'App\\Entity\\Dwelling' . "\0" . 'city', '' . "\0" . 'App\\Entity\\Dwelling' . "\0" . 'state', '' . "\0" . 'App\\Entity\\Dwelling' . "\0" . 'longitude', '' . "\0" . 'App\\Entity\\Dwelling' . "\0" . 'latitude', '' . "\0" . 'App\\Entity\\Dwelling' . "\0" . 'activate', '' . "\0" . 'App\\Entity\\Dwelling' . "\0" . 'addedAt', '' . "\0" . 'App\\Entity\\Dwelling' . "\0" . 'updatedAt', '' . "\0" . 'App\\Entity\\Dwelling' . "\0" . 'dwellingMetas', '' . "\0" . 'App\\Entity\\Dwelling' . "\0" . 'posts', '' . "\0" . 'App\\Entity\\Dwelling' . "\0" . 'reservations', '' . "\0" . 'App\\Entity\\Dwelling' . "\0" . 'deletedAt'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Dwelling $proxy) {
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
    public function setUser(?\App\Entity\Users $user): \App\Entity\Dwelling
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function setType($type): \App\Entity\Dwelling
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getPictures(): ?array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPictures', []);

        return parent::getPictures();
    }

    /**
     * {@inheritDoc}
     */
    public function setPictures(?array $pictures): \App\Entity\Dwelling
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPictures', [$pictures]);

        return parent::setPictures($pictures);
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
    public function setTitle(string $title): \App\Entity\Dwelling
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
    public function setAbstract(string $abstract): \App\Entity\Dwelling
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
    public function setDescription(string $description): \App\Entity\Dwelling
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrice(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrice', []);

        return parent::getPrice();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrice(float $price): \App\Entity\Dwelling
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrice', [$price]);

        return parent::setPrice($price);
    }

    /**
     * {@inheritDoc}
     */
    public function getEquipments(): ?array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEquipments', []);

        return parent::getEquipments();
    }

    /**
     * {@inheritDoc}
     */
    public function setEquipments(array $equipments): \App\Entity\Dwelling
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEquipments', [$equipments]);

        return parent::setEquipments($equipments);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddress(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddress', []);

        return parent::getAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddress(string $address): \App\Entity\Dwelling
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddress', [$address]);

        return parent::setAddress($address);
    }

    /**
     * {@inheritDoc}
     */
    public function getComplAddress(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComplAddress', []);

        return parent::getComplAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setComplAddress(?string $complAddress): \App\Entity\Dwelling
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setComplAddress', [$complAddress]);

        return parent::setComplAddress($complAddress);
    }

    /**
     * {@inheritDoc}
     */
    public function getCountry()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCountry', []);

        return parent::getCountry();
    }

    /**
     * {@inheritDoc}
     */
    public function setCountry($country): \App\Entity\Dwelling
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCountry', [$country]);

        return parent::setCountry($country);
    }

    /**
     * {@inheritDoc}
     */
    public function getCity(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCity', []);

        return parent::getCity();
    }

    /**
     * {@inheritDoc}
     */
    public function setCity(string $city): \App\Entity\Dwelling
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCity', [$city]);

        return parent::setCity($city);
    }

    /**
     * {@inheritDoc}
     */
    public function getState(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getState', []);

        return parent::getState();
    }

    /**
     * {@inheritDoc}
     */
    public function setState(string $state): \App\Entity\Dwelling
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setState', [$state]);

        return parent::setState($state);
    }

    /**
     * {@inheritDoc}
     */
    public function getLongitude(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLongitude', []);

        return parent::getLongitude();
    }

    /**
     * {@inheritDoc}
     */
    public function setLongitude(float $longitude): \App\Entity\Dwelling
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLongitude', [$longitude]);

        return parent::setLongitude($longitude);
    }

    /**
     * {@inheritDoc}
     */
    public function getLatitude(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLatitude', []);

        return parent::getLatitude();
    }

    /**
     * {@inheritDoc}
     */
    public function setLatitude(float $latitude): \App\Entity\Dwelling
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLatitude', [$latitude]);

        return parent::setLatitude($latitude);
    }

    /**
     * {@inheritDoc}
     */
    public function isActivate(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isActivate', []);

        return parent::isActivate();
    }

    /**
     * {@inheritDoc}
     */
    public function setActivate(bool $activate): \App\Entity\Dwelling
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActivate', [$activate]);

        return parent::setActivate($activate);
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
    public function setAddedAt(?\DateTimeInterface $addedAt): \App\Entity\Dwelling
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
    public function setUpdatedAt(?\DateTimeInterface $updatedAt): \App\Entity\Dwelling
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        return parent::setUpdatedAt($updatedAt);
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
    public function setDeletedAt(?\DateTimeImmutable $deletedAt): \App\Entity\Dwelling
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeletedAt', [$deletedAt]);

        return parent::setDeletedAt($deletedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getDwellingMetas(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDwellingMetas', []);

        return parent::getDwellingMetas();
    }

    /**
     * {@inheritDoc}
     */
    public function addDwellingMeta(\App\Entity\DwellingMeta $dwellingMeta): \App\Entity\Dwelling
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addDwellingMeta', [$dwellingMeta]);

        return parent::addDwellingMeta($dwellingMeta);
    }

    /**
     * {@inheritDoc}
     */
    public function removeDwellingMeta(\App\Entity\DwellingMeta $dwellingMeta): \App\Entity\Dwelling
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeDwellingMeta', [$dwellingMeta]);

        return parent::removeDwellingMeta($dwellingMeta);
    }

    /**
     * {@inheritDoc}
     */
    public function getPosts(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPosts', []);

        return parent::getPosts();
    }

    /**
     * {@inheritDoc}
     */
    public function addPost(\App\Entity\Posts $post): \App\Entity\Dwelling
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPost', [$post]);

        return parent::addPost($post);
    }

    /**
     * {@inheritDoc}
     */
    public function removePost(\App\Entity\Posts $post): \App\Entity\Dwelling
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePost', [$post]);

        return parent::removePost($post);
    }

    /**
     * {@inheritDoc}
     */
    public function getReservations(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReservations', []);

        return parent::getReservations();
    }

    /**
     * {@inheritDoc}
     */
    public function addReservation(\App\Entity\Reservation $reservation): \App\Entity\Dwelling
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addReservation', [$reservation]);

        return parent::addReservation($reservation);
    }

    /**
     * {@inheritDoc}
     */
    public function removeReservation(\App\Entity\Reservation $reservation): \App\Entity\Dwelling
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeReservation', [$reservation]);

        return parent::removeReservation($reservation);
    }

}
