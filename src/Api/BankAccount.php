<?php
namespace Softr\Asaas\Api;

use Softr\Asaas\Entity\BankAccount as BankAccountEntity;

/**
 * BankAccount API Endpoint
 *
 * @author David Berri <dwbwill@gmail.com>
 */
class BankAccount extends \Softr\Asaas\Api\AbstractApi
{
    public function getAll()
    {
        $balance = $this->adapter->get(sprintf('%s/bankAccounts/mainAccount', $this->endpoint));

        return new BankAccountEntity(json_decode($balance));
    }

    /**
     * Creates new BankAccount
     *
     * @param   array  $data  BankAccount Data
     * @return  BankAccountEntity
     */
    public function create(array $data)
    {
        $bankAccount = $this->adapter->post(sprintf('%s/bankAccounts/mainAccount', $this->endpoint), $data);

        $bankAccount = json_decode($bankAccount);

        return new BankAccountEntity($bankAccount);
    }
}
