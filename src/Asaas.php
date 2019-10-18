<?php
namespace Softr\Asaas;

// API's
use Softr\Asaas\Adapter\AdapterInterface;
use Softr\Asaas\Api\Account;
use Softr\Asaas\Api\Customer;
use Softr\Asaas\Api\Document;
use Softr\Asaas\Api\Notification;
use Softr\Asaas\Api\Payment;
use Softr\Asaas\Api\Subscription;
use Softr\Asaas\Api\Transfer;

/**
 * Asass API Wrapper
 *
 * @author Agência Softr <agencia.softr@gmail.com>
 */
class Asaas
{
    /**
     * Adapter Interface
     *
     * @var  AdapterInterface
     */
    protected $adapter;

    /**
     * Ambiente da API
     *
     * @var  string
     */
    protected $ambiente;

    /**
     * Versão da API
     *
     * @var  string
     */
    protected $versao;

    /**
     * Constructor
     *
     * @param  AdapterInterface  $adapter   Adapter Instance
     * @param  string            $ambiente  (optional) Ambiente da API
     */
    public function __construct(AdapterInterface $adapter, $ambiente = 'producao', $versao = 'v3')
    {
        $this->adapter = $adapter;

        $this->ambiente = $ambiente;

        $this->versao = $versao;
    }

    /**
     * Get customer endpoint
     *
     * @return  Customer
     */
    public function customer()
    {
        return new Customer($this->adapter, $this->ambiente, $this->versao);
    }

    /**
     * Get subscription endpoint
     *
     * @return  Subscription
     */
    public function subscription()
    {
        return new Subscription($this->adapter, $this->ambiente, $this->versao);
    }

    /**
     * Get payment endpoint
     *
     * @return  Payment
     */
    public function payment()
    {
        return new Payment($this->adapter, $this->ambiente, $this->versao);
    }

    /**
     * Get Notification API Endpoint
     *
     * @return  Notification
     */
    public function notification()
    {
        return new Notification($this->adapter, $this->ambiente, $this->versao);
    }

    /**
     * Get transfer endpoint
     *
     * @return  Transfer
     */
    public function transfer()
    {
        return new Transfer($this->adapter, $this->ambiente, $this->versao);
    }

    /**
     * Get Account endpoint
     *
     * @return  Account
     */
    public function account()
    {
        return new Account($this->adapter, $this->ambiente, $this->versao);
    }

    /**
     * Get Document endpoint
     *
     * @return  Document
     */
    public function document()
    {
        return new Document($this->adapter, $this->ambiente, $this->versao);
    }
}
