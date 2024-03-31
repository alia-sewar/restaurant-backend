<?php

namespace App\Http\Controllers\Api\V1\SubCategories;

use App\Http\Controllers\Controller;
use App\Models\SubCategory;
use Illuminate\Database\Query\Builder;
use App\Http\Requests\SubCategories\GetSubCategoriesRequest;

class GetSubCategoriesController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(GetSubCategoriesRequest $request)
    {
        $subCategories = SubCategory::query()
            ->with('addedBy', 'category', 'level')
            ->when(
                $request->input('search'),
                fn (Builder $builder) =>
                $builder->where('name', '%' . $request->input('search') . '%')
            )->paginate(25);

        return sendSuccessResponse(
            __('messages.get_data'),
            $subCategories
        );
    }
}
