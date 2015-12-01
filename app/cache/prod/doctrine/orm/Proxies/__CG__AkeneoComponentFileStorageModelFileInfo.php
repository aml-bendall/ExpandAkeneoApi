<?php

namespace Proxies\__CG__\Akeneo\Component\FileStorage\Model;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class FileInfo extends \Akeneo\Component\FileStorage\Model\FileInfo implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
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
            return array('__isInitialized__', 'id', 'key', 'originalFilename', 'mimeType', 'size', 'extension', 'hash', 'storage', 'removed', 'uploadedFile');
        }

        return array('__isInitialized__', 'id', 'key', 'originalFilename', 'mimeType', 'size', 'extension', 'hash', 'storage', 'removed', 'uploadedFile');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (FileInfo $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
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


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', array($id));

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getOriginalFilename()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOriginalFilename', array());

        return parent::getOriginalFilename();
    }

    /**
     * {@inheritDoc}
     */
    public function setOriginalFilename($originalFilename)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOriginalFilename', array($originalFilename));

        return parent::setOriginalFilename($originalFilename);
    }

    /**
     * {@inheritDoc}
     */
    public function getMimeType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMimeType', array());

        return parent::getMimeType();
    }

    /**
     * {@inheritDoc}
     */
    public function setMimeType($mimeType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMimeType', array($mimeType));

        return parent::setMimeType($mimeType);
    }

    /**
     * {@inheritDoc}
     */
    public function getSize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSize', array());

        return parent::getSize();
    }

    /**
     * {@inheritDoc}
     */
    public function setSize($size)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSize', array($size));

        return parent::setSize($size);
    }

    /**
     * {@inheritDoc}
     */
    public function getExtension()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExtension', array());

        return parent::getExtension();
    }

    /**
     * {@inheritDoc}
     */
    public function setExtension($extension)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExtension', array($extension));

        return parent::setExtension($extension);
    }

    /**
     * {@inheritDoc}
     */
    public function getHash()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHash', array());

        return parent::getHash();
    }

    /**
     * {@inheritDoc}
     */
    public function setHash($hash)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHash', array($hash));

        return parent::setHash($hash);
    }

    /**
     * {@inheritDoc}
     */
    public function getStorage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStorage', array());

        return parent::getStorage();
    }

    /**
     * {@inheritDoc}
     */
    public function setStorage($storage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStorage', array($storage));

        return parent::setStorage($storage);
    }

    /**
     * {@inheritDoc}
     */
    public function getKey()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getKey', array());

        return parent::getKey();
    }

    /**
     * {@inheritDoc}
     */
    public function setKey($key)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setKey', array($key));

        return parent::setKey($key);
    }

    /**
     * {@inheritDoc}
     */
    public function getUploadedFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUploadedFile', array());

        return parent::getUploadedFile();
    }

    /**
     * {@inheritDoc}
     */
    public function setUploadedFile(\Symfony\Component\HttpFoundation\File\UploadedFile $uploadedFile = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUploadedFile', array($uploadedFile));

        return parent::setUploadedFile($uploadedFile);
    }

    /**
     * {@inheritDoc}
     */
    public function setRemoved($removed)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRemoved', array($removed));

        return parent::setRemoved($removed);
    }

    /**
     * {@inheritDoc}
     */
    public function isRemoved()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isRemoved', array());

        return parent::isRemoved();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

}