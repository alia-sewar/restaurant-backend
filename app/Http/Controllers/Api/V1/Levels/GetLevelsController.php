<?php

namespace App\Http\Controllers\Api\V1\Levels;

use App\Http\Controllers\Controller;
use App\Models\Level;
use Illuminate\Http\Request;

class GetLevelsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $levels = Level::active()
            ->select('name', 'number')
            ->get();

        return sendSuccessResponse(
            __('messages.get_data'),
            $levels
        );
    }
}
