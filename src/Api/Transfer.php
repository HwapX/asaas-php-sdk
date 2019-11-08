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
     * Get all transfers
     *
     * @param   array  $filters  (optional) Filters Array
     * @return  array  Subscriptions Array
     */
    public function getAll(array $filters = [])
    {
        $transfers = $this->adapter->get(sprintf('%s/transfers?%s', $this->endpoint, http_build_query($filters)));

        $transfers = json_decode($transfers);

        $this->extractMeta($transfers);

        return array_map(function ($subscription) {
            return new TransferEntity($subscription->subscription);
        }, $transfers->data);
    }

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

    /**
     * Get Transfer By Id
     *
     * @param   int  $id  Transfer Id
     * @return  PaymentEntity
     */
    public function getById($id)
    {
        $transfer = $this->adapter->get(sprintf('%s/transfers/%s', $this->endpoint, $id));

        $transfer = json_decode($transfer);

        return new TransferEntity($transfer);
    }
}
