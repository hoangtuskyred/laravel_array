<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    private static $users = [
        [
            'name' => 'Tu',
            'age' => '20',
            'weight' => 50,
        ],
        [
            'name' => 'Thong',
            'age' => '20',
            'weight' => 60
        ],
        [
            'name' => 'Hoang',
            'age' => '20',
            'weight' => 57
        ],
    ];

    public function users()
    {
        $totalAge = 0;
        $totalWeight = 0;
        foreach (static::$users as $user) {
            $usersAge = $user['age'];
            $usersWeight = $user['weight'];
            $totalAge += $usersAge;
            $totalWeight += $usersWeight;
            $count = count($user);
        }
        $avgWeight = $totalWeight / $count;
        $avgAge = $totalAge / $count;
        return view('User', ['users' => static::$users])->with('aveAge', $avgAge)->with('avgWeight',$avgWeight);
    }

    public function postUsers(Request $request)
    {
        $age = $request->input('age');
        $weight = $request->input('weight');
        $arr = [];
        foreach (static::$users as $item) {
            $usersAge = $item['age'];
            $usersWeight = $item['weight'];
            if ($age == $usersAge && $weight == $usersWeight) {
                $arr = $item;
            }

        }
        return view('User2', ["arr" => $arr]);
    }
}
