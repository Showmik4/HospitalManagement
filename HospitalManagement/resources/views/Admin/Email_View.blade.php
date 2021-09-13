

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
        <form action="{{url('sendemail',$data->id)}}" method="POST" >
            @csrf
            <div style="padding: 20px">
         <label>Greeting</label>
         <input type="text" name="greeting" placeholder="greeting" style="color: black" required=""/>
            </div>

            <div style="padding: 20px">
                <label>Body </label>
                <input type="text" name="body" placeholder="body" style="color: black" required=""/>
                   </div>



                       <div style="padding: 20px">
                        <label>Action Text</label>
                        <input type="text" name="actiontext" placeholder="action text" style="color: black" required=""/>
                           </div>
                       
                           
                       <div style="padding: 20px">
                        <label>Action Url</label>
                        <input type="text" name="actionurl" placeholder="action url" style="color: black" required=""/>
                           </div>

                           <div style="padding: 20px">
                            <label>End Part</label>
                            <input type="text" name="endpart" placeholder="end part" style="color: black" required=""/>
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