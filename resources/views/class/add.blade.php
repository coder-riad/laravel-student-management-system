@extends ('layouts.admin')

@section ('content')
	
	           
							
						<div class=" col-md-12" style="padding:0">               
		                    <div class="card" >
		                    	<div class="content col-md-12" style="padding: 10px 20px;">
			           	 			<h style="font-size: 17px"><i class="nav-icon fa fa-slideshare"></i> Manage Section</h>
			           				 <p style="border-bottom: solid 2.5px black; padding-top: 5px"></p>
			           			</div>
		                        
		                        <div class="card-header">
		                            <div class="row">
		                                 <div class="col-md-6"><b>Add Section Information</b></div>
		                                  <div class="col-md-6 text-right">
		                                    <a href="{{url('class/view')}}" class="btn btn-sm btn-success"><i class="fa fa-list"></i> All Class</a>
		                                  </div>
                            		</div>

		                        </div>
									<form action="{{url('class/insert')}}" method="post">              
					                      	@csrf              
						                    
										<div class="card-body" style="font-size: 14px;">
						                    <div class="form-group row">
                                				<label for="" class="col-sm-4 col-form-lable text-right"><span style="color:red;font-weight:bold">*</span>Class Name :</label>
                                				<div class="col-sm-4">
                                    				<input  style="height: 32px;font-size: 14px;" type="text" class="form-control" id="" name="class_name" required>
                                				</div>
                             				</div>
                             			                             		
						                    <div class="form-group row">
                                				<label for="" class="col-sm-4 col-form-lable text-right"><span style="color:red;font-weight:bold">*</span>Class Code :</label>
                                				<div class="col-sm-4">
                                    				<input style="height: 32px;font-size: 14px;" type="text" class="form-control" id="" name="class_code" required>
                                				</div>
                             				</div>
                             			</div>
                             			
					                        <div class="card-footer text-center">                               
					                                 <input type="submit" class="btn btn-sm btn-primary" value="Submit">
					                                 <a href="{{url('class/view')}}" class="btn btn-sm btn-danger">Cancel</a>
					                        </div>
                        			</form>

		                        <div class="card-body" >
		                        </div>                                 
		                </div>
		            </div>	  	              
	                   
@endsection





