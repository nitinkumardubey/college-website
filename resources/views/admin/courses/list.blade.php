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
                <a href="{{route('courses.create')}}"  class="btn btn-sm btn-default float-right" style='background-color:white ;color:#0099cc;'><i class='fa fa-plus-circle' style='font-size:12px;'>  {{ __('New') }}</i> </a>
                
                </h4>
                <!-- <p class="card-category" > {{ __('Here you can manage the courses') }}</p> -->
                <p class="card-category" >Total courses -  {{ $cCount}}</p>

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
                      {{__('Image')}}  
                      </th>
                      <th>
                       @sortablelink('name',__('Course'))  
                      </th>
            
                       <th>
                       @sortablelink('topic',__('Topic'))  
                      </th>
                      <th>
                       @sortablelink('seats',__('Seats'))  
                      </th>
                   
                      <th>
                       @sortablelink('sort_details',__('Sort-Details'))  
                      </th>
                      
                      <th>
                       @sortablelink('details',__('Details'))  
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
                      @foreach($courses as $r)
                      <?php $i++; ?>
                        <tr>
                        <td>
                        <?php echo $i; ?>
                          </td>

                          <td>
                               
                               @if($r->img)
                                 <a href="{{ asset('public/uploads/courses') }}/{{ $r->img }}" target='_blank'> <img src="{{ asset('public/uploads/courses') }}/{{ $r->img }}" style='height:50px;width:50px;border-radius:5%;'/></a>
                                @else
                                <p class='text-center' style='padding-top:15px;height:55px;width:55px;border-radius:50%; background-color:#0099cc;color:white;font-size:26px;'>
                                {{ substr($r->name,0,1) }}
                                </p>
                                @endif 
                           </td>
                           <td>
                                  <b>{{ $r->name }}  </b>
                             </td>
                             <td>
                                  <b>{{ $r->topic }}  </b>
                             </td>
                             <td>
                             
                             <b>Seats: {{ $r->seats }}  </b>
                             <b>Available: {{ $r->available }} </b>
                             </td>
                         
                       
                             <td>
                                  <b>{{ $r-> sort_details}}  </b>
                             </td>
                             <td>
                            
                                  <?php 
                         $p= $r->details;
                         $p= htmlspecialchars_decode($p);
                                echo $p;
                                ?>
                             </td>
                            
        
            
                          <td style='font-size:12px;'>
                          {{ $r->created_at->format('d F, Y') }}
                       
                          </td>
                          <td>

                        

                     
                           <a href="{{route('courses.update',$r->id)}}" style='color:#0099cc;font-size:16px;padding-right:15px;' title="Update" data-id="{{$r->id}}">
                         <i class="fa fa-edit"></i></a>

                         <a href="javascript:;" style='color:#0099cc;font-size:16px;padding-right:15px;' class='delete-product' title="Delete" data-id="{{$r->id}}">
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

            {!! $courses->appends(request()->except('page'))->render() !!}
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>




  <script>
        $(document).ready(function() {
            $('.delete-product').on('click', function (e) {
                if (!confirm("Are you sure? It can't be undone.")) {
                    e.preventDefault();
                    return false;
                }

                var id = $(this).data('id');
              
                $.ajax({
                    type: 'POST',
                    url:"{{route('courses.destroy')}}",
                    data: {id: id, _token: '{{ csrf_token() }}'},
                    success: function (data) {
                        if (data.success == 1) {
                        //    selector.closest('tr').hide('slow');
                             swal("Success!", "Product Successfully Deleted!", "success");
                             
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