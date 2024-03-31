<?php

namespace App\Http\Controllers\Api\V1\Items;

use App\Http\Controllers\Controller;
use App\Http\Requests\Items\GetItemRequest;
use App\Models\Item;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;

class GetItemsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(GetItemRequest $request)
    {
        $items = Item::query()
            ->with('subCategory:id,name')
            ->when(
                $request->input('search'),
                fn (Builder $builder) =>
                $builder->where('name', '%' . $request->input('search') . '%')
            )->paginate(25);

        return sendSuccessResponse(
            __('messages.get_data'),
            $items
        );
    }
}
