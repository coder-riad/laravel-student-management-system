@extends ('layouts.admin')

@section ('content')
	
	           
							
						<div class=" col-md-12" style="padding:0">               
		                    <div class="card" >
		                    	<!-- main header -->
		                    	<div class="content col-md-12" style="padding: 10px 20px;">
			           	 			<h style="font-size: 17px"><i class="nav-icon fa fa-bars"></i> Manage Section</h>
			           				 <p style="border-bottom: solid 2.5px black; padding-top: 5px"></p>
			           			</div>
		                        <!-- /main header -->

		                        <div class="card-header">
		                            <div class="row">
		                                <div class="col-md-6"><b>All Section Information</b></div>
		                                  <div class="col-md-6 text-right">
		                                    <a href="{{ url('section/add') }}" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Add Section</a>
											<button onclick="window.print()" class="btn btn-sm btn-primary"><i class="fa fa-print"></i> Print</button>

                                  		</div>
                            		</div>
		                        </div>

		                        <div class="card-body" style="font-size: 14px">
		                            <table class="table table-bordered table-striped table-sm" >
		                                <thead class="thead-light">
		                                        <tr>
		                                            <th>#SL</th>
		                                            <th>Class Name</th>
		                                            <th>Section Name</th>
		                                            <th>Room No.</th>                                            
		                                            <th>Action</th>
		                                        </tr>
		                                </thead>
		                                
		                                <tbody>		                                    
		                                   @foreach ($sections as $section)
		                                    <tr>		                                       	                                      
		                                        <td>{{ $loop -> index+1 }}</td>
		                                        <td>{{ $section-> relationToClass-> class_name }}</td>
			                                    <td>{{ $section -> section_name }}</td>
		                                        <td>{{ $section -> room_no}}</td>		                                        
		                                        <td>		                                            
		                                            <a href="{{ url('section/edit') }}/{{$section->id}}" class="btn btn-sm btn-info" style="padding: 0px 5px;"><i class="fa fa-edit"></i> Edit</a>
		                                            <a href="{{ url('section/delete') }}/{{$section->id}}" class="btn btn-sm btn-danger" style="padding: 0px 5px;"><i class="fa fa-trash"></i> Delete</a>
		                                        </td>
		                                    </tr>
		                                  @endforeach 		                                   
		                                </tbody>
		                            </table>
		                        </div>                                 
		                	</div>
		            	</div>	             
	                   
@endsection





