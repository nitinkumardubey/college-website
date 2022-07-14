
@include("admin.layouts.app")


@include("admin.layouts.sidebar")
@include("admin.layouts.navbar")
<div class="wrapper ">
           
              
 <div class="main-panel">
  <div class="content">
    <div class="container-fluid">
      <div class="row">



        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
              <div class="card-icon">
                <i class="fa fa-envelope" style='font-size:20px;'></i>
                <span style="font-size:18px;padding-left:15px;"> Messages  </span> 
              </div>
              <p class="card-category" align="center"> Total Messages</p>
              <h3 class="card-title" align="center" style="margin-bottom:25px;"> {{allMessages()}}</h3>
              <hr>
              <div style='padding-left:20px;'>
              <p class="card-category" align="left" style='color:#00cc99;'>New Messages : {{newMessages()}}</p>
              <p class="card-category" align="left" style='color:white;'>oo</p>
              <p class="card-category" align="left" style='color:white;'>oo</p>
              <p class="card-category" align="left" style='color:white;'>oo</p>
              <p class="card-category" align="left" style='color:white;'>oo</p>

            </div>
            </div>
            <div class="card-footer" align='center'>   <div class="stats" style='color:black;font-weight:600;'>  </div> </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="fa fa-users" style='font-size:20px;'></i>
                <span style="font-size:18px;padding-left:15px;"> Student  </span> 
              </div>
              <p class="card-category" align="center"> Total Student</p>
              <h3 class="card-title" align="center" style="margin-bottom:25px;"> {{allCustomers()}}</h3>
              <hr>
              <div style='padding-left:20px;'>
              <p class="card-category" align="left" style='color:#00cc99;'>New Student : {{newCustomers()}}</p>
              <p class="card-category" align="left" style='color:white;'>oo</p>
              <p class="card-category" align="left" style='color:white;'>oo</p>
              <p class="card-category" align="left" style='color:white;'>oo</p>
              <p class="card-category" align="left" style='color:white;'>oo</p>

            </div>
            </div>
            <div class="card-footer" align='center'>   <div class="stats" style='color:black;font-weight:600;'>  </div> </div>
          </div>
        </div>

      
       


      </div>

    </div>
  </div>

  </div>
  </div>


@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
@endpush

@include("admin.layouts.footer")