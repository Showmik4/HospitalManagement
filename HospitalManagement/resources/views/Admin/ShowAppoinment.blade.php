

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
     
        <!-- partial:partials/_navbar.html -->
        @include('Admin.navber')

        <div class="container-fluid page-body-wrapper">
         
            <div align="center" style="padding-top:80px">
               
            <table>
            <tr style="background-color: gray">
            
            <th style="padding: 10px ; color:white ; font-size:15px"> Name</th>
            <th style="padding: 10px ; color:white ; font-size:15px">Email</th>
            <th style="padding: 10px ; color:white ; font-size:15px">Phone</th>
            <th style="padding: 10px ; color:white ; font-size:15px">Doctor</th>
            <th style="padding: 10px ; color:white ; font-size:15px">Date</th>
            <th style="padding: 10px ; color:white ; font-size:15px">Message</th>
            <th style="padding: 10px ; color:white ; font-size:15px">Status</th>
          
            <th style="padding: 10px ; color:white ; font-size:15px">Approved</th>
            <th style="padding: 10px ; color:white ; font-size:15px">Cancelled</th>

            <th style="padding: 10px ; color:white ; font-size:15px">SendMail</th>
            
            
            
            </tr>
            @foreach ($data as $appoints)
            <tr style="background-color: black">
                
                <td style="padding: 5px ; color:white ; font-size:15px">{{$appoints->name}}</td>
                <td style="padding: 5px ; color:white ; font-size:15px">{{$appoints->email}}</td>
                <td style="padding: 5px ; color:white ; font-size:15px">{{$appoints->phone}}</td>
                
                <td style="padding: 5px ; color:white ; font-size:15px">{{$appoints->doctor}}</td>
                <td style="padding: 5px ; color:white ; font-size:15px">{{$appoints->date}}</td>
                <td style="padding: 5px ; color:white ; font-size:15px">{{$appoints->message}}</td>
                <td style="padding: 5px ; color:white ; font-size:15px">{{$appoints->status}}</td>
           

                <td><a class="btn btn-success" href="{{url('approve_appoint',$appoints->id)}}">Approved</a> </td>

                <td><a class="btn btn-danger" href="{{url('cancelled_appoint',$appoints->id)}}">Cancelled</a> </td>

                <td><a class="btn btn-primary" href="{{url('send_mail',$appoints->id)}}">Send Mail</a> </td>
            
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