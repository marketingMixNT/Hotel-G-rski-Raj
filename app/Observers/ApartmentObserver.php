<?php

namespace App\Observers;

use App\Models\Apartment;
use Illuminate\Support\Str;

class ApartmentObserver
{
    /**
     * Handle the Apartment "created" event.
     */
    public function created(Apartment $apartment): void
    {
        
        $apartment->slug = Str::slug($apartment->name);
    }

    /**
     * Handle the Apartment "updated" event.
     */
    public function updated(Apartment $apartment): void
    {
        if ($apartment->isDirty('name')) {
            $apartment->slug = Str::slug($apartment->name);
        }
    }

    /**
     * Handle the Apartment "deleted" event.
     */
    public function deleted(Apartment $apartment): void
    {
        //
    }

    /**
     * Handle the Apartment "restored" event.
     */
    public function restored(Apartment $apartment): void
    {
        //
    }

    /**
     * Handle the Apartment "force deleted" event.
     */
    public function forceDeleted(Apartment $apartment): void
    {
        //
    }
}
