<?php

declare(strict_types=1);

namespace App\Observers;

use App\Category;

class CategoryObserver
{
    /**
     * Handle the category "creating" event.
     *
     * @param  \App\Category  $category
     * @return void
     */
    public function creating(Category $category)
    {
        $category->slug = sluggify($category->name);
    }

    /**
     * Handle the category "updating" event.
     *
     * @param  \App\Category  $category
     * @return void
     */
    public function updating(Category $category)
    {
        if ($category->isDirty('name')) {
            $category->slug = sluggify($category->name);
        }
    }
}
