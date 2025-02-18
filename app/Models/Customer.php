<?php

namespace App\Models;

use Database\Factories\CustomerFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /** @use HasFactory<CustomerFactory> */
    protected $fillable = ['name',
        'type',
        'email',
        'address',
        'city',
        'state',
        'postal_code'

        ];
    use HasFactory;
    public function invoices()
    {
        return $this->HasMany(Invoice::class);
    }
}
