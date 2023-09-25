@extends ('layouts.admin')

@section ('content')
	
	           
							
						<div class=" col-md-12" style="padding:0">               
		                    <div class="card" >
		                    	<!-- main header -->
		                    	<div class="content col-md-12" style="padding: 10px 20px;">
			           	 			<h style="font-size: 17px"><i class="nav-icon fa fa-group"></i> Manage Student</h>
			           				 <p style="border-bottom: solid 2.5px black; padding-top: 5px"></p>
			           			</div>
		                        <!-- /main header -->

		                        <div class="card-header">
		                            <div class="row">
		                                <div class="col-md-6"><b>All Student Information</b></div>
		                                  <div class="col-md-6 text-right">
		                                    <a href="{{url('student/add')}}" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Add Student</a>
		                                    <button onclick="window.print()" class="btn btn-sm btn-primary"><i class="fa fa-print"></i> Print</button>
                                  		</div>
                            		</div> <br>	
		                        </div>

		                        <div class="card-body" style="font-size: 14px">
		                        		<br>
		                        	<form action="{{url('student/search')}}" method="get">
		                        		<div class="row offset-2">
			                        		<div class=" col-md-2 text-center">
											   <label for="" >Select Class</label>
												 <select style="height: 32px;font-size: 14px;" name="class" class="form-control" id="" required="">
													<option value="">-Select-</option>												
													@foreach ($classlists as $classlist)
                                                          <option value="{{$classlist->class_name}}">{{$classlist->class_name}}</option>
                                                    @endforeach											
												 </select>										 
											</div>
											<div class=" col-md-1 text-center"></div>

											<div class=" col-md-2 text-center">
											   <label for="" >Select Section</label>
												 <select style="height: 32px;font-size: 14px;" name="class" class="form-control" id="">
													<option value="">-Select-</option>												
													@foreach ($sections as $section)
                                                        <option value="{{$section->section_name}}">{{$section->section_name}}</option>
                                                    @endforeach											
												 </select>
											</div>
											<div class=" col-md-1 text-center"></div>

											<div class=" col-md-2 text-center">
											   <label for="" >Select Group</label>
												 <select style="height: 32px;font-size: 14px;" name="class" class="form-control" id="">
													<option value="">-Select-</option>												
													<option value="N/A">N/A</option>
													<option value="Science">Science</option>
				                                    <option value="General">General</option>
				                                    <option value="Humanities">Humanities</option>												
												 </select>
											</div>
											<div class=" col-md-1 text-center"></div>

											<div class="col-md-2" style="position: relative;right: 8%;">
												<label for="" >&nbsp</label><br>											                                    
											   	<button style="height: 32px;font-size: 14px;" type="submit" class="btn btn-success btn-labeled pull-right"><span class="btn-label btn-label-right"><i class="fa fa-check"> Search</i></span></button>													
											</div>
										</div>
									</form>
										<br><br><br>

									
		                            <table class="table table-sm table-bordered table-hover">
		                                <thead class="thead-dark">
		                                        <tr>
		                                        	<th class="text-center">#SL</th>
		                                        	<th class="text-center">Roll No.</th>
		                                        	<th class="text-center">Student Name</th>
		                                        	<th class="text-center">Parents</th>		                                        	
		                                        	<th class="text-center">Mobile</th>
		                                        	<th class="text-center">Class</th>
		                                        	<th class="text-center">Section</th>
		                                        	<th class="text-center">Group</th>
		                                        	<th class="text-center">Date of Birth</th>
		                                        	<th class="text-center">Blood</th>
		                                        	<th class="text-center">Present Address</th>
		                                        	<th class="text-center">Reg. No.</th>                                        	
		                                            <th class="text-center">Student Image</th>                                            
		                                            <th class="text-center">Action</th>
		                                        </tr>
		                                </thead>
		                                
		                                <tbody>		                                    
		                                 @foreach($students as $student)	 
		                                    <tr class="table-secondary">
		                                    	<td class="align-middle text-center">{{$loop->index+1}}</td>
		                                        <td class="align-middle text-center text-danger">{{$student->roll}}</td>
		                                        <td class="align-middle text-success" style="width: 15%">{{$student->student_name}}</td>
		                                        <td class="align-middle" style="width: 15%"><b>F &nbsp:</b> {{$student->fathers_name}}<br><b>M:</b> {{$student->mothers_name}}</td>
		                                        <td class="align-middle" style="width: 10%"><b>F &nbsp:</b> {{$student->fathers_mobile}}<br><b>M:</b> {{$student->mothers_mobile}}</td>
		                                        <td class="align-middle text-center">{{$student->class_name}}</td>
		                                        <td class="align-middle text-center">{{$student->relationToSection->section_name}}</td>
		                                        <td class="align-middle text-center">{{$student->group}}</td>
		                                        <td class="align-middle text-center">{{\Carbon\Carbon::parse($student->date_of_birth)->format('d/m/Y')}}</td>
		                                        <td class="align-middle text-center">{{$student->blood_group}}</td>
		                                        <td class="align-middle" style="width: 10%">{{$student->present_address}}</td>
		                                        <td class="align-middle text-center">{{$student->registration}}</td>		                                        
		                                        <td class="align-middle text-center"><img style="border:solid 2px #343a40;border-radius: 50%" src="{{asset('uploads/student_images')}}/{{$student->student_image}}" alt="not found" width="95"></td>		                                        
		                                        <td class="align-middle text-center">		                                            
		                                            <a href="{{url('student/singleview')}}/{{$student->id}}" class="btn btn-sm btn-primary" style="display:inline-block;padding: 2px;width: 63px;margin-top:3px;"><i class="fa fa-eye"></i> View</a> <br>

		                                            <a href="{{url('student/edit')}}/{{$student->id}}" class="btn btn-sm btn-info" style="display:inline-block;margin-top: 6px;padding: 2px;width: 63px"><i class="fa fa-edit"></i> Edit</a><br>

		                                            <a href="{{url('student/delete')}}/{{$student->id}}" class="btn btn-sm btn-danger" style="display:inline-block;margin-top: 6px;padding: 2px;width: 63px"><i class="fa fa-trash"></i> Delete</a>
		                                        </td>
		                                    </tr>
		                                 @endforeach  		                                   
		                                </tbody>
		                            </table>
		                         
		                        </div>                                 
		                	</div>
		            	</div>
		            	
		            	


				                
	                   
@endsection





