<?php
namespace Softr\Asaas\Api;

use Softr\Asaas\Entity\Transfer as TransferEntity;

/**
 * Transfer API Endpoint
 *
 * @author David Berri <dwbwill@gmail.com>
 */
class Transfer extends \Softr\Asaas\Api\AbstractApi
{
    /**
     * Create new transfer
     *
     * @param   array  $data  Transfer Data
     * @return  TransferEntity
     */
    public function create(array $data)
    {
        $transfer = $this->adapter->post(sprintf('%s/transfers', $this->endpoint), $data);

        $transfer = json_decode($transfer);

        return new TransferEntity($transfer);
    }
}
