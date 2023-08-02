<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Banner extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'status', 'image', 'original_image', 'sort', 'link', 'title', 'description', 'page_id'];

    protected static function booted()
    {
        static::updating(function ($banner) {
            if ($banner->image != $banner->getOriginal('image')) {
                if (Storage::exists($banner->getOriginal('image')))
                    Storage::delete($banner->getOriginal('image'));
            }
            if ($banner->original_image != $banner->getOriginal('original_image')) {
                if (Storage::exists($banner->getOriginal('original_image')))
                    Storage::delete($banner->getOriginal('original_image'));
            }
        });

        static::deleting(function ($banner) {
            if ($banner->image && Storage::exists($banner->image))
                Storage::delete($banner->image);
            if ($banner->original_image && Storage::exists($banner->original_image))
                Storage::delete($banner->original_image);
        });
    }

    public function page()
    {
        return $this->belongsTo(Page::class, 'page_id');
    }
}
