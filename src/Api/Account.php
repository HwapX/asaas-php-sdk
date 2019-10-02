<?php
namespace Softr\Asaas\Api;

use Softr\Asaas\Entity\Account as AccountEntity;

/**
 * Account API Endpoint
 *
 * @author David Berri <dwbwill@gmail.com>
 */
class Account extends \Softr\Asaas\Api\AbstractApi
{
    /**
     * Creates new account
     *
     * @param   array  $data  Account Data
     * @return  AccountEntity
     */
    public function create(array $data)
    {
        $account = $this->adapter->post(sprintf('%s/accounts', $this->endpoint), $data);

        $account = json_decode($account);

        return new TransferEntity($account);
    }
}
