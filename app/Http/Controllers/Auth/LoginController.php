<?php

namespace App\Http\Controllers\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Mail;
use App\Models\warrantycard;
use App\Models\vendor;
use App\Models\customer;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /**
     * Instantiate a new LoginRegisterController instance.
     */
    
//    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except([
            'logout', 'dashboard','vendors','register','login'
        ]);
    }

    /**
     * Display a registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        return view('auth.register');
    }

    /**
     * Store a new user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd("helo");
        $request->validate([
            'brachname' => 'required|string|max:250',
            'brachcode' => 'required|string|max:250|unique:users',
            'name' => 'required|string|max:250',
            'email' => 'required|email|max:250|unique:users',
            'password' => 'required|min:8|confirmed'
        ]);

        User::create([
            'brachname' => $request->brachname,
            'brachcode' => $request->brachcode,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        
        $credentials = $request->only('email', 'password');
        event(new User($credentials));
        Auth::attempt($credentials);
        $request->session()->regenerate();
        // dd($request); 
        return redirect()->route('dashboard')
        ->withSuccess('You have successfully registered & logged in!');
    }

    /**
     * Display a login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        // dd("helo");
     
        return view('auth.login');
    
  
        
    }




    /**
     * Authenticate the user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
       
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        // dd($request,$credentials);
        if(Auth::attempt($credentials))
        {
            // dd($request);
            $request->session()->regenerate();
            return redirect()->route('dashboard')
                ->withSuccess('You have successfully logged in!');
        }

        return back()->withErrors([
            'email' => 'Your provided credentials do not match in our records.',
        ])->onlyInput('email');

    } 
    
    /**
     * Display a dashboard to authenticated users.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        // dd("dashboard");
        if(Auth::check())
        {
            $vendorcount = vendor::count();

            $date = today()->format('Y-m-d');
            $warrantycardcount = warrantycard::where('end_date', '>=', $date)->count();
            $totalcustomer = customer::count();
        //   dd($totalcustomer);
        return view('auth.dashboard',compact('vendorcount','warrantycardcount','totalcustomer'));
        }
        
        return redirect()->route('login')
            ->withErrors([
            'email' => 'Please login to access the dashboard.',
        ])->onlyInput('email');
    } 
    
    /**
     * Log out the user from application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')
            ->withSuccess('You have logged out successfully!');;
    }   
    




}