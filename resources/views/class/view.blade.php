@extends ('layouts.admin')

@section ('content')
	
	           
							
						<div class=" col-md-12" style="padding:0">               
		                    <div class="card" >
		                    	<!-- main header -->
		                    	<div class="content col-md-12" style="padding: 10px 20px;">
			           	 			<h style="font-size: 17px"><i class="nav-icon fa fa-slideshare"></i> Manage Class</h>
			           				 <p style="border-bottom: solid 2.5px black; padding-top: 5px"></p>
			           			</div>
		                        <!-- /main header -->

		                        <div class="card-header">
		                            <div class="row">
		                                <div class="col-md-6"><b>All Class Information</b></div>
		                                  <div class="col-md-6 text-right">
		                                    <a href="{{url('class/add')}}" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Add Class</a>
		                                    <button onclick="window.print()" class="btn btn-sm btn-primary"><i class="fa fa-print"></i> Print</button>
                                  		</div>
                            		</div>
		                        </div>

		                        <div class="card-body" style="font-size: 14px">
		                            <table class="table table-sm table-bordered table-striped">
		                                <thead class="thead-light">
		                                        <tr>
		                                            <th>#SL</th>
		                                            <th>Class</th>
		                                            <th>Class Code</th>                                            
		                                            <th>Action</th>
		                                        </tr>
		                                </thead>
		                                
		                                <tbody>		                                    
		                                   @foreach ($classlists as $classlist)
		                                    <tr>		                                       	                                      
		                                        <td>{{ $loop->index+1 }}</td>
			                                    <td >{{ $classlist->class_name }}</td>
		                                        <td >{{ $classlist->class_code }}</td>		                                        
		                                        <td >		                                            
		                                            <a href="{{url('class/edit')}}/{{ $classlist->id }}" class="btn btn-sm btn-info" style="padding: 0px 5px;"><i class="fa fa-edit"></i> Edit</a>
		                                            <a href="{{url('class/delete')}}/{{ $classlist->id }}" class="btn btn-sm btn-danger" style="padding: 0px 5px;"><i class="fa fa-trash"></i> Delete</a>
		                                        </td>
		                                    </tr>
		                                   @endforeach		                                   
		                                </tbody>
		                            </table>
		                        </div>                                 
		                	</div>
		            	</div>	             
	                   
@endsection





