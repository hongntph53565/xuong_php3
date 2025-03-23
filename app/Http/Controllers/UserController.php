<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function listUsers()
    {
        $listUsers = DB::table('users')
            ->join('phongban', 'users.phongban_id', '=', 'phongban.id')
            ->select('users.id', 'users.name', 'users.email', 'users.phongban_id', 'phongban.ten_donvi')
            ->get();
        return view('users/listUsers', compact('listUsers'));
    }
    public function addUser()
    {
        $phongban = DB::table('phongban')->select('id', 'ten_donvi')->get();
        return view('users/addUser', compact('phongban'));
    }
    public function addPostUser(Request $req)
    {
        $data = [
            'name' => $req->name, // $req->name = $_POST['name]
            'email' => $req->email,
            'phongban_id' => $req->phongban,
            'tuoi' => $req->tuoi,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];

        DB::table('users')->insert($data);
        return redirect()->route('users.listUsers');
    }
    public function deleteUser($userId)
    {
        DB::table('users')->where('id', $userId)->delete();
        return redirect()->route('users.listUsers');
    }
    public function updateUser($userId)
    {
        $phongban = DB::table('phongban')->select('id', 'ten_donvi')->get();
        $user = DB::table('users')->where('id', $userId)->first();
        return view('users/updateUser', compact('user', 'phongban'));
    }
    public function updatePostUser(Request $req)
    {
        $data = [
            'name' => $req->name,
            'email' => $req->email,
            'phongban_id' => $req->phongban,
            'tuoi' => $req->tuoi,
            'songaynghi' => $req->ngaynghi,
            'updated_at' => Carbon::now(),
        ];

        DB::table('users')->where('id', $req->idUser)->update($data);
        return redirect()->route('users.listUsers');
    }
}
