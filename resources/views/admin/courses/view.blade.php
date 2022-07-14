
@include("admin.layouts.app")


@include("admin.layouts.sidebar")
@include("admin.layouts.navbar")
<div class="wrapper ">
           
              
 <div class="main-panel">

  <div class="content">
    <div class="container-fluid">
      
      <div class="row">

     

        <div class="col-md-12" >
        @include('admin.layouts.flash_msg')
          <div class="card card-chart" >
            <div class="card-header  card-header-default" >
            <h4 class="card-title">{{ __($title) }}
            <a href="{{route('courses.update',$id)}}"class='float-right' style='color:white;font-size:20px;padding-right:15px;' title="Update" >
                             <i class="fa fa-edit"></i></a>
                </h4>

            </div>
           
           
            <div class="row">
            <div class="col-md-10 offset-1">
          <div class="card card-chart">
           
            <div class="card-body">
            
            <div class="row">
            <div class="col-md-6">
            <table class="table text-center">
                    <thead class=" text-default" style='color:whitesmoke;'>
                    <th>  Features </th>
                    <th> Value </th>
                    </thead>
                    <tbody> 
                     <tr>
                        <th> {{__('Product Name')}} </th>
                         <td> {{ $product->name }}</td>
                       </tr>
                       <tr>
                       <th> {{__('Subsubcategory')}} </th>
                         <td> {{ $product->subsubcategory_name }}</td>
                       </tr>
                        <th> {{__('Subcategory')}} </th>
                         <td> {{ $product->subcategory_name }}</td>
                       </tr>
                       <tr>
                        <th> {{__('Category')}} </th>
                         <td> {{ $product->category_name }}</td>
                       </tr>
                       
                       <tr>
                        <th> {{__('Price')}} </th>
                         <td> INR {{ $product->price }}</td>
                       </tr>
                       <tr>
                        <th> {{__('Currency')}} </th>
                         <td> {{ $product->currency }}</td>
                       </tr>
                       <tr>
                        <th> {{__('MOQ')}} </th>
                         <td> {{ $product->moq }}</td>
                       </tr>
                       <th> {{__('Shelf Life')}} </th>
                         <td> {{ $product->shelf_life }}</td>
                       </tr>
                       <tr>
                        <th> {{__('weight')}} </th>
                         <td> {{ $product->Weight }}</td>
                       </tr>
                       <th> {{__('Unit')}} </th>
                         <td> {{ $product->unit }}</td>
                       </tr>
                       <tr>
                        <th> {{__('Quantity1')}} </th>
                         <td> {{ $product->quantity1 }}</td>
                       </tr>
                       <th> {{__('Price1')}} </th>
                         <td> {{ $product->price1 }}</td>
                       </tr>
                       <tr>
                        <th> {{__('Time1')}} </th>
                         <td> {{ $product->time1 }}</td>
                       </tr>
                       <th> {{__('Quantity2')}} </th>
                         <td> {{ $product->quantity2 }}</td>
                       </tr>
                       <th> {{__('Price2')}} </th>
                         <td> {{ $product->price2 }}</td>
                       </tr>
                       <tr>
                        <th> {{__('Time2')}} </th>
                         <td> {{ $product->time2 }}</td>
                       </tr>
                       <th> {{__('Quantity3')}} </th>
                         <td> {{ $product->quantity3 }}</td>
                       </tr>
                       <th> {{__('Price3')}} </th>
                         <td> {{ $product->price3 }}</td>
                       </tr>
                       <tr>
                        <th> {{__('Time3')}} </th>
                         <td> {{ $product->time3 }}</td>
                       </tr>
                      
                    
                   
                     

                       <tr>
                        <th> {{__('Status')}} </th>
                         <td> 
                          @if($product->status==1)<i class='fa fa-check-circle' style='color:green;'> {{ __('Active') }}  </i>
                          @else
                           <i class='fa fa-question-circle' style='color:gold;'>{{ __(' Not Active') }} </i> 
                           @endif
                          </td>
                       </tr>
                       <tr>
                      
                      
                     

                       <tr>
                        <th> {{__('Product Details')}} </th>
                         <td>   
                         <?php 
                         $p= $product->details;
                         $p= htmlspecialchars_decode($p);
                                echo $p;
                                ?>
                                </td>
                       </tr>
                       <tr>

                        <th> {{__('Created On')}} </th>
                         <td>{{ $product->created_at->format('d F, Y') }}</td>
                     
                       </tr>
                       <tr>
                        <th> {{__('Updated On')}} </th>
                         <td>{{ $product->updated_at->format('d F, Y') }}</td>
                       </tr>
                    </tbody>
                  </table>
            </div>
            <div class="col-md-6">
            <p class="card-category float-right"  style='color:black;'>   <img src="{{ asset('public/uploads/courses') }}/{{ $product->img }}" style='height:200;width:200px;'/></p>
          
            </div>
            </div>

            
            </div>
          </div>
        </div>
        
          </div>
		 
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