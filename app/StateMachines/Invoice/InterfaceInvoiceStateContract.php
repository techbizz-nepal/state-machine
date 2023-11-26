<?php

namespace App\StateMachines\Invoice;
interface InterfaceInvoiceStateContract
{
    public function finalize();

    public function pay();

    public function void();

    public function cancel();
}
