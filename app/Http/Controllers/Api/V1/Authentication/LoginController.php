<?php

namespace App\Http\Controllers\Api\V1\Authentication;

use App\Actions\Authentication\CreateTokenAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Authentication\LoginRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(LoginRequest $request): JsonResponse
    {
        if (Auth::attempt($request->validated())) {
            $user = Auth::user();

            $user = (new CreateTokenAction)($user);

            return sendSuccessResponse(
                __('auth.success_login'),
                $user
            );
        }
        return sendFailedResponse(
            __('auth.failed'),
            null,
            401
        );
    }
}
