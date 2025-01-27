<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
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

    auth()->loginUsingId($request->route('id'));
   
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
    return response()->json(['message' => 'Email verified successfully'], 200);
}
}
