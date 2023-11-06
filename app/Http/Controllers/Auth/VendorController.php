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



class VendorController extends Controller
{
    public function vendorlogin()
    {
        //  dd("helo");
     
        return view('auth.vendorlogin');
    
  
        
    }

    public function vendorlogout(Request $request)
    {
        // dd("dfgg");
        // Auth::vendorlogout();
        // $request->session()->invalidate();
        // $request->session()->regenerateToken();
        return redirect()->route('vendor.login')
            ->withSuccess('You have logged out successfully!');;
    }  

       /**
     * Display a dashboard to authenticated users.
     *
     * @return \Illuminate\Http\Response
     */
    public function vendordashboard()
    {
        // dd("dashboard");
        // if(Auth::check())
        // {
        //    
        //     $date = today()->format('Y-m-d');
        //     $warrantycardcount = warrantycard::where('end_date', '>=', $date)->count();
        //     $totalcustomer = customer::count();
        // //   dd($totalcustomer);
        // return view('auth.vendordashboard',compact('warrantycardcount','totalcustomer'));
        // }
        
        // return redirect()->route('vendor.login')
        //     ->withErrors([
        //     'email' => 'Please login to access the dashboard.',
        // ])->onlyInput('email');

    
            $date = today()->format('Y-m-d');
            $warrantycardcount = warrantycard::where('end_date', '>=', $date)->count();
            $totalcustomer = customer::count();
        //   dd($totalcustomer);
        return view('auth.vendordashboard',compact('warrantycardcount','totalcustomer'));
    } 

    public function vendorcustomerdata() {
//   dd("cvbfjdk");
        $customers = DB::table('customers as cust')
        ->select(DB::raw('cust.custid as Id,cust.name as name,cust.phone as phone, cust.email  as email,cust.mileage  as mileage,cust.address as address,cust.city as city,cust.postcode as postcode '))->get();
        //  dd($customers);
        return view('vendor.customerdata',['customers'=>$customers]);
        
    }  


    public function vendorwarrantycards() {
        // dd("warrantycards");
         $warrantycards = DB::table('warrantycards as wrnty')
        ->select(DB::raw('wrnty.id as id,wrnty.customername as customername,wrnty.vehicalnumber as vehicalnumber,wrnty.brachcode as brachcode,wrnty.email as email,wrnty.phonenumber as phonenumber,wrnty.chassinumber as chassinumber,wrnty.carmodel as carmodel,wrnty.service as service,wrnty.ppfrollnumber as ppfrollnumber,wrnty.frontimage as frontimage,wrnty.backimage as backimage,wrnty.rightimage as rightimage,wrnty.leftimage as leftimage,wrnty.topimage as topimage,wrnty.bottomimage as bottomimage,wrnty.start_date as start_date,wrnty.end_date as end_date'))->get();
        $vendors = vendor::select('name','brachcode' ,'Id')->get(); // Assuming 'name' is the vendor name field
      // dd($vendors);
   
         return view('vendor.warrantycards',['warrantycards'=>$warrantycards],['vendors'=>$vendors]);
         
     }  
    
}
