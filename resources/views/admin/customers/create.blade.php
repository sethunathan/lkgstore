@extends('admin.layouts')

@push('styles')
@endpush

@push('scripts')


@endpush

@push('page_scripts')
<script src="{{ url('global')}}/js/Plugin/input-group-file.js"></script>
@endpush

@section('content')
<div class="page">
    <div class="page-header">
      <h1 class="page-title">Create Customer</h1>
      <div class="page-header-actions">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
          <li class="breadcrumb-item active"><a href="javascript:void(0)">Customers</a></li>
        </ol>
      </div>
    </div>
    <div class="page-content">
    <div class="row"> 
    <div class="col-md-1"> </div>     
    <div class="col-md-9">
        <!-- Panel -->
        <div class="panel">
            <div class="panel-body container-fluid">
    
                <form action="{{ url('admin/customers') }}" method="POST" enctype="multipart/form-data" role="form">
                    @csrf
                    
                    <div>
                    
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="mobile" placeholder="Mobile">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" id="password" name="password" placeholder="Password">
                        </div>

                    </div>
                    <div class="text-left">
                        <button type="submit" class="btn btn-primary waves-effect waves-classic">Create</button>
                        <a class="btn btn-sm btn-white btn-pure waves-effect waves-classic" data-dismiss="modal"
                            href="javascript:void(0)">Cancel</a>
                    </div>
                </form>
    
            </div>
        </div>
        <!-- End Panel -->
    </div>
    </div>
    
        </div>
  </div>
  
  @endsection