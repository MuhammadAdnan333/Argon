@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Add Hotel'])
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h1 class="mb-0 text-sm">Add Hotel</h1>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <form action="" method = "POST">
                        @csrf
                        <div class="form-group">
                            <input class="form-control" type="hidden" value="" id="id" name ="id">
                        </div>
                        <div class="form-group">
                            <label for="example-tel-input" class="form-control-label">Name</label>
                            <input class="form-control" type="text" value="" id="name" name ="name">
                        </div>  
                        <div class="form-group">
                            <label for="example-email-input" class="form-control-label">Email</label>
                            <input class="form-control" type="email" value="" id="email" name = "email">
                        </div>
                        <div class="form-group">
                            <label for="example-tel-input" class="form-control-label">Address</label>
                            <input class="form-control" type="text" value="" id="address" name = "address">
                        </div> 
                        <button type="submit" class="btn btn-warning float-start">Add Hotel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footers.auth.footer')
</div>
@endsection