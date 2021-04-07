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
        <h1 class="page-title">Create Product</h1>
        <div class="page-header-actions">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Products</a></li>
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

                        <form action="{{ url('admin/products') }}" method="POST" enctype="multipart/form-data"
                            role="form">
                            @csrf

                            <div>

                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name[en]"
                                        placeholder="Product Name">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name[ta]"
                                        placeholder="Product in Tamil">
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Rs.</span>
                                        </div>
                                        <input type="number" class="form-control" id="price" name="price" step="0.05"
                                            placeholder="Price">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <textarea class="maxlength-textarea form-control" name="description[en]"
                                        data-plugin="maxlength" data-placement="bottom-right-inside" maxlength="100"
                                        rows="2" placeholder="Product Description"></textarea>
                                </div>

                                <div class="form-group">
                                    <textarea class="maxlength-textarea form-control" name="description[ta]"
                                        data-plugin="maxlength" data-placement="bottom-right-inside" maxlength="100"
                                        rows="2" placeholder="Description in Tamil"></textarea>
                                </div>

                                <div class="form-group">
                                    <div class="input-group input-group-file" data-plugin="inputGroupFile">
                                        <input type="text" class="form-control" placeholder="Upload Product Image"
                                            readonly="">
                                        <span class="input-group-append">
                                            <span class="btn btn-success btn-file waves-effect waves-classic">
                                                <i class="icon md-upload" aria-hidden="true"></i>
                                                <input type="file" name="image" accept="image/*">
                                            </span>
                                        </span>
                                    </div>
                                </div>



                                <div class="form-group">
                                    <label for="parent">Category</label>
                                    <select class="form-control" name="category_id" id="category_id">
                                        @foreach ($categories as $item)

                                        <option value="{{ $item->id }}">{{ $item->name }}</option>

                                        @endforeach

                                    </select>
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