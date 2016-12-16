@extends('layouts.app')
@section('content')
<div class="row">
            <div class="col-md-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Users</h2>
                  <ul class="nav navbar-right panel_toolbox">
                  
                    <li><a class="btn btn-primary" href="/users/add">Add User</a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <p>Manage All Users</p>

                  <!-- start project list -->
                  <table class="table table-striped projects">
                    <thead>
                      <tr>
                        <th style="width: 1%">#</th>
                        <th style="width: 20%">Email</th>
                        <th>Name</th>
                        <th>Passport</th>
                        <th>Phone Number</th>
                        <th>Role</th>
                        <th style="width: 20%">#Edit</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($AllUsers as $User)
                      <tr>
                        <td>#</td>
                        <td>
                          <a>{{$User->email}}</a>
                        </td>
                        <td>
                        {{$User->name}}
                        </td>
                        <td>
                          <ul class="list-inline">
                            <li>
                             @if ($User->profile()->first() != null)
                              <img src="/profile_images/{{ $User->profile()->first()->profile_image }}" class="avatar" alt="Avatar">
                             @else
                               <img src="/images/user.png" class="avatar" alt="Avatar">
                             @endif
                            </li>
                           
                          </ul>
                        </td>

                        <td class="project_progress">
                         {{$User->phone_number}}
                        </td>
                        <td>
                          <button type="button" class="btn btn-success btn-xs">{{$User->userRole()->first()->role->name}}</button>
                        </td>
                        <td>
                          <a href="/users/edit/{{$User->id}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  <!-- end project list -->

                </div>
              </div>
            </div>
          </div>
@endsection