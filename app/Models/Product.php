<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Product extends Model implements HasMedia
{
    use HasSlug, InteractsWithMedia;

    protected $fillable = ['title'];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->usingLanguage('')
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug')
            ->slugsShouldBeNoLongerThan(191)
            ->doNotGenerateSlugsOnUpdate();
    }

    //start media-library
    protected $with = ['media'];

    protected $hidden = ['media'];

    protected $appends = ['image', 'galleries'];

    public function registerMediaCollections() : void
    {
        $this->addMediaCollection('product_images')->singleFile();
        $this->addMediaCollection('product_galleries');
    }

    protected function image(): Attribute
    {
        $media = $this->getFirstMedia('product_images');

        return Attribute::make(
            get: fn () => [
                'id' => $media?->id,
                'url' => $media?->getFullUrl(),
                'name' => $media?->file_name
            ],
        );
    }

    protected function galleries(): Attribute
    {
        $media = $this->getMedia('product_galleries');

        $galleries = [];
        if ($media->count()) {
            foreach ($media as $mediaItem) {
                $galleries[] = [
                    'id' => $mediaItem?->id,
                    'url' => $mediaItem?->getFullUrl(),
                    'name' => $mediaItem?->file_name
                ];
            }
        }

        return Attribute::make(
            get: fn () => $galleries,
        );
    }

    /**
     * @throws FileDoesNotExist
     * @throws FileIsTooBig
     */
    public function addImage(UploadedFile $file): bool|\Spatie\MediaLibrary\MediaCollections\Models\Media
    {
        return $this->addMedia($file)->toMediaCollection('product_images');
    }

    /**
     * @throws FileDoesNotExist
     * @throws FileIsTooBig
     */
    public function addGallery(UploadedFile $file): bool|\Spatie\MediaLibrary\MediaCollections\Models\Media
    {
        return $this->addMedia($file)->toMediaCollection('product_galleries');
    }
    //End media-library

}
