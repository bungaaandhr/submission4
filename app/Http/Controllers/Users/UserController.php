<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index () {
        $data = [
            [
                'nama' => 'bunga' ,
                'email' => 'bunganadhira123@gmail.com',
                'telp' => '0895359562907',
                'alamat' => [
                    'street' => 'jl. soreang',
                    'postcode' => '12345'
                    ]
            ],
            [
                'nama' => 'taerae' ,
                'email' => 'kimtaerae123@gmail.com',
                'telp' => '08912345678',
                'alamat' => [
                    'street' => 'jl. seoul',
                    'postcode' => '54321'
                    ]
            ],
            [
                'nama' => 'mashiho' ,
                'email' => 'mashiho123@gmail.com',
                'telp' => '08987654321',
                'alamat' => [
                    'street' => 'jl. prefektur',
                    'postcode' => '67890'
                    ]
            ]
        ];

            $id = '111';
            return view('users/user', compact('data', 'id'));
        }
    }
