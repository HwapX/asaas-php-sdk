<?php
namespace Softr\Asaas\Api;

use Softr\Asaas\Entity\FinancialTransaction as FinancialTransactionEntity;

/**
 * FinancialTransaction API Endpoint
 *
 * @author David Berri <dwbwill@gmail.com>
 */
class FinancialTransaction extends \Softr\Asaas\Api\AbstractApi
{
    /**
     * Get all FinancialTransactions
     *
     * @param   array  $filters
     * @return  array
     */
    public function getAll(array $filters = [])
    {
        if (!isset($filters['limit'])) {
            $filters['limit']  = static::DEFAULT_LIMIT;
            $filters['offset'] = 0;
        }

        $extrato = $this->adapter->get(sprintf('%s/financialTransactions?%s', $this->endpoint, http_build_query($filters)));

        $extrato = json_decode($extrato);

        $meta = $this->extractMeta($extrato);

        $extratoData = $extrato->data;

        while ($meta->hasMore) {
            $filters['offset'] += $filters['offset'] > 0 ? $filters['limit'] : $filters['limit'] + 1;
            $extrato     = $this->adapter->get(sprintf('%s/financialTransactions?%s', $this->endpoint, http_build_query($filters)));
            $extrato     = json_decode($extrato);
            $meta        = $this->extractMeta($extrato);
            $extratoData = array_merge($extratoData, $extrato->data);
        }

        return array_map(function ($transaction) {
            return new FinancialTransactionEntity($transaction);
        }, $extratoData);
    }
}
