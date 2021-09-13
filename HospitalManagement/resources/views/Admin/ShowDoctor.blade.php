

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   @include('Admin.head')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('Admin.sideber')
      <!-- partial -->
      @include('Admin.navber')

      @if(session()->has('message'))
      <div class="alert alert-success">
       <button type="button" class="close" data-dismiss="alert">X</button>
       {{session()->get('message')}}
      </div>
      @endif
        <!-- partial:partials/_navbar.html -->
      
        <div class="container-fluid page-body-wrapper">
          
         
            <div align="center" style="padding-top:100px">
               
            <table>
            <tr style="background-color: gray">
            
            <th style="padding: 20px ; color:white ; font-size:15px"> Name</th>
          
            <th style="padding: 20px ; color:white ; font-size:15px">Phone</th>
            <th style="padding: 20px ; color:white ; font-size:15px">Speciality</th>
            <th style="padding: 20px ; color:white ; font-size:15px">Room </th>
            <th style="padding: 20px ; color:white ; font-size:15px">Image</th>
          
          
            <th style="padding: 20px ; color:white ; font-size:15px">Update</th>
            <th style="padding: 20px ; color:white ; font-size:15px">Delete</th>
            
            
            
            </tr>
            @foreach ($data as $doctors)
            <tr style="background-color: black">
                
                <td style="padding: 20px ; color:white ; font-size:15px">{{$doctors->name}}</td>
                <td style="padding: 20px ; color:white ; font-size:15px">{{$doctors->phone}}</td>
                <td style="padding: 20px ; color:white ; font-size:15px">{{$doctors->speciality}}</td>
                <td style="padding: 20px ; color:white ; font-size:15px">{{$doctors->room}}</td>
                <td ><img height="100" width="100" src="doctorimage/{{$doctors->image}}"/></td>
               
           

                <td><a class="btn btn-success" href="{{url('update_doctor',$doctors->id)}}">Update</a> </td>

                <td><a class="btn btn-danger" href="{{url('delete_doctor',$doctors->id)}}">Delete</a> </td>
            
            </tr>
            
            @endforeach
            
            
            
            
            </table>
            
            
            </div>  



        </div>
      
        <!-- partial -->
      
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