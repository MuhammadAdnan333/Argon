@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Employee Listing'])
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h1 class="mb-0 text-sm">Employee Listing</h1>
                    <button type="button" class="btn btn-warning float-end"><a class="link-light" href="addEmployee">Add Employee</a></button>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Name</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Email</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Address</th>
                                    <!-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Phone</th> -->
                                    <th class="text-secondary opacity-7">
                                        Opreations
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($employees as $employee)
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{$employee->name}}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs text-secondary mb-0">{{$employee->email}}</p>
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-xs text-secondary mb-0">{{$employee->address}}</p>
                                    </td>
                                    <td class="align-middle">
                                        <form action="{{ route('/employeList/{id}', $employee->id)}}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <input class="btn btn-danger" type="submit" value="Delete" />
                                            <button type="button" class="btn btn-success "><a class="link-light" href={{"updateEmploye/".$employee['id']}}>Edit</a></button>
                                        </form>
                                        <!-- <button type="button" class="btn btn-danger "><a class="link-light" href={{"employeList/".$employee['emp_id']}}>Delete</a></button> -->
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
    @include('layouts.footers.auth.footer')
</div>
@endsection