<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appoinment;
use Illuminate\Support\Facades\Notification;
use App\Notifications\SendEmailNotification;


class DoctorController extends Controller
{
    //
    public function AddDoctor(){
       return view('Admin.add_doctor');
    }

    public function Store(Request $request){
      
        $doctor = new  Doctor;
        $image=$request->file;
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->file->move('doctorimage',$imagename);
        $doctor->image=$imagename;
        $doctor->name=$request->name;
        $doctor->phone=$request->phone;
        $doctor->speciality=$request->speciality;
        $doctor->room=$request->room;
        $doctor->save();

        return redirect()->back()->with('message','doctor added successfully');
    }


    public function showappoinment()
    {
       
         
            $data= Appoinment::all();
     
          return view('Admin.ShowAppoinment',compact('data'));
         
           
     
       
    }


    public function approve_appoint($id)
    {
      
        $data=Appoinment::find($id);
        $data->status='Approve';
        $data->save();
        return redirect()->back();


    }

    public function cancelled_appoint($id)
    {
      
        $data=Appoinment::find($id);
        $data->status='Cancelled';
        $data->save();
        return redirect()->back();


    }

    public function show()
    
    {
        $data= Doctor::all();
     
        return view('Admin.ShowDoctor',compact('data'));
       
    }

    public function destroy($id){
        
        $data=Doctor::find($id);
        $data->delete();
        return redirect()->back()->with('message','Doctor Deleted successfully');
    }


    public function update($id){
       
        $data=Doctor::find($id);
        return view('Admin.Update_Doctor',compact('data'));

    }

    public function edit(Request $request,$id){
       
        $doctor=Doctor::find($id);
       
       
        $doctor->name=$request->name;
        $doctor->phone=$request->phone;
        $doctor->speciality=$request->speciality;
        $doctor->room=$request->room;
        $image=$request->file;
        if($image){
     
        $imagename=time().'.'.$image->getClientoriginalExtension();
       
        $request->file->move('doctorimage',$imagename);
        $doctor->image=$imagename;
        }
        $doctor->save();

        return redirect()->back()->with('message','Doctor Updated successfully');

    }


    public function Send_Mail($id)
    {
        $data=Appoinment::find($id);
      return view('admin.Email_View',compact('data'));
    }

    public function SendEmail(Request $request,$id){
        $data=Appoinment::find($id);
        $details=[
         'greeting'=> $request->greeting, 
         'body'=> $request->body,
         'actiontext'=> $request->actiontext,
         'actionurl'=> $request->actionurl,
         'endpart'=> $request->endpart
        ];

        Notification::send($data,new SendEmailNotification($details));

        return redirect()->back();
    }
}
