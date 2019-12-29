<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProfileController extends Controller {

    public function __construct() {
        //$this->middleware('auth');
    }

    public function show($username) {

        $user = $this->getUser($username);

        return view('profile.feed', ['user' => $user]);
    }

    public function getUser($username) {

        return DB::table('users')->where('name', $username)->first();
    }
}
