<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Users extends \App\Entity\Users implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'firstName', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'lastName', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'society', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'birthday', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'email', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'phoneNumber', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'roles', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'address', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'complAddress', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'Country', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'city', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'activationKey', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'statut', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'host', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'password', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'addedAt', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'updatedAt', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'userMetas', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'dwellings', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'posts', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'reservations', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'messages', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'account', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'deletedAt'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'firstName', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'lastName', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'society', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'birthday', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'email', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'phoneNumber', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'roles', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'address', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'complAddress', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'Country', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'city', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'activationKey', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'statut', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'host', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'password', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'addedAt', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'updatedAt', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'userMetas', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'dwellings', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'posts', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'reservations', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'messages', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'account', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'deletedAt'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Users $proxy) {
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
    public function getFirstName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstName', []);

        return parent::getFirstName();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirstName(string $firstName): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstName', [$firstName]);

        return parent::setFirstName($firstName);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastName', []);

        return parent::getLastName();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastName(string $lastName): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastName', [$lastName]);

        return parent::setLastName($lastName);
    }

    /**
     * {@inheritDoc}
     */
    public function getSociety(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSociety', []);

        return parent::getSociety();
    }

    /**
     * {@inheritDoc}
     */
    public function setSociety(?string $society): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSociety', [$society]);

        return parent::setSociety($society);
    }

    /**
     * {@inheritDoc}
     */
    public function getBirthday(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBirthday', []);

        return parent::getBirthday();
    }

    /**
     * {@inheritDoc}
     */
    public function setBirthday(?\DateTimeInterface $birthday): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBirthday', [$birthday]);

        return parent::setBirthday($birthday);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail(string $email): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserIdentifier(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserIdentifier', []);

        return parent::getUserIdentifier();
    }

    /**
     * {@inheritDoc}
     */
    public function getPhoneNumber(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhoneNumber', []);

        return parent::getPhoneNumber();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhoneNumber(?string $phoneNumber): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhoneNumber', [$phoneNumber]);

        return parent::setPhoneNumber($phoneNumber);
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function setRoles(array $roles): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoles', [$roles]);

        return parent::setRoles($roles);
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
    public function setAddress(string $address): \App\Entity\Users
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
    public function setComplAddress(?string $complAddress): \App\Entity\Users
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
    public function setCountry($Country): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCountry', [$Country]);

        return parent::setCountry($Country);
    }

    /**
     * {@inheritDoc}
     */
    public function getCity(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCity', []);

        return parent::getCity();
    }

    /**
     * {@inheritDoc}
     */
    public function setCity(string $city): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCity', [$city]);

        return parent::setCity($city);
    }

    /**
     * {@inheritDoc}
     */
    public function getActivationKey(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActivationKey', []);

        return parent::getActivationKey();
    }

    /**
     * {@inheritDoc}
     */
    public function setActivationKey(?string $activationKey): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActivationKey', [$activationKey]);

        return parent::setActivationKey($activationKey);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatut(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatut', []);

        return parent::getStatut();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatut(?bool $statut): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatut', [$statut]);

        return parent::setStatut($statut);
    }

    /**
     * {@inheritDoc}
     */
    public function getHost(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHost', []);

        return parent::getHost();
    }

    /**
     * {@inheritDoc}
     */
    public function setHost(?string $host): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHost', [$host]);

        return parent::setHost($host);
    }

    /**
     * {@inheritDoc}
     */
    public function isAccount(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAccount', []);

        return parent::isAccount();
    }

    /**
     * {@inheritDoc}
     */
    public function setAccount(bool $account): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAccount', [$account]);

        return parent::setAccount($account);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddedAt(): ?\DateTimeImmutable
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddedAt', []);

        return parent::getAddedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddedAt(?\DateTimeImmutable $addedAt): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddedAt', [$addedAt]);

        return parent::setAddedAt($addedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt(): ?\DateTimeImmutable
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt(?\DateTimeImmutable $updatedAt): \App\Entity\Users
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
    public function setDeletedAt(?\DateTimeImmutable $deletedAt): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeletedAt', [$deletedAt]);

        return parent::setDeletedAt($deletedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserMetas(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserMetas', []);

        return parent::getUserMetas();
    }

    /**
     * {@inheritDoc}
     */
    public function addUserMeta(\App\Entity\UserMeta $userMeta): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addUserMeta', [$userMeta]);

        return parent::addUserMeta($userMeta);
    }

    /**
     * {@inheritDoc}
     */
    public function removeUserMeta(\App\Entity\UserMeta $userMeta): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeUserMeta', [$userMeta]);

        return parent::removeUserMeta($userMeta);
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
    public function addDwelling(\App\Entity\Dwelling $dwelling): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addDwelling', [$dwelling]);

        return parent::addDwelling($dwelling);
    }

    /**
     * {@inheritDoc}
     */
    public function removeDwelling(\App\Entity\Dwelling $dwelling): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeDwelling', [$dwelling]);

        return parent::removeDwelling($dwelling);
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
    public function addPost(\App\Entity\Posts $post): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPost', [$post]);

        return parent::addPost($post);
    }

    /**
     * {@inheritDoc}
     */
    public function removePost(\App\Entity\Posts $post): \App\Entity\Users
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
    public function addReservation(\App\Entity\Reservation $reservation): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addReservation', [$reservation]);

        return parent::addReservation($reservation);
    }

    /**
     * {@inheritDoc}
     */
    public function removeReservation(\App\Entity\Reservation $reservation): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeReservation', [$reservation]);

        return parent::removeReservation($reservation);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword(string $password): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        return parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function getMessages(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMessages', []);

        return parent::getMessages();
    }

    /**
     * {@inheritDoc}
     */
    public function addMessage(\App\Entity\Message $message): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMessage', [$message]);

        return parent::addMessage($message);
    }

    /**
     * {@inheritDoc}
     */
    public function removeMessage(\App\Entity\Message $message): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeMessage', [$message]);

        return parent::removeMessage($message);
    }

}
