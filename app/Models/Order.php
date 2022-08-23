<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'table_number',
        'status',
        'total_cents',
        'menu_id',
        'establishment_id',
    ];

    public function establishment()
    {
        return $this->belongsTo(Establishment::class);
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
