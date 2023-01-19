@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Hotel Listing'])
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h1 class="mb-0 text-sm">Hotel Listing</h1>
                    <button type="button" class="btn btn-warning float-end"><a class="link-light" href="addHotel">Add Hotel</a></button>
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

                                    <th class="text-secondary opacity-7">
                                        Opreations
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Employe Listing</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $members as $member)
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{$member->name}}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs text-secondary mb-0">{{$member->email}}</p>
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-xs text-secondary mb-0">{{$member->address}}</p>
                                    </td>

                                    <td class="align-middle">
                                        <button type="button" class="btn btn-danger "><a class="link-light" href={{"hotel/".$member['id']}}>Delete</a></button>
                                        <button type="button" class="btn btn-success "><a class="link-light" href={{"edit/".$member['id']}}>Edit</a></button>
                                    </td>
                                </tr>
                                @endforeach
                               
                            </tbody>
                        </table>
                        <nav aria-label="pagination navigation">
                            <ul class="pagination">
                                <li class="page-item ">
                                    <a class="page-link" href="http://127.0.0.1:8000/hotel?page=1" tabindex="-1">
                                        <i class="fa fa-angle-left"></i>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <!-- <li class="page-item"><a class="page-link" href="javascript:;">1</a></li> -->
                                <li class="page-item active">
                                    <a class="page-link" href="http://127.0.0.1:8000/hotel?page=1">1<span class="sr-only">(current)</span></a>
                                </li>
                                <!-- <li class="page-item"><a class="page-link" href="">2</a></li> -->
                                <li class="page-item">
                                    <a class="page-link" href="http://127.0.0.1:8000/hotel?page=2">
                                        <i class="fa fa-angle-right"></i>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footers.auth.footer')
</div>
@endsection