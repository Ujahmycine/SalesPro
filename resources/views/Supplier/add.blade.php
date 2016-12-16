@extends('layouts.app')
@section('content')

<div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Supplier <small>Create new supplier</small></h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <form id="demo-form2"  class="form-horizontal form-label-left" method="POST" action="/suppliers/add" >
                   
                    {{ csrf_field() }}

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" >Name <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="name" name="name"  required="required" value="" class="form-control col-md-7 col-xs-12" >
                      </div>
                      
                    </div>
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" >Address<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="address" name="address"  required="required" value="" class="form-control col-md-7 col-xs-12" >
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" >Phone Number<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="phone_number" name="phone_number"  required="required" value="" class="form-control col-md-7 col-xs-12" >
                      </div>
                    </div>

                  

                  

                  

                     <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" class="btn btn-success">Add</button>
                      </div>
                    </div>

                  </form>
                   
                </div>
              </div>
            </div>
          </div>

@endsection