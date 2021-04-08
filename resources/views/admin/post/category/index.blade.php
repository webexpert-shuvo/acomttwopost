@extends('admin.layouts.app')
    @section('admin-content')
        		<!-- Main Wrapper -->
                <div class="main-wrapper">

                    <!-- Header -->
                    @include('admin.layouts.header')
                    <!-- /Header -->

                    <!-- Sidebar -->
                    @include('admin.layouts.menu')
                    <!-- /Sidebar -->

                    <!-- Page Wrapper -->
                    <div class="page-wrapper">

                        <div class="content container-fluid">

                            <!-- Page Header -->
                            <div class="page-header">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h3 class="page-title">Welcome {{ Auth::user()->name }}!</h3>
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /Page Header -->

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">All Categorys</h4>
                                            <a class="btn btn-sm btn-success  add_cate_btn" href="">Add New Category</a>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-striped mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Name</th>
                                                            <th>Slug</th>
                                                            <th>Time</th>
                                                            <th>Status</th>
                                                            <th>Status Action</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                       @foreach ($categorys as $category)
                                                            <tr>
                                                                <td>{{ $loop ->index +1 }}</td>
                                                                <td>{{ $category ->name }}</td>
                                                                <td>{{ $category ->slug }}</td>
                                                                <td>{{ $category ->created_at -> diffForHumans() }}</td>
                                                                <td>
                                                                    @if ($category ->status == 'Active')
                                                                        <span class="badge badge-success">Active</span>
                                                                    @else
                                                                    <span class="badge badge-danger"  >Inactive</span>
                                                                    @endif
                                                                </td>

                                                                <td>
                                                                    <div class="status-toggle">
                                                                        <input cate_id="{{ $category ->id}}" {{ ( $category ->status == 'Active' ? "checked" : " " )  }} type="checkbox" id="status_{{$loop ->index +1  }}" class="check cate_status_btn ">
                                                                        <label for="status_{{$loop ->index +1  }}" class="checktoggle">checkbox</label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="" class="btn btn-sm btn-info">Edit</a>
                                                                    <a cate_delete="{{$category ->id}}"   href="" class="btn btn-sm btn-danger cate_delete">Delete</a>
                                                                </td>
                                                            </tr>
                                                       @endforeach


                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>



                        </div>
                    </div>
                    <!-- /Page Wrapper -->

                </div>
                <!-- /Main Wrapper -->

                <div  id="cate_modal_form" class="modal fade">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content  ">
                            <div class="modal-header">
                                <h2>Add New Category</h2>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('category.store') }}" method="POST" >
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Category Name</label>
                                        <input  name="cate_name" class="form-control"  type="text" placeholder="Dhaka">
                                    </div>
                                    <div class="form-group">
                                        <input class="btn btn-sm btn-success" value="Add New Category"   type="submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

    @endsection
