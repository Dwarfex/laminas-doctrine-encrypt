<?php

namespace Encrypt\Service;

use Encrypt\Interfaces\EncryptionInterface;

class EncryptionService
{
    /**
     * @var EncryptionInterface
     */
    protected $adapter;

    /**
     * EncryptionService constructor.
     *
     * @param EncryptionInterface $adapter
     */
    public function __construct(EncryptionInterface $adapter)
    {
        $this->setAdapter($adapter);
    }

    /**
     * @param string $data
     *
     * @return string
     */
    public function encrypt(string $data) : string
    {
        return $this->getAdapter()->encrypt($data);
    }

    /**
     * @param string $data
     *
     * @return string
     */
    public function decrypt(string $data) : string
    {
        return $this->getAdapter()->decrypt($data);
    }

    /**
     * @return EncryptionInterface
     */
    protected function getAdapter() : EncryptionInterface
    {
        return $this->adapter;
    }

    /**
     * @param EncryptionInterface $adapter
     *
     * @return EncryptionService
     */
    protected function setAdapter(EncryptionInterface $adapter) : EncryptionService
    {
        $this->adapter = $adapter;

        return $this;
    }

}