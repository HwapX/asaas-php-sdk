<?php
namespace Softr\Asaas\Api;

/**
 * Customer Fiscal Info API Endpoint
 *
 * @author David Berri <dwbwill@gmail.com>
 */
class CustomerFiscalInfo extends \Softr\Asaas\Api\AbstractApi
{
    public function index()
    {
        $info = $this->adapter->get(sprintf('%s/customerFiscalInfo', $this->endpoint));

        return json_decode($info);
    }

    public function update(array $data)
    {
        $info = $this->adapter->post(sprintf('%s/customerFiscalInfo'), $data);

        return json_decode($info);
    }

    public function getMunicipalOptions()
    {
        $info = $this->adapter->get(sprintf('%s/customerFiscalInfo/municipalOptions', $this->endpoint));

        return json_decode($info);
    }
}
