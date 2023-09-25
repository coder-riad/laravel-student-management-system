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
		                                <div class="col-md-6"><b>Single Student Information</b></div>
		                                  <div class="col-md-6 text-right">
		                                    <a href="{{url('student/view')}}" class="btn btn-sm btn-success"><i class="fa fa-list"></i> All Student</a>
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

									
		                            <table class="col-md-6 table table-bordered  offset-3 text-bold table-active">
		                                
							                        <tr>
					                                    <td style="vertical-align: middle">Student Photo</td>    
					                                    <td style="vertical-align: middle">:</td>    
					                                    <td><img src="{{asset('uploads/student_images')}}/{{$single->student_image}}" alt="not found" height="100px" width="100px" style="border-radius:50%; border: 2px solid #343a40;"></td>    
					                                </tr>
					                                <tr>
					                                    <td style="width: 30%;">Roll No</td>    
					                                    <td>:</td>    
					                                    <td style="width: 68%;">{{$single->roll}}</td>    
					                                </tr>
					                                <tr>
					                                    <td>Student Name</td>    
					                                    <td>:</td>    
					                                    <td>{{$single->student_name}}</td>    
					                                </tr>
					                                <tr>
					                                    <td>Father</td>    
					                                    <td>:</td>    
					                                    <td>{{$single->fathers_name}}</td>    
					                                </tr>
					                                <tr>
					                                    <td>Father Mobile</td>    
					                                    <td>:</td>    
					                                    <td>{{$single->fathers_mobile}}</td>    
					                                </tr>
					                                <tr>
					                                    <td>Mother</td>    
					                                    <td>:</td>    
					                                    <td>{{$single->mothers_name}}</td>    
					                                </tr>
					                                <tr>
					                                    <td>Mother Mobile</td>    
					                                    <td>:</td>    
					                                    <td>{{$single->mothers_mobile}}</td>    
					                                </tr>
					                                <tr>
					                                    <td>Date of Birth</td>    
					                                    <td>:</td>    
					                                    <td>{{$single->date_of_birth}}</td>    
					                                </tr>
					                                <tr>
					                                    <td>Blood Group</td>    
					                                    <td>:</td>    
					                                    <td>{{$single->blood_group}}</td>    
					                                </tr>
					                                <tr>
					                                    <td>Present Address</td>    
					                                    <td>:</td>    
					                                    <td>{{$single->present_address}}</td>    
					                                </tr>
					                                <tr>
					                                    <td>Permanent Address</td>    
					                                    <td>:</td>    
					                                    <td>{{$single->permanent_address}}</td>    
					                                </tr>
					                                <tr>
					                                    <td>Class</td>    
					                                    <td>:</td>    
					                                    <td>{{$single->class_name}}</td>    
					                                </tr>
					                                <tr>
					                                    <td>Section</td>    
					                                    <td>:</td>    
					                                    <td>{{$single->relationToSection->section_name}}</td>    
					                                </tr>
					                                <tr>
					                                    <td>Group</td>    
					                                    <td>:</td>    
					                                    <td>{{$single->group}}</td>    
					                                </tr>
					                                <tr>
					                                    <td>Reg No</td>    
					                                    <td>:</td>    
					                                    <td>{{$single->registration}}</td>    
					                                </tr>
					
		                            </table>
		                        </div>                                 
		                	</div>
		            	</div>
		            	
		            	


				                
	                   
@endsection





