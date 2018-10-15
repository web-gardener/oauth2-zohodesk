<?php

namespace Bybrand\OAuth2\Client\Provider;

use League\OAuth2\Client\Provider\ResourceOwnerInterface;
use League\OAuth2\Client\Tool\ArrayAccessorTrait;

class ZohoDeskResourceOwner implements ResourceOwnerInterface
{
    use ArrayAccessorTrait;

    /**
     * Raw response
     *
     * @var array
     */
    protected $response;

    /**
     * Creates new resource owner.
     *
     * @param array  $response
     */
    public function __construct(array $response = array())
    {
        $this->response = $response;
    }

    /**
     * Get resource owner id
     *
     * @return string
     */
    public function getId()
    {
        return null;
        // return $this->getValueByKey($this->response, 'data.0.id');
    }

    // /**
    //  * Get resource owner name
    //  *
    //  * @return string|null
    //  */
    // public function getName()
    // {
    //     $name = $this->getValueByKey($this->response, 'data.0.organizationName') ?: '';
    //     return $name;
    // }

    /**
     * Return all of the owner details available as an array.
     *
     * @return array
     */
    public function toArray()
    {
        return $this->response;
    }
}
