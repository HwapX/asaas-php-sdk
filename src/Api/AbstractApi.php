<?php
namespace Softr\Asaas\Api;

use Softr\Asaas\Adapter\AdapterInterface;
use Softr\Asaas\Entity\Meta;

/**
 * Abstract API
 *
 * @author Agência Softr <agencia.softr@gmail.com>
 */
abstract class AbstractApi
{
    /**
     * Endpoint Produção
     *
     * @var string
     */
    const ENDPOINT_PRODUCAO = 'https://www.asaas.com/api/';

    /**
     * Endpoint Sandbox
     *
     * @var string
     */
    const ENDPOINT_SANDBOX = 'https://sandbox.asaas.com/api/';

    /**
     * Http Adapter Instance
     *
     * @var AdapterInterface
     */
    protected $adapter;

    /**
     * Api Endpoint
     *
     * @var string
     */
    protected $endpoint;

    /**
     * @var Meta
     */
    protected $meta;

    /**
     * Constructor
     *
     * @param  AdapterInterface  $adapter   Adapter Instance
     * @param  string            $ambiente  (optional) Ambiente da API
     */
    public function __construct(AdapterInterface $adapter, $ambiente = 'producao', $versao = 'v3')
    {
        $this->adapter = $adapter;

        switch ($ambiente) {
            case 'sandbox':
                $this->endpoint = static::ENDPOINT_SANDBOX . $versao;
                break;
            default:
                $this->endpoint = static::ENDPOINT_PRODUCAO . $versao;
        }
    }

    /**
     * Extract results meta
     *
     * @param   \stdClass  $data  Meta data
     * @return  Meta
     */
    protected function extractMeta(\StdClass $data)
    {
        $this->meta = new Meta($data);

        return $this->meta;
    }

    /**
     * Return results meta
     *
     * @return  Meta
     */
    public function getMeta()
    {
        return $this->meta;
    }
}
