<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'invoice_number',
        'invoice_date',
        'due_date',
        
        'customer_name',
        'customer_email',
        'customer_address',

        'notes',
        'subtotal',
        'tax',
        'total',


    ];

    public function items()
    {
        return $this->hasMany(InvoiceItem::class);
    }
}
