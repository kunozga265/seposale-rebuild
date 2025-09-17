<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

     public function variants()
    {
        return $this->hasMany(ProductVariant::class);
    }

  

    protected $fillable = [
        "name",
        "photo",
        "cogs_account_id",
        "inventory_account_id",
        "revenue_account_id",
    ];
}
