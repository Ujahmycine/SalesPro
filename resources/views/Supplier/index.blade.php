@extends('layouts.app')
@section('content')
<div class="row">
            <div class="col-md-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Supplier</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="btn btn-primary" href="/suppliers/add">Add Supplier</a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <p>Manage All Suppliers</p>
                  <!-- start project list -->
                  <table class="table table-striped projects">
                    <thead>
                      <tr>
                        <th style="width: 1%">#</th>
                        <th style="width: 20%">Name</th>
                        <th>Phone Number</th>
                        <th>address</th>
                        <th style="width: 20%">#Edit</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($Suppliers as $Supplier)
                      <tr>
                        <td>#</td>
                        <td>{{$Supplier->name}}</td>
                        <td>
                          <a>{{$Supplier->phone_number}}</a>
                        </td>
                        <td>
                          {{$Supplier->address}}
                        </td>
                       
                        <td>
                          <a href="/suppliers/edit/{{$Supplier->id}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
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