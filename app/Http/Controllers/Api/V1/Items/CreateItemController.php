<?php

namespace App\Http\Controllers\Api\V1\Items;

use App\Actions\Items\CreateItemAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Items\StoreItemRequest;

class CreateItemController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreItemRequest $request)
    {
        $item = (new CreateItemAction)($request);

        return sendSuccessResponse(
            __('messages.create_data'),
            $item
        );
    }
}
