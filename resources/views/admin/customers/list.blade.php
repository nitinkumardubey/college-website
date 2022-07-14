@include("admin.layouts.app")


@include("admin.layouts.sidebar")
@include("admin.layouts.navbar")
<div class="wrapper ">
           
              
 <div class="main-panel">
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header card-header-default" >
                <h4 class="card-title" >{{ __($title) }}
                
                </h4>
                <p class="card-category" > {{ __('Here you can manage Student') }}</p>

              </div>
              <div class="card-body">
              @include('admin.layouts.flash_msg')
              <div class="row">
              
                  
                  <div class="col-sm-3">
                    <div class="form-group">
                      <input class="form-control" id="myInput" onkeyup="myFunction()"  type="text" placeholder="{{ __('Search..') }}"  aria-required="true"/>
                    </div>
                  
                </div>


                <div class="table-responsive">
                      <table class="table text-center" >
                    <thead class=" text-default" style='color:whitesmoke;'>
                    <th>
                         
                          @sortablelink('id',__('S No')) 
                      </th>
                      
                       <th>
                       @sortablelink('name',__('Name'))  
                      </th>
                      <th>
                      @sortablelink('email',__('Contact'))  
                      </th>
                      <th>
                      @sortablelink('city',__('City'))  
                      </th>
                     
                      <th>
                      @sortablelink('status',__('Status')) 
                    
                      </th>
                      <th>
                      @sortablelink('created_at',__('Added At'))  
                      
                      </th>
                    
                      <th>
                        {{ __('Action') }}
                      </th>
                    
                     
                    </thead>
                    <tbody id="myTable"> 
                    <?php $i=0; ?>
                      @foreach($customers as $r)
                      <?php $i++; ?>
                        <tr>
                        <td>
                        <?php echo $i; ?>
                          </td>
                        
                             <td>
                              <b>{{ $r->name }}  </b>
                          
                             </td>
                        
                          <td style='font-size:12px;'>
                          
                          <i class='fa fa-envelope'> </i> {{ $r->email }}<br>
                          <i class='fa fa-phone'> </i> {{ $r->mobile }}
                          </td>

                          <td>
                          {{ $r->city }}
                          </td>
                          
                         
                          <td>
                          @if($r->status==1)
                          
                          <i class='fa fa-check-circle' style='color:green;'> {{ __('Active') }}  </i>
                          @else
                           <i class='fa fa-question-circle' style='color:gold;'>{{ __(' Inactive') }} </i> 
                           @endif
                         
                          </td>
                          <td style='font-size:12px;'>
                          {{ $r->created_at->format('Y-m-d') }}<br>
                          {{ $r->created_at->format('H:i:s') }}
                          </td>
                         
                          <td>
                          
                           <a href="{{route('customers.update',$r->id)}}" style='color:#0099cc;font-size:16px;padding-right:15px;' title="Update" data-id="{{$r->id}}">
                         <i class="fa fa-edit"></i></a>

                         <a href="javascript:;" style='color:#0099cc;font-size:16px;padding-right:15px;' class='delete-customer' title="Delete" data-id="{{$r->id}}">
                         <i class="fa fa-trash"></i>
                         </a>
                          </td>
                        
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            {!! $customers->appends(request()->except('page'))->render() !!}
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>




  <script>
        $(document).ready(function() {
            $('.delete-customer').on('click', function (e) {
                if (!confirm("Are you sure? It can't be undone.")) {
                    e.preventDefault();
                    return false;
                }

                var id = $(this).data('id');
              
                $.ajax({
                    type: 'POST',
                    url:"{{route('customers.destroy')}}",
                    data: {id: id, _token: '{{ csrf_token() }}'},
                    success: function (data) {
                        if (data.success == 1) {
                        //    selector.closest('tr').hide('slow');
                             swal("Success!", "Customer Successfully Deleted!", "success");
                             
                        }

                       location.reload();
                       
                    }
                });
            }); });
  </script>


<script>
// $(document).ready(function(){
//   $("#myInput").on("keyup", function() {
//     var value = $(this).val().toLowerCase();
//     $("#myTable tr").filter(function() {
//       $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
//     });
//   });
// });
</script>