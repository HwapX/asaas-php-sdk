<?php

namespace Softr\Asaas\Entity;

/**
 * QrCode Entity
 *
 * @author Luis Henrique Barbosa de Lima <luis_hbl@yahoo.com.br>
 */
final class QrCode extends \Softr\Asaas\Entity\AbstractEntity
{
    /**
     * @var boolean
     */
    public $success;

    /**
     * @var string
     */
    public $encodedImage;

    /**
     * @var string
     */
    public $payload;

    /**
     * @var string
     */
    public $expirationDate;
}
