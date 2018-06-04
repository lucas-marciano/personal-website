@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Projects</div>
                <div class="card-body">
                    <a class="btn btn-success" style="color: white">New Project</a>


                    <div style="margin-top: 20px">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="http://placeholder.pics/svg/286x180" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Name</h5>
                                <p class="card-text">Description.</p>
                                <a href="#" class="btn btn-primary btn-block">Edit</a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
