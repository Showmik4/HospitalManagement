

<!DOCTYPE html>
<html lang="en">
  <head>
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
        <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div style="padding: 20px">
         <label>Doctors Name </label>
         <input type="text" name="name" placeholder="Add Name" style="color: black" required=""/>
            </div>

            <div style="padding: 20px">
                <label>Phone Number </label>
                <input type="number" name="phone" placeholder="Add number" style="color: black" required=""/>
                   </div>

                   <div style="padding: 20px" >
                    <label>Doctors Speciality </label>
                    <select name="speciality" style="color: black" required="" >
                        <option>--Select--</option>
                        <option value="skin">Skin</option>
                        <option value="heart">Heart</option>
                        <option value="eye">Eye</option>
                        <option value="kidney">Kidney</option>
                    </select>
                       </div>


                       <div style="padding: 20px">
                        <label>Room No</label>
                        <input type="text" name="room" placeholder="Add Room" style="color: black" required=""/>
                           </div>

                           
                       <div style="padding: 20px">
                        <label>Image</label>
                        <input type="file" name="file"  required=""/>
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