@extends('layouts.app')
@section('content')
<div class="row">
            <div class="col-md-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Customer</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="btn btn-primary" href="/customers/add">Add Customer</a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <p>Manage All Customers</p>
                  <!-- start project list -->
                  <table class="table table-striped projects">
                    <thead>
                      <tr>
                        <th style="width: 1%">#</th>
                        <th style="width: 20%">Name</th>
                        <th>Phone Number</th>
                        <th>address</th>
                        <th>Discount</th>
                        <th>Outstanding Balance</th>
                        <th style="width: 20%">#Edit</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($Customers as $Customer)
                      <tr>
                        <td>#</td>
                        <td>{{$Customer->name}}</td>
                        <td>
                          <a>{{$Customer->phone_number}}</a>
                        </td>
                        <td>
                          {{$Customer->address}}
                        </td>
                        <td>
                           {{$Customer->discount}}%
                        </td>
                        <td class="project_progress">
                           {{$Customer->phone_number}}
                        </td>
                        <td>
                          <a href="/customers/edit/{{$Customer->id}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
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