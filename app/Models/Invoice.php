<?php

namespace App\Models;

use App\Enums\InvoiceStatus;
use App\StateMachines\InterfaceInvoiceStateContract;
use App\StateMachines\Invoice\BaseInvoiceStateContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string id
 * @property string status
 */
class Invoice extends Model
{
    use HasFactory;

    protected $attributes = [
        'status' => 'draft'
    ];

    public function state(): BaseInvoiceStateContract
    {
        return InvoiceStatus::from($this->status)->unlock($this);
    }

    public function get($columns = ['*']): array
    {
        return $this->attributes;
    }

    public function setAttribute($key, $value): void
    {
        $this->attributes[$key] = $value;
    }

    public function getAttribute($key): string
    {
        return $this->attributes[$key];
    }
}
