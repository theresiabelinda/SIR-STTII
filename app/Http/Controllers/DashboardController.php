<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Kategori;
use App\Models\berita;

class DashboardController extends Controller
{
    public function index() {
    $totalBerita = berita::count();
    $totalKategori = Kategori::count();
    $totalUser = User::count();
    $user = Auth::user();
    
    $latestBerita = berita::with('kategori')->latest()->get()->take(5);

    if ($user->role === 'admin') {
        return view('backend.content.dashboardAdmin', compact('totalBerita','totalKategori', 'totalUser', 'latestBerita')); // Admin dashboard
    } else {
        return view('backend.content.dashboardUser', compact('totalBerita', 'latestBerita')); // User dashboard
    }
}

    public function profile(){
        
        $id = Auth::guard('user')->user()->id;
        $user = User::findOrFail($id);
        return view('backend.content.profile', compact('user'));
    }



    public function resetPassword(){
        return view('backend.content.resetPassword');
    }

    public function prosesResetPassword(Request $request){
        $this->validate($request, [
            'old_password' => 'required',
            'new_password' => 'required|min:6',
            'c_new_password' => 'required_with:new_password|same:new_password|min:6',
        ]);

        $old_password = $request->old_password;
        $new_password = $request->new_password;

        $id = Auth::guard('user')->user()->id;
        $user = User::findOrFail($id);

        if(Hash::check($old_password, $user->password)){
            $user->password = bcrypt($new_password);

            try{
                $user->save();
                return redirect(route('dashboard.resetPassword'))->with('pesan',['success','Selamat anda berhasil ubah password']);
            }catch (\Exception $e){
                return redirect(route('dashboard.resetPassword'))->with('pesan',['danger','Anda gagal ubah password']);
            }
        }else{
            return redirect(route('dashboard.resetPassword'))->with('pesan',['danger','Password lama salah!']);
        }
    }
}