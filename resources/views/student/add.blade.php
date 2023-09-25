@extends ('layouts.admin')

@section ('content')
	
	           
							
						<div class=" col-md-12" style="padding:0">               
		                    <div class="card" >
		                    	<div class="col-md-12" style="padding: 10px 20px;">
			           	 			<h style="font-size: 17px"><i class="nav-icon fa fa-group"></i> Manage Student</h>
			           				 <p style="border-bottom: solid 2.5px black; padding-top: 5px"></p>
			           			</div>
		                        
		                        <div class="card-header">
		                            <div class="row">
		                                 <div class="col-md-6"><b>Edit Student Information</b></div>
		                                 <div class="col-md-6 text-right">
		                                    <a href="{{url('student/view')}}" class="btn btn-sm btn-success"><i class="fa fa-list"></i> All Student</a>
		                                    <button onclick="window.print()" class="btn btn-sm btn-primary"><i class="fa fa-print"></i> Print</button>
		                                  </div>
                            		</div>
		                        </div>
    
		                        <form action="{{url('student/add/insert')}}" method="post" enctype="multipart/form-data">              
					                      	@csrf              
						                    
										<div class="card-body " style="font-size: 14px;">
						                    <div class="form-group row">
						                    	<div class="col-sm-5"></div>
						                    	<div class="col-sm-5 "><h6>Student Information</h6></div> <br>
                                				<label for="" class="col-sm-4 col-form-lable text-right"><span style="color:red;font-weight:bold">*</span>Student Name :</label>
                                				<div class="col-sm-4">
                                    				<input  style="height: 32px;font-size: 14px;" type="text" class="form-control" id="" name="student_name" required>
                                				</div>
                             				</div>
                             			                             		
						                    <div class="form-group row">
                                				<label for="" class="col-sm-4 col-form-lable text-right"><span style="color:red;font-weight:bold">*</span>Gender :</label>
                                				<div class="col-sm-4">
                                                    <select style="height: 32px;font-size: 14px;"  class="form-control"  name="gender"  id="gender" required>
                                                                                      <option value="">--Select--</option>
                                                                                      <option value="Male">Male</option>
                                                                                      <option value="Female">Female</option>
                                                                                      <option value="Other">Other</option>
                                                                                      
                                                    </select>
                                                </div>
                             				</div>

                             				<div class="form-group row">
                                				<label for="" class="col-sm-4 col-form-lable text-right"><span style="color:red;font-weight:bold">*</span>Date Of Birth :</label>
                                				<div class="col-sm-4">
                                    				<input  style="height: 32px;font-size: 14px;" type="date" class="form-control" id="" name="date_of_birth" required>
                                				</div>
                             				</div>

                             				<div class="form-group row">
                                				<label for="" class="col-sm-4 col-form-lable text-right"><span style="color:red;font-weight:bold">*</span>Blood Group :</label>
                                				<div class="col-sm-4">
                                    				<select style="height: 32px;font-size: 14px;"  class="form-control"  name="blood_group"  id="blood" required>
				                                                                      <option value="">--Select--</option>
				                                                                      <option value="A+">A+</option>
				                                                                      <option value="A-">A-</option>
				                                                                      <option value="B+">B+</option>
				                                                                      <option value="B-">B-</option>
				                                                                      <option value="O+">O+</option>
				                                                                      <option value="O-">O-</option>
				                                                                      <option value="AB+">AB+</option>
				                                                                      <option value="AB-">AB-</option>
				                                                                      <option value="N/A">N/A</option>
				                                    </select>
                                				</div>
                             				</div>

                             				<div class="form-group row">
                                				<label for="" class="col-sm-4 col-form-lable text-right"><span style="color:red;font-weight:bold">*</span>Religion :</label>
                                				<div class="col-sm-4">
                                    				<select style="height: 32px;font-size: 14px;"  class="form-control"  name="religion"  id="religion" required>
				                                                                        <option value="">--Select--</option>
				                                                                        <option value="Islam">Islam</option>
				                                                                        <option value="Hindu">Hindu</option>
				                                                                        <option value="Other">Other</option>
				                                    </select>
                                				</div>
                             				</div>
                             			
                             				<div class="form-group row">
						                    	<div class="col-sm-5"></div>
						                    	<div class="col-sm-5"><h6>Gurdian Information</h6></div> <br>
                                				<label for="" class="col-sm-4 col-form-lable text-right"><span style="color:red;font-weight:bold">*</span>Father's Name :</label>
                                				<div class="col-sm-4">
                                    				<input  style="height: 32px;font-size: 14px;" type="text" class="form-control" id="" name="fathers_name" required>
                                				</div>
                             				</div>

                             				<div class="form-group row">						                    	
                                				<label for="" class="col-sm-4 col-form-lable text-right"><span style="color:red;font-weight:bold">*</span>Father's Mobile :</label>
                                				<div class="col-sm-4">
                                    				<input  style="height: 32px;font-size: 14px;" type="number" placeholder="017XXXXXXXX" class="form-control" id="" name="fathers_mobile" required>
                                				</div>
                             				</div>

                             				<div class="form-group row">						                    	
                                				<label for="" class="col-sm-4 col-form-lable text-right"><span style="color:red;font-weight:bold">*</span>Mother's Name :</label>
                                				<div class="col-sm-4">
                                    				<input  style="height: 32px;font-size: 14px;" type="text" class="form-control" id="" name="mothers_name" required>
                                				</div>
                             				</div>

                             				<div class="form-group row">						                    	
                                				<label for="" class="col-sm-4 col-form-lable text-right">Mother's Mobile :</label>
                                				<div class="col-sm-4">
                                    				<input  style="height: 32px;font-size: 14px;" type="number" class="form-control" placeholder="017XXXXXXXX" id="" name="mothers_mobile">
                                				</div>
                             				</div>
														
											<div class="form-group row ">
						                    	<div class="col-sm-5"></div>
						                    	<div class="col-sm-5"><h6>Contact Information</h6></div> <br>
                                				<label for="" class="col-sm-4 col-form-lable text-right"><span style="color:red;font-weight:bold">*</span>Present Address :</label>
                                				<div class="col-sm-4">
                                    				<input  style="height: 32px;font-size: 14px;" type="text" class="form-control" id="" name="present_address" required placeholder="Village, P.O, Upozilla, Zilla">
                                				</div>
                             				</div>

                             				<div class="form-group row">						                    	
                                				<label for="" class="col-sm-4 col-form-lable text-right">Permanent Address :</label>
                                				<div class="col-sm-4">
                                    				<input  style="height: 32px;font-size: 14px;" type="text" class="form-control" id="" name="permanent_address" placeholder="Village, P.O, Upozilla, Zilla">
                                				</div>
                             				</div>
                             				<div class="form-group row ">
						                    	<div class="col-sm-5"></div>
						                    	<div class="col-sm-5"><h6>Academic Information</h6></div> <br>
                                				<label for="" class="col-sm-4 col-form-lable text-right"><span style="color:red;font-weight:bold">*</span>Class :</label>
                                				<div class="col-sm-4">
                                					<select style="height: 32px;font-size: 14px;"  class="form-control"  name="class_name"  id="class"  required="required">
                                                                	<option value="">--Select--</option>
                                                             @foreach ($classlists as $classlist)
                                                                	<option value="{{$classlist->class_name}}">{{$classlist->class_name}}</option>
                                                             @endforeach                                                              
                                         			</select>                                    				
                                				</div>
                             				</div>

                             				<div class="form-group row ">						                    	
                                				<label for="" class="col-sm-4 col-form-lable text-right"><span style="color:red;font-weight:bold">*</span>Section :</label>
                                				<div class="col-sm-4">
                                					<select style="height: 32px;font-size: 14px;"  class="form-control"  name="section_id"  id="section"  required="required">
                                                                	<option value="">--Select--</option>
                                                                @foreach ($sections as $section)
                                                                	<option value="{{$section->id}}">{{$section->section_name}}</option>
                                                                @endforeach                                                                                                                             
                                         			</select>                                    				
                                				</div>
                             				</div>

											<div class="form-group row ">	                    	
                                				<label for="" class="col-sm-4 col-form-lable text-right"><span style="color:red;font-weight:bold">*</span>Group :</label>
                                				<div class="col-sm-4">
				                                        <select style="height: 32px;font-size: 14px;"  class="form-control"  name="group"  id="group"  required>
				                                                                <option value="">--Select--</option>
				                                                                <option value="N/A">N/A</option>
				                                                                <option value="Science">Science</option>
				                                                                <option value="General">General</option>
				                                                                <option value="Humanities">Humanities</option>
				                                         </select> 
				                                    </div>
                             				</div>

											<div class="form-group row">						                    	
                                				<label for="" class="col-sm-4 col-form-lable text-right"><span style="color:red;font-weight:bold">*</span>Roll No :</label>
                                				<div class="col-sm-4">
                                    				<input  style="height: 32px;font-size: 14px;" type="number" class="form-control" id="" name="roll" required>
                                				</div>
                             				</div>

                             				<div class="form-group row">						                    	
                                				<label for="" class="col-sm-4 col-form-lable text-right">Registration No :</label>
                                				<div class="col-sm-4">
                                    				<input  style="height: 32px;font-size: 14px;" type="number" class="form-control" id="" name="registration">
                                				</div>
                             				</div>

                             				<div class="form-group row" style="margin-bottom: 2px;">						                    	
                                				<label for="" class="col-sm-4 col-form-lable text-right">Student Image :</label>
                                				<div class="col-sm-4">
                                    				<input  style="height: 32px;font-size: 14px;padding: 1.5px 15px;" type="file" class="form-control" id="" name="student_image">
                                				</div>
                                				
                             				</div>

                             				<div class="form-group row">						                    	
                                				<div for="" class="col-sm-4 col-form-lable text-right"></div>
                                				<div class="col-sm-4">
                                    				<span style="color:red;">Image size max 400x400 (height x width)</span>
                                				</div>                                				
                             				</div>

                             			</div>
                             			
                             			
					                        <div class="card-footer text-center">                               
					                                 <input type="submit" class="btn btn-sm btn-primary" value="Submit">
					                                 <a href="{{url('student/view')}}" class="btn btn-sm btn-danger">Cancel</a>
					                        </div>
                        			</form>									
											                                                        
		                </div>
		            </div>	  	              
	                   
@endsection





