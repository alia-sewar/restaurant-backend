<?php

declare(strict_types=1);

namespace App\Actions\Categories;

use App\Http\Requests\Categories\StoreCategoryRequest;
use App\Models\Category;

final class CreateCategoryAction
{
     public function __invoke(StoreCategoryRequest $request)
     {
          $attributes = $request->only(
               (new Category())->getFillable()
          );

          $attributes['added_by'] = auth()->id();

          $category = Category::create(
               $attributes
          );

          return $category;
     }
}
