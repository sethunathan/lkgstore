@extends('admin.layouts')

@push('styles')
<link rel="stylesheet" href="{{ url('assets')}}/examples/css/uikit/modals.css">
@endpush

@push('scripts')


@endpush

@push('page_scripts')

@endpush

@section('content')

<div class="page">
  <div class="page-header">
    <h1 class="page-title">Edit Category</h1>
    <div class="page-header-actions">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Category</a></li>
      </ol>
    </div>
  </div>
  <div class="page-content">



    @include('admin.category_create')


    <!-- Panel -->
    <div class="panel">
      <div class="panel-body container-fluid">
        <form method="POST">

            <div class="form-group">
                <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}">
            </div>

            <div class="form-group">
                <label for="parent">Parent</label>
                <select class="form-control" name="parent_category_id" id="parent">
                    <option value="0">Primary Category</option>
                    @foreach ($categories as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach

                </select>
            </div>

       <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
    <!-- End Panel -->

  </div>
</div>

@endsection