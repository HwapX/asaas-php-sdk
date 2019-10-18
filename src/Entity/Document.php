<?php
namespace Softr\Asaas\Entity;

/**
 * Document Entity
 *
 * @author David Berri <dwbwill@gmail.com>
 */
final class Document extends \Softr\Asaas\Entity\AbstractEntity
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $status;

    /**
     * @var Array
     */
    public $lastVersion;
}
