<?php

namespace App\Livewire;

use App\Models\Gallery;
use Livewire\Component;
use Livewire\Attributes\Computed;

class GalleryImages extends Component
{
    public $selectedCategory = null;
    public $locale;

    public function mount()
    {
        $this->locale = app()->getLocale(); 
    }

    public function selectCategory($category)
    {
        $this->selectedCategory = $category;
    }

    #[Computed()]
    public function categories()
    {
        return Gallery::select('category as category')->distinct()->get();
    }

    #[Computed()]
    public function images()
    {
        if ($this->selectedCategory) {
            return Gallery::where("category->{$this->locale}", $this->selectedCategory)->get();
        }

        return Gallery::all();
    }

    public function render()
    {
        return view('livewire.gallery-images', [
            'images' => $this->images(),
            'categories' => $this->categories()
        ]);
    }
}
