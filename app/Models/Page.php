<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'page_type', 'content'];

    public function meta()
    {
        return $this->hasOne(Meta::class, 'page_id', 'id');
    }
}
