<?php

namespace App\Models;

use App\Models\Business;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['code','name','qty','amount','business_id'];

    public function business() {
        return $this->belongsTo(Business::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

}
