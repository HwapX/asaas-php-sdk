<?php

namespace Softr\Asaas\Entity;

/**
 * Webhook Entity
 *
 * @author David Berri <dwbwill@gmail.com>
 */
final class Webhook extends \Softr\Asaas\Entity\AbstractEntity
{
    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $email;

    /**
     * @var boolean
     */
    public $enabled;

    /**
     * @var boolean
     */
    public $interrupted;

    /**
     * @var integer
     */
    public $apiVersion;
}
