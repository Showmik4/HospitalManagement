<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Doctor;
use App\Models\Appoinment;


class HomeController extends Controller
{
    //
    public function redirect(){
        if(Auth::id()){
            if(Auth::user()->usertype=='0'){
                $doctor= Doctor::all();
                return view('User.home',compact('doctor'));
            }
            else {
                return view('Admin.home');
            }
        }

        else{
            return redirect()->back();
        }
    }

   public function index(){

   if(Auth::id())
    {
        return redirect('home');
     }
     else
     { 
        $doctor= Doctor::all();
 
      return view('User.home',compact('doctor'));
     
 
     }
   

     
    

   
       
   }


   public function Appoinment(Request $request){
       $data=new appoinment;
      
       $data->name=$request->name;
       $data->email=$request->email;
       $data->phone=$request->number;
       $data->doctor=$request->doctor;
       $data->date=$request->date;
       $data->message=$request->message;
       $data->status='in progress';
       if(Auth::id()){
        $data->user_id=Auth::user()->id;
       }
     
       $data->save();

       return redirect()->back()->with('message','Appoinment added successfully');
   }

    public function myappoinment(){

        if(Auth::id()){
            $userid=Auth::user()->id;
            $appoint=Appoinment::where('user_id',$userid)->get();
            return view('User.my_appoinment',compact('appoint'));
        }

        else{
            return redirect()->back();
        }
      
    }

    public function cancel_appoint($id){
      $data=Appoinment::find($id);
      $data->delete();
      return redirect()->back()->with('message','Appoinment Deleted successfully');
    }
  
   }

