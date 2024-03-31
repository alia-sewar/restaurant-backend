<?php

declare(strict_types=1);

namespace App\Actions\Items;

use App\Http\Requests\Items\StoreItemRequest;
use App\Models\Item;

final class CreateItemAction
{
     public function __invoke(StoreItemRequest $request)
     {
          $attributes = $request->only(
               (new Item)->getFillable()
          );

          $attributes['added_by'] = auth()->id();

          $item = Item::create(
               $attributes
          );

          return $item;
     }
}
