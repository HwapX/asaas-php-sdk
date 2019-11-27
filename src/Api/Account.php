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

        return new AccountEntity($account);
    }

    /**
     * Updates configurations in the account
     *
     * One use case is ["enableAutomaticTransfer" => true]
     *
     * @param   array  $data  Configuration data
     * @return  AccountEntity
     */
    public function updateConfig(array $data = [])
    {
        $account = $this->adapter->post(sprintf('%s/accounts/updateConfig', $this->endpoint), $data);

        return json_decode($account);
    }
}
