<?php


namespace App\StateMachines\Invoice;
class DraftInvoiceState extends BaseInvoiceStateContract
{
    public function finalize(): void
    {
        $this->invoice->status = "open";
    }
}
