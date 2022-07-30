<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth') ;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function designRequest()
    {
        return view('design_request');
    }
    public function submitRequest(Request $request){

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

                if($request->file('attachment')){
                    $document = $request->file('attachment');
                    // maximum allowed file size
                    if ($document->getError() == 1) {
                        $error = 'Something Wrong!';
                        return back()->with('failed', $error);
                    }

                    $details['document'] = $document;
                }

             \Mail::to($admin_url)->send(new \App\Mail\ContactMail($details));
            }

            return back()->with('success', 'Thank you for requesting a
design. Files will be sent to your email address. If you have any questions please
message us: support@tenmato.com!');
        }catch (\Exception $e) {

            return back()->with('failed', 'Something Wrong!');
        }
    }
}
