<?php  

namespace App\Http\Controllers;  

use App\Models\User;  
use Illuminate\Http\Request;  
use Illuminate\Support\Facades\Auth;  
use Illuminate\Support\Facades\Hash;  
use Illuminate\Support\Facades\Log;


class AuthController extends Controller  
{  
    public function showLoginForm()  
    {  
        // return view('dashboard');
        // return 'makan';   
    }  

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
    
        // Ambil kredensial dari input
        $credentials = $request->only('email', 'password');
    
        // Cek apakah user dengan email tersebut ada dan password cocok
        $user = User::where('email', $credentials['email'])->first();
    
        // Log user yang mencoba login
        Log::info('User login attempt', ['email' => $credentials['email']]);
    
        if ($user && Hash::check($credentials['password'], $user->password)) {
            // Auth user dan redirect ke dashboard
            Auth::login($user);
    
            // Log keberhasilan login
            Log::info('User login successful', ['email' => $credentials['email']]);
    
            return redirect()->route('dashboard');
        } else {
            // Jika gagal, log kegagalan login
            Log::warning('User login failed', ['email' => $credentials['email']]);
    
            // Kembalikan ke halaman login dengan pesan error
            return back()->withErrors([
                'email' => 'Email atau password salah.',
            ]);
        }
    }
    


        public function destroy(Request $request)
        {
            try {
                // Ambil user yang sedang login
                $user = Auth::user();
        
                if (!$user) {
                    return redirect()->back()->withErrors(['msg' => 'Pengguna tidak ditemukan.']);
                }
        
                // Log informasi sebelum penghapusan
                Log::info('User deletion process started', ['user_id' => $user->id]);
        
                // Logout user sebelum menghapus akun
                Auth::logout();
        
                // Hapus user dari database
                $user->delete();
        
                Log::info('User deleted successfully', ['user_id' => $user->id]);
        
                // Redirect ke halaman utama atau halaman lain dengan pesan sukses
                return redirect()->route('home')->with('success', 'Akun Anda berhasil dihapus.');
        
            } catch (\Exception $e) {
                // Jika terjadi error, log error tersebut
                Log::error('User deletion failed', ['error' => $e->getMessage()]);
        
                return redirect()->back()->withErrors(['msg' => 'Penghapusan akun gagal, coba lagi.']);
            }
        }
    

    public function showSignupForm()  
    {  
        return view('daftar_masuk');

        // return 'makan';  
    }  

    public function signup(Request $request)  
    {
        Log::info('Signup process started', ['request' => $request->all()]);
        
        // Validasi data input
        $validatedData = $request->validate([  
            'name' => 'required|max:255',  
            'email' => 'required|email|unique:users',  
            'password' => 'required|min:6',  
        ]);  
    
        Log::info('Validation passed', ['validatedData' => $validatedData]);
    
        try {
            // Buat user baru
            $user = User::create([  
                'name' => $validatedData['name'],  
                'email' => $validatedData['email'],  
                'password' => Hash::make($validatedData['password']),  
            ]);
    
            if (!$user) {
                Log::error('User creation failed');
                return redirect()->back()->withErrors(['msg' => 'Pendaftaran gagal, coba lagi.']);
            }
        
            Log::info('User created successfully', ['user_id' => $user->id]);
    
            // Kembali ke halaman form dengan pesan sukses
            return redirect()->route('daftar_masuk')->with('success', 'Pendaftaran berhasil! Anda sekarang dapat login.');
    
        } catch (\Exception $e) {
            // Jika terjadi error, log error tersebut
            Log::error('Signup process failed', ['error' => $e->getMessage()]);
            return redirect()->back()->withErrors(['msg' => 'Pendaftaran gagal, coba lagi.']);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
    
    
    
}