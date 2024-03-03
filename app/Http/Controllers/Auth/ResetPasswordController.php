<?php

namespace App\Http\Controllers\Auth;

use App\Exceptions\InvalidPasswordResetTokenException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ResetPasswordRequest;
use App\Models\PasswordResetToken;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    public function __invoke(ResetPasswordRequest $request)
    {
        $input = $request->validated();

        $date24h = now()->subHours(24)->toDateTimeString();

        $token = PasswordResetToken::query()
            ->whereToken($input['token'])
            ->whereDate('created_at', '>=', $date24h)
            ->first();

        if(!$token) {
            throw new InvalidPasswordResetTokenException();
        }

        $user = $token->user;
        $user->password = bcrypt($input['password']);
        $user->save();

        $user->resetPasswordTokens()->delete();

    }
}
