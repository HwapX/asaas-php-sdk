<?php
namespace Softr\Asaas\Entity;

/**
 * Transfer Entity
 *
 * @author David Berri <dwbwill@gmail.com>
 */
final class Transfer extends \Softr\Asaas\Entity\AbstractEntity
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var float
     */
    public $value;

    /**
     * @var string
     */
    public $walletId;

    /**
     * @var array
     * [bank: [code: ""], accountName, ownerName,
     *  ownerBirthDate, cpfCnpj, agency, account,
     *  accountDigit, bankAccountType]
     */
    public $bankAccount;
}
