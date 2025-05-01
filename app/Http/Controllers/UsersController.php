<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestRequest;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function getProfileMe() {
        $username = 'dinardito';
        return view('users', compact('username'));
    }

    public function getProfile(string $username) {
        $args = ['a', 'b', 1, 2, 3];
        return view('users', compact('username', 'args'));
    }

    public function testHelpers() {
        // return response()->json(['id' => '0', 'name' => 'dinardito'], 404);
        return redirect(route('user-profile', ['username' => 'dinardito'])); // aqui é onde eu uso o alias da rota, sempre passo o nome da rota que foi definido no routes/web.php e tambem passo um array com os parâmetros que a rota precisa
    }

    public function testValidation(TestRequest $request ) {
        // $this->validate($request, [
        //     'name' => 'required|exists:users',
        //     'age' =>  'required|numeric|unique:users,age',
        // ]);
    }
}
