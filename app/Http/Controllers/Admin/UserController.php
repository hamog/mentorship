<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:view users', ['only' => ['index', 'show']]);
        $this->middleware('permission:create users', ['only' => ['create', 'store']]);
        $this->middleware('permission:edit users', ['only' => ['edit', 'update']]);
        $this->middleware('permission:delete users', ['only' => ['destroy']]);
    }

    public function index()
    {

    }

    public function create(Sms $sms)
    {
        try {
            $user = User::create([]);
            $sms->send($user->mobile, 'test message');

            return 'OK';
        } catch (ModelNotFoundException $exception) {
            return  $exception->getMessage();
        }
    }

}
