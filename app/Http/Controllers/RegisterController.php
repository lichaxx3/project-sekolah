<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
  public function register_view()
  {
    // Ambil ID terakhir dari tabel 'user_detail' dan tambahkan 1 untuk ID baru
    $lastUserDetail = DB::table('user')->latest('iduserinc')->first();
    
    // Jika tidak ada ID, mulai dari 1
    $newId = $lastUserDetail ? (int)$lastUserDetail->iduserinc + 1 : 1;

    // Kirim $newId ke view
    return view('register', ['newId' => $newId]);
  }

  public function register_view_admin()
  {
    return view('register_admin');
  }


  public function store_user(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nisn' => 'required|min:5|max:25',
            'username' => 'required|min:5|max:25',
            'password' => 'required|min:5|max:20|alpha_num',
            'email' => 'required|unique:user,email|max:30',
            'no_telp' => 'required',
            'iduserinc' => 'required',
        ]);

        // Hash password
        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['id_user_level'] = 2; // Misalnya 2 untuk pengguna biasa
        $validatedData['is_active'] = 1; // Misalnya aktif

        // Simpan ke database
        User::create($validatedData);

        // Redirect dengan pesan sukses
        return redirect()->route('login_web')->with('success', 'Akun Anda berhasil didaftarkan, silakan login.');
    }

  public function store_admin(Request $request)
  {
    $username = $request->username;
    $password = $request->password;
    $id = sha1($username . $password);

    $validatedData = $request->validate([
      'username' => 'required|min:5|max:30',
      'password' => 'required|min:5|max:20|alpha_num',
      'no_telp' => 'required|numeric',
      'email' => 'required|unique:user,email|min:10|max:50',
    ]);
    $validatedData['id'] = $id;
    $validatedData['id_user_detail'] = $id;
    $validatedData['password'] = Hash::make($validatedData['password']);

    $validatedData['id_user_level'] = 1;
    $validatedData['is_active'] = 0;

    $query = User::create($validatedData);
    DB::transaction(function () use ($id) {
      DB::insert("INSERT INTO user_detail(id_user_detail) VALUES('$id')");
    });

    if ($query) {
      return redirect()->route('login_web')->with('success', 'Akun anda berhasil di daftarkan, mohon menunggu konfirmasi Kepala Tata Usaha untuk anda dapat login');
    } else {
      return back()->with('error', 'Error, Anda Belum Terdaftar !');
    }
  }
}
