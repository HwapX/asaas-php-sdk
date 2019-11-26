<?php

namespace Softr\Asaas\Entity;

/**
 * FinanctialTransaction Entity
 *
 * @author David Berri <dwbwill@gmail.com>
 */
final class FinancialTransaction extends \Softr\Asaas\Entity\AbstractEntity
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var float
     */
    public $value;

    /**
     * @var float
     */
    public $balance;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string (Y-m-d)
     */
    public $date;

    /**
     * @var string
     */
    public $description;
}
