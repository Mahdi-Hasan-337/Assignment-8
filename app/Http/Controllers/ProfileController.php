<?php

namespace App\Http\Controllers;

class ProfileController extends Controller {
    public function index($id) {
        $name = "Donal Trump";
        $age = "75";

        $data = [
            "id" => $id,
            "name" => $name,
            "age" => $age,
        ];

        $cookie_name = "access_token";
        $value = "123-XYZ";
        $minutes = 1;
        $path = "/";
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        $cookie_response = cookie(
            $cookie_name,
            $value,
            $minutes,
            $path,
            $domain,
            $secure,
            $httpOnly
        );

        return response()->json($data)->cookie($cookie_response)->setStatusCode(200);
    }
}
