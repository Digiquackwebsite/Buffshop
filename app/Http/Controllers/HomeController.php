<?php

namespace App\Http\Controllers;

use App\Models\warrantycard;
use App\Models\vendor;
use App\Models\customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Mail;
use PDF;

class HomeController extends Controller
{


    public function vendors()
    {
       
        $vendors = DB::table('vendors as vnd')
        ->select(DB::raw('vnd.Id as Id,vnd.brachname as Brachname ,vnd.brachcode as Brachcode,vnd.name as name,vnd.phone as phone, vnd.email  as email '))->get();
        // dd("vendor");
        return view('vendors',['vendors'=>$vendors]);
    }

    public function vendorform()
    {
       // dd("vendor");
        return view('vendorform');
    }


    public function vstore(Request $request)
    {
        //   dd("helo");
        $request->validate([
            'brachname' => 'required|string|max:250',
            'brachcode' => 'required|string|max:250|unique:vendors',
            'name' => 'required|string|max:250',
            'phone' => 'required|string|max:250',
            'email' => 'required|email|max:250|unique:vendors',
            'password' => 'required|min:8|confirmed'
        ]);
        //dd($request); 
        // vendor::create([
        //     'brachname' => $request->brachname,
        //     'brachcode' => $request->brachcode,
        //     'name' => $request->name,
        //     'phone' => $request->phone,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password)
        // ]);
        
        // $credentials = $request->only('email', 'password');
        // //dd($request);
        // event(new vendor($credentials));
        // Auth::attempt($credentials);
        // $request->session()->regenerate();

        $vendors = new vendor;
        $vendors->brachname = $request->brachname;
        $vendors->brachcode = $request->brachcode;
        $vendors->name = $request->name;
        $vendors->phone = $request->phone;
        $vendors->email = $request->email;
        $vendors->password = Hash::make($request->password);
        
        if($vendors->save()){
            return redirect()->route('vendors')->withSuccess('You have successfully registered');
    
        }else{
            return redirect()->back()->withError('Something wrong while insert data.');
        }
    } 

    // edit delete vendor post strt
                public function edit($Id)
            {
                // dd($Id);
                $vendors = vendor::findOrFail($Id); // Fetch the item to edit
                return view('updatevendor', compact('vendors'));
            }

            public function update(Request $request,$Id)
            {
                  //dd("helo");
                 // Retrieve the vendor record
                $vendors = vendor::find($Id);
                // dd($vendors);
                // Check if the vendor exists
                if (!$vendors) {
                    // Handle the case where the vendor does not exist
                    return redirect()->back()->with('error', 'Vendor not found.');
                } 
                  $validatedData =  $request->validate([
                    'brachname' => 'required|string|max:250',
                    'brachcode' => 'required|string|max:250',
                    'name' => 'required|string|max:250',
                    'phone' => 'required|string|max:250',
                    'email' => 'required|email|max:250'
                   
                ]);
                //  dd($validatedData); 
                // $vendors->update($validatedData);

                vendor::where('id', $Id)->update([
                    'brachname' => $request->brachname, //example
                    'brachcode' => $request->brachcode,
                    'name' => $request->name,
                    'phone' => $request->phone,
                    'email' => $request->email
                 ]);

              
                return redirect()->route('vendors')->withSuccess('success', 'User details updated successfully');
            }



            public function close()
{
    // Perform any actions needed to close the form
    return redirect()->route('vendors'); // Redirect to the home page or another appropriate page
} 

            public function destroy($Id)
            {
                DB::delete('delete from vendors where id = ?',[$Id]);
                // echo "Record deleted successfully.<br/>";
                // //  dd($Id);
                 return redirect()->route('vendors')->with('success', 'Post deleted successfully');
               
            }
   // edit delete vendor post end


    // public function warrantyform() {
    //     // dd("warrantycardsfrom");
        
    //     return view('WarrantyCardForm');
    // } 


    public function warrantycards() {
       // dd("warrantycards");
        $warrantycards = DB::table('warrantycards as wrnty')
       ->select(DB::raw('wrnty.id as id,wrnty.customername as customername,wrnty.vehicalnumber as vehicalnumber,wrnty.brachcode as brachcode,wrnty.email as email,wrnty.phonenumber as phonenumber,wrnty.chassinumber as chassinumber,wrnty.carmodel as carmodel,wrnty.service as service,wrnty.ppfrollnumber as ppfrollnumber,wrnty.frontimage as frontimage,wrnty.backimage as backimage,wrnty.rightimage as rightimage,wrnty.leftimage as leftimage,wrnty.topimage as topimage,wrnty.bottomimage as bottomimage,wrnty.start_date as start_date,wrnty.end_date as end_date'))->get();
       $vendors = vendor::select('name','brachcode' ,'Id')->get(); // Assuming 'name' is the vendor name field
    //   dd($vendors);
  
        return view('warrantycards',['warrantycards'=>$warrantycards],['vendors'=>$vendors]);
        
    }  


