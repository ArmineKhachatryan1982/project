<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    // use VerifiesEmails;
    /**
     * Display a listing of the resource.
     */

    /**
     * Update the specified resource in storage.
     */
    public function verify(Request $request)
    {
          $user = User::findOrFail($request->route('id'));

        // Устанавливаем пользователя в текущий guard (JWT)
           auth()->setUser($user);



            if ($request->route('id') != $request->user()->getKey()) {

                throw new AuthorizationException;
            }

            if ($request->user()->hasVerifiedEmail()) {


                return response(['message'=>'Already verified']);

                // return redirect($this->redirectPath());
            }

            if ($request->user()->markEmailAsVerified()) {

                event(new Verified($request->user()));
            }

    // return $request->wantsJson()
    //     ? response()->json(['message' => 'Email verified successfully'], 200)
    //     : redirect('http://gorc-ka.am');
    return redirect('http://127.0.0.1:8000');
    // return response()->json(['message' => 'Email verified successfully'], 200);
}
}
