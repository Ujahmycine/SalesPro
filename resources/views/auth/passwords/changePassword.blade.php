@extends('layouts.app')
@section('content')

<script>
function checkPass()
{
    //Store the password field objects into variables ...
    var password = document.getElementById('password');
    var passwordConfirmation = document.getElementById('confirm_new_password');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field 
    //and the confirmation field
    if(password.value == passwordConfirmation.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
		passwordConfirmation.style.backgroundColor = goodColor;
        message.style.color = goodColor;
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
		passwordConfirmation.style.backgroundColor = badColor;
        message.style.color = badColor;
    }
}  
</script>
<div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">

              
                  <div class="clearfix"></div>
                </div>

                <div class="x_content">
                  <br>
                 
                  	<form id="demo-form2"  class="form-horizontal form-label-left" method="POST" action="/changePassword/save" >
                  	 {{ method_field('PATCH') }}
                  	 {{ csrf_field() }}

                  	<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Phone Number<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="phone_number" required="required" value="{{ Auth::user()->phone_number }}" placeholder="" class="form-control col-md-7 col-xs-12" name="phone_number">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">New Password<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="password" id="password" required="required" value="" placeholder="Enter new Password" class="form-control col-md-7 col-xs-12" name="password">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Confirm New Password<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="password" id="confirm_new_password" required="required" value="" placeholder="Verify New Password" class="form-control col-md-7 col-xs-12" name="confirm_new_password" onkeyup="checkPass(); return false;">
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
