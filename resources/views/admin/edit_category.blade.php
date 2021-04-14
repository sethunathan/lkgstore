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
 

    <!-- Panel -->
    <div class="panel">
      <div class="panel-body container-fluid">
        <form action="{{ url('admin/category') }}" method="PUT" enctype="multipart/form-data" role="form">
            
			<div class="form-group">
                <input type="text" class="form-control" 
                    required id="id" name="id" readonly value="{{ $category->id }}"  >
            </div> 
            <div class="form-group">
                <input type="text" class="form-control" 
                    required id="name_en" name="name_en"  value="{{ $category->name_en }}"  placeholder="Category Name">
            </div> 
            
            <div class="form-group">
                <input type="text" class="form-control" 
				 required id="name_ta" name="name_ta"  value="{{ $category->name_ta }}" placeholder="Category in Tamil">
            </div>
			
			 <div class="form-group">
                            <textarea class="maxlength-textarea form-control" name="description_en"  data-plugin="maxlength" data-placement="bottom-right-inside" maxlength="100" rows="2"
							placeholder="Category Description">{{ $category->description_en }}</textarea>
             </div>
			 
			  <div class="form-group">
                  <textarea class="maxlength-textarea form-control" name="description_ta"  data-plugin="maxlength" data-placement="bottom-right-inside" maxlength="100" rows="2"
							placeholder="Category Description">{{ $category->description_ta }}</textarea>
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