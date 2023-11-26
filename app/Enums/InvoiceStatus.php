<?php

namespace App\Enums;

use App\Models\Invoice;
use App\StateMachines\Invoice\BaseInvoiceStateContract;
use App\StateMachines\Invoice\DraftInvoiceState;
use App\StateMachines\Invoice\OpenInvoiceState;
use InvalidArgumentException;

enum InvoiceStatus: string
{
    case DRAFT = 'draft';
    case OPEN = 'open';
    case PAID = 'paid';
    case VOID = 'void';
    case UNCOLLECTABLE = 'uncollectable';

    public function unlock(Invoice $context): BaseInvoiceStateContract
    {
        return match ($this) {
            InvoiceStatus::DRAFT => new DraftInvoiceState($context),
            InvoiceStatus::OPEN => new OpenInvoiceState($context),
            default => throw new InvalidArgumentException('Invalid invoice status'),
        };
    }
}
