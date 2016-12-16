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
                  <form id="demo-form2"  class="form-horizontal form-label-left" method="POST" action="/roles/add" enctype ="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Role Name <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="name" name="name"  required="required" value="" class="form-control col-md-7 col-xs-12" >
                      </div>
                      
                    </div>
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Description<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="description" name="description"  required="required" value="" class="form-control col-md-7 col-xs-12" >
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

<div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Roles <small>All Roles</small></h2>
                  
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Edit</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($Roles as $Role) 
                      <tr>
                        <th scope="row">#</th>
                        <td>{{ $Role->name }}</td>
                        <td>{{ $Role->description }}</td>
                        <td><a href="/roles/edit/{{ $Role->id }}">Edit</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>

                </div>
              </div>
            </div>
          </div>
@endsection