@extends('admin.Website.layout.app')

@section('title', 'Admin edit event')

@section('main_content')
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Edit a faculty</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#!"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Edit a faculty</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
            </div>
        </div>
        <!-- [ form-element ] start -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h5>Edit a faculty</h5>
                    <hr>
                    <div class="row">
                        <form action="{{ route('admin_edit_faculty_submit', $single_faculty->id) }}" method="POST">
                            @csrf
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Faculity Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Name" name="name"
                                        value="{{ $single_faculty->name }}">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea id="text" class="form-control" rows="4" cols="50"
                                        placeholder="Enter Description" name="description">
                                        {{ $single_faculty->description }}
                                    </textarea>
                                </div>
                                <button type="submit" class="btn  btn-primary">Submit</button>
                            </div>
                            <div class="col-md-6">
                                <label>Select Date</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text">Date Start</label>
                                        <input type="date" name="date_start" value="{{ $single_faculty->date_start }}">
                                    </div>
                                    <div style="margin-left: 5%">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text">Date End</label>
                                            <input type="date" name="date_end" value="{{ $single_faculty->date_end }}">
                                        </div>
                                    </div>
                                </div>
                                <label>Select a Marketing Coordinator</label>
                                <p>Previous Marketing Coordinator: {{ $single_faculty->coordinator->name }}</p>
                                <div class="input-group mb-3">
                                    <select class="custom-select" id="inputGroupSelect01" name="coordinator">
                                        @foreach ($coordinators as $coordinator)
                                        <option selected>{{ $coordinator->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</section>
@endsection