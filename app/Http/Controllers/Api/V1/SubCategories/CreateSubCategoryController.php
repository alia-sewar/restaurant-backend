<?php

namespace App\Http\Controllers\Api\V1\SubCategories;

use App\Actions\SubCategories\CreateSubCategoryAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\SubCategories\StoreSubCategoryRequest;

class CreateSubCategoryController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreSubCategoryRequest $request)
    {
        $subCategory = (new CreateSubCategoryAction)($request);

        return sendSuccessResponse(
            __('messages.create_data'),
            $subCategory
        );
    }
}
