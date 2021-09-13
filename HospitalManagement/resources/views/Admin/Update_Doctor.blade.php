

<!DOCTYPE html>
<html lang="en">
  <head>

    <base href="/public">
      <style type="text/css">
       label{
           display: inline-block;
           width: 200px
       }
      </style>
    <!-- Required meta tags -->
   @include('Admin.head')
  </head>
 
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('Admin.sideber')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('Admin.navber')
      
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
        <div class="container" align="center" style="padding-Top: 100px">
            @if(session()->has('message'))
            <div class="alert alert-success">
             <button type="button" class="close" data-dismiss="alert">X</button>
             {{session()->get('message')}}
            </div>
            @endif
        <form action="{{url('edit_doctor',$data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div style="padding: 20px">
         <label>Doctors Name </label>
         <input type="text" name="name"  style="color: black" value="{{$data->name}}" />
            </div>

            <div style="padding: 20px">
                <label>Phone </label>
                <input type="number" name="phone" style="color: black" value="{{$data->phone}}" />
                   </div>

                   
            <div style="padding: 20px">
                <label>Speciality </label>
                <input type="text" name="speciality"  style="color: black" value="{{$data->speciality}}" />
                   </div>

                   


                       <div style="padding: 20px">
                        <label>Room No</label>
                        <input type="text" name="room"  style="color: black" value="{{$data->room}}" />
                           </div>

                           <div style="padding: 20px">
                            <label>Old Image</label>
                            <img height="100" width="100" src="doctorimage/{{$data->image}}"/>
                               </div>
     
                       <div style="padding: 20px">
                        <label>Image</label>
                        <input type="file" name="file" value="{{$data->file}}" />
                           </div>

                           <div style="padding: 20px">
                            
                            <input type="submit" class="btn btn-success" />
                               </div>
        </form>
        </div>
        </div>

          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
         
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('Admin.script')
    <!-- End custom js for this page -->
  </body>
</html>