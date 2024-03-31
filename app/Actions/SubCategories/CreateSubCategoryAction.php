<?php

declare(strict_types=1);

namespace App\Actions\SubCategories;

use App\Http\Requests\SubCategories\StoreSubCategoryRequest;
use App\Models\SubCategory;

final class CreateSubCategoryAction
{
     public function __invoke(StoreSubCategoryRequest $request)
     {
          $attributes = $request->only(
               (new SubCategory)->getFillable()
          );

          $attributes['added_by'] = auth()->id();

          $subCategory = SubCategory::create(
               $attributes
          );

          return $subCategory;
     }
}
