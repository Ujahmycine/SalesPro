@extends('layouts.app')
@section('content')

<div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Roles <small>edit User</small></h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <form id="demo-form2"  class="form-horizontal form-label-left" method="POST" action="/users/edit/{{$User->id}}" >
                   
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Name <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="name" name="name"  required="required" value="{{$User->name}}" class="form-control col-md-7 col-xs-12" >
                      </div>
                      
                    </div>
                   <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Email<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="email" name="email"  required="required" value="{{$User->email}}" class="form-control col-md-7 col-xs-12" >
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Phone Number<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="phone_number" name="phone_number"  required="required" value="{{$User->phone_number}}" class="form-control col-md-7 col-xs-12" >
                      </div>
                    </div>
                   
                      <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" >Role<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                       <select class="form-control" name="role_name"  id="role_name">
                          <option>Choose option</option>
                          @foreach($Roles as $role)
                            <option value="{{$role->id}}"  {{ ($User->userRole()->first()->role->id == $role->id) ? ' selected="selected"' : '' }} >{{$role->name}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>


                     <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" class="btn btn-success">Save</button>
                      </div>
                    </div>

                  </form>
                   
                </div>
              </div>
            </div>
          </div>

@endsection