@extends('backend.global.layouts')

@section('content')

    <!-- Page Heading -->
    {{-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">About Us</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div> --}}

    <div class="row">
        <div class="col-xl-2 col-sm-12 col-md-2 col-lg-2"></div>
        <div class="col-xl-8 col-sm-12 col-md-8 col-lg-8">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">About Us</h6>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="aboutTitle">About Title</label>
                                    <input type="text" class="form-control" id="aboutTitle" placeholder="Enter About Title">
                                </div>
                                <div class="form-group">
                                    <label for="description">Company Description</label>
                                    <textarea name="description" id="description" cols="20" rows="5" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="companyImage">Company Image</label>
                                    <input type="file" class="form-control" id="companyImage">
                                </div>
                                
                                <div class="form-group">
                                    <label for="videoUrl">Company Video URL</label>
                                    <textarea name="description" id="videoUrl" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection