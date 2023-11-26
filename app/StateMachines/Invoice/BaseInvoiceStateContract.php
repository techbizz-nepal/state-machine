<?php

namespace App\StateMachines\Invoice;

use App\Models\Invoice;
use Exception;

class BaseInvoiceStateContract implements InterfaceInvoiceStateContract
{
    const DEFAULT_MSG = "action not defined";

    public function __construct(protected Invoice $invoice)
    {
    }

    /**
     * @throws Exception
     */
    public function finalize()
    {
        throw new Exception(sprintf("%s %s in %s state", "finalize", static::DEFAULT_MSG, $this->model->status));
    }

    /**
     * @throws Exception
     */
    public function pay()
    {
        throw new Exception(sprintf("%s %s in %s state", "pay", static::DEFAULT_MSG, $this->model->status));
    }

    /**
     * @throws Exception
     */
    public function void()
    {
        throw new Exception(sprintf("%s %s in %s state", "void", static::DEFAULT_MSG, $this->model->status));
    }

    /**
     * @throws Exception
     */
    public function cancel()
    {
        throw new Exception(sprintf("%s %s in %s state", "cancel", static::DEFAULT_MSG, $this->model->status));
    }
}
