<?php

namespace App\Http\Controllers\Api\V1\Categories;

use App\Actions\Categories\CreateCategoryAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Categories\StoreCategoryRequest;

class CreateCategoryController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreCategoryRequest $request)
    {
        $category = (new CreateCategoryAction)($request);

        return sendSuccessResponse(
            __('messages.create_data'),
            $category
        );
    }
}
