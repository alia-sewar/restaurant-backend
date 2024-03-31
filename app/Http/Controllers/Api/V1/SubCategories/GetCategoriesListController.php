<?php

namespace App\Http\Controllers\Api\V1\SubCategories;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class GetCategoriesListController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $categories = Category::active()
            ->select('name', 'id')
            ->get();

        return sendSuccessResponse(
            __('messages.get_data'),
            $categories
        );
    }
}
