@extends('layouts.app')
@section('content')
<div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">

              	@if(Session::has('flash_message'))
				    <div class="alert alert-success">
				        {{ Session::get('flash_message') }}
				    </div>
				@endif
                <div class="x_title">
                 @if ($profile->phone_number)
                  	  <h2>Edit Profile <small>tell us who you are</small></h2>
                  	 @else 
                  	   <h2>Create Profile <small>tell us who you are</small></h2>
                  	 @endif
                
                  
                  <div class="clearfix"></div>
                </div>

                <div class="x_content">
                  <br>
                 
                  	<form id="demo-form2"  class="form-horizontal form-label-left" method="POST" action="profile/edit" enctype ="multipart/form-data">
                  	
                  	 {{ method_field('PATCH') }}

                  	 {{ csrf_field() }}
                  	

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Full Name <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="name" name="name"  required="required" value="{{  Auth::user()->name }}" class="form-control col-md-7 col-xs-12" >
                      </div>
                    </div>
                   
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div id="gender" class="btn-group" data-toggle="buttons">
                          <label class="btn btn-default" >
                            <input type="radio" name="gender" value="male"> &nbsp; Male &nbsp;
                          </label>
                          <label class="btn btn-primary active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                            <input type="radio" name="gender" value="female"> Female
                          </label>
                        </div>
                      </div>
                    </div>
                    
                      <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Address<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="address" required="required" value="{{ $profile->address }}" placeholder="Address" class="form-control col-md-7 col-xs-12" name="address">
                      </div>
                    </div>
                     <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Profile Image<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="file" id="profile_image"  value="{{ $profile->profile_image }}" placeholder="Image" class="form-control col-md-7 col-xs-12" name="profile_image">
                      </div>
                    </div>
                     <div class="form-group">
	                  	 <div class="col-md-6 col-md-offset-3 profile_img" title="" data-original-title="Change the avatar">
                            @if ($profile->profile_image != null)
	                             <img src="profile_images/{{ $profile->profile_image }}" height="150px">
                            @endif
	                      </div>
                  	 </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" class="btn btn-primary">Cancel</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                      </div>
                    </div>

                  </form>
                </div>
              </div>
</div>
@endsection
