@extends('layouts.app')
@section('content')
<div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Roles <small>Add Role</small></h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <form id="demo-form2"  class="form-horizontal form-label-left" method="POST" action="/roles/edit/{{$role->id}}" >
                   
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Role Name <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="name" name="name"  required="required" value="{{$role->name}}" class="form-control col-md-7 col-xs-12" >
                      </div>
                      
                    </div>
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Description<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="description" name="description"  required="required" value="{{$role->description}}" class="form-control col-md-7 col-xs-12" >
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Description<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                       <div id="active" class="btn-group" data-toggle="buttons">
                          <label class="btn btn-default" >
                            <input type="radio" name="active" value="1"> &nbsp; Active &nbsp;
                          </label>
                          <label class="btn btn-primary active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                            <input type="radio" name="active" value="0"> Not Active
                          </label>
                        </div>
                      </div>
                    </div>

                     <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" class="btn btn-success">Submit</button>
                      </div>
                    </div>

                  </form>
                   
                </div>
              </div>
            </div>
          </div>

@endsection