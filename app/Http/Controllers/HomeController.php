<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function work()
    {
         return view('work');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function pricing()
    {
        return view('pricing');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function aboutUs()
    {
        return view('about_us');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function product()
    {
        return view('products');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        return view('dashboard');
    }
    
    public function contactUs()
    {
        return view('contact_us');
    }
    
     public function privacyPolices()
    {
        return view('privacy_policy');
    }
    
    
     public function termsConditions()
    {
        return view('terms_condition');
    }
    
    
     public function CookiePolies()
    {
        return view('cookies_policy');
    }
    
    public function submitContact(Request $request){
        
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required', 
            'attachment' => 'mimes:csv,pdf,jpg,png,jpeg|max:50000'
         
        ]);

        try{
            $admin_url=config('app.admin_url');
            if(isset( $admin_url)){
                $details = [
                    'name' => $request->name,
                    'email' => $request->email,
                    'message' =>  $request->message
                ]; 
                
                $details['contact_us']=true;
                 
             \Mail::to($admin_url)->send(new \App\Mail\ContactMail($details));
            }

            return back()->with('success', 'Thank you for contact us!');
        }catch (\Exception $e) {
            
            return back()->with('failed', 'Something Wrong!');
        }
    }
}
