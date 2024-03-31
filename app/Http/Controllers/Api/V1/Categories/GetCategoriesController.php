<?php

namespace App\Http\Controllers\Api\V1\Categories;

use App\Http\Controllers\Controller;
use App\Http\Requests\Categories\GetCategoriesRequest;
use App\Models\Category;
use Illuminate\Database\Query\Builder;

class GetCategoriesController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(GetCategoriesRequest $request)
    {
        $categories = Category::query()
            ->with('addedBy')
            ->when(
                $request->input('search'),
                fn (Builder $builder) =>
                $builder->where('name', '%' . $request->input('search') . '%')
            )->paginate(25);

        return sendSuccessResponse(
            __('messages.get_data'),
            $categories
        );
    }
}