    public function wstore(Request $request)
    {
        $vendors = vendor::all();
        $vendorName = $request->input('name');
        //dd($vendorName);
        $brachcode = vendor::where('name', $vendorName)->value('brachcode'); 
        // dd($brachCode);
       
        $request->validate([
            'customername' => 'required|string|max:250',
            'vehicalnumber' => 'required|string|max:250',
            'email' => 'required|email|max:250|unique:warrantycards',
            'phonenumber' => 'required|string|max:250',
            'chassinumber' => 'required|string|max:250',
            'carmodel' => 'required|string|max:250',
            'service' => 'required|in:AMC,CeramicCoating,PPF', 
            'frontimage' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'backimage' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'rightimage' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'leftimage' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'topimage' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'bottomimage' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
             'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date'
            
        ]);
    //dd($request);


    $warrantycards = new warrantycard;
    $warrantycards->customername = $request->customername;
    $warrantycards->vehicalnumber = $request->vehicalnumber;
    $warrantycards->brachcode = $request->brachcode;
    $warrantycards->email = $request->email;
    $warrantycards->phonenumber = $request->phonenumber;
    $warrantycards->chassinumber = $request->chassinumber;
    $warrantycards->carmodel = $request->carmodel;
    $warrantycards->service = $request->service;
    $warrantycards->ppfrollnumber = $request->ppfrollnumber;
    $warrantycards->start_date = $request->start_date;
    $warrantycards->end_date = $request->end_date;
    
            
    foreach (['front', 'back', 'right', 'left','top','bottom'] as $position) {

        $file = $request->file("{$position}image");
   
      //Move Uploaded File
      $destinationPath = 'uploads/cards';
      $file->move($destinationPath,$file->getClientOriginalName());
      $warrantycards->{$position . 'image'} = $destinationPath.'/'.$file->getClientOriginalName();

    }
   // dd($request, $warrantycards);
    //dd($warrantycards);


    if($warrantycards->save()){
        return redirect()->route('warrantycards')->withSuccess('You have successfully registered');

    }else{
        return redirect()->back()->withError('Something wrong while insert data.');
    }
  
 
}




//   public function customerform() {
//         return view('CustomerForm');
//     } 


    public function customerdata() {

        $customers = DB::table('customers as cust')
        ->select(DB::raw('cust.custid as Id,cust.name as name,cust.phone as phone, cust.email  as email,cust.mileage  as mileage,cust.address as address,cust.city as city,cust.postcode as postcode '))->get();
        //  dd($customers);
        return view('customerdata',['customers'=>$customers]);
        
    } 



    public function cstore(Request $request)
    {
         // dd($request);
        $request->validate([
            'name' => 'required|string|max:250',
            'phone' => 'required|string|max:250',
            'email' => 'required|email|max:250|unique:customers',
            'mileage' => 'required|string|max:250',
            'address' => 'required|string|max:250',
            'city' => 'required|string|max:250',
            'postcode' => 'required|string|max:250',
        ]);

        // customer::create([
        //     'name' => $request->name,
        //     'phone' => $request->phone,
        //     'email' => $request->email,
        //     'mileage'=> $request->mileage,
        //     'address' => $request->address,
        //     'city' => $request->city,
        //     'postcode' => $request->postcode,
        // ]);
      
        $customers = new customer;
        $customers->name = $request->name;
        $customers->phone = $request->phone;
        $customers->email = $request->email;
        $customers->mileage = $request->mileage;
        $customers->address = $request->address;
        $customers->city = $request->city;
        $customers->postcode = $request->postcode;
      
        
        if($customers->save()){
            return redirect()->route('customerdata')->withSuccess('You have successfully registered as Customer');
    
        }else{
            return redirect()->back()->withError('Something wrong while insert data.');
        }

      
    } 



    public function viewPdf($id)
    {

        $warrantycard = warrantycard::findOrFail($id);

        $pdf = PDF::loadView('pdf.document', $warrantycard);

        return $pdf->stream('warrenty_card.pdf');
    }
    
     // pdf structure strt
    public function document()
    {
       // dd("vendor");
        return view('pdf.document');
    } 


    public function termcondition()
    {
       // dd("vendor");
        return view('pdf.termcondition');
    }  
       // pdf structure end


    public function apivendorstore(){

        $response = array();
        $response['success'] = [
            'data' => [1,2,3,4,5],
            'message' => ''
        ];
        return json_encode($response);
    }
}

