@extends('admin.layouts')

@push('styles')
  <style> form .error {  color: #ff0000;} </style>
 
@endpush

@push('scripts')

@endpush

@push('page_scripts')

<script src="{{ url('global')}}/js/Plugin/input-group-file.js"></script>
@endpush

@section('content')
<div class="page">
    <div class="page-header">
      <h1 class="page-title">Create Category</h1>
      <div class="page-header-actions">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
          <li class="breadcrumb-item active"><a href="javascript:void(0)">Categories</a></li>
        </ol>
      </div>
    </div>
    <div class="page-content">
    <div class="row"> 
    <div class="col-md-1"> </div>     
    <div class="col-md-10">
        <!-- Panel -->
        <div class="panel">
            <div class="panel-body container-fluid">
    
                <form action="{{ url('admin/category') }}" id="category"   name="category" method="POST" enctype="multipart/form-data" role="form">
                    @csrf
                    
                    <div>
                    
                        <div class="form-group">
                            <input type="text" class="form-control" required id="name_en" name="name_en" placeholder="Category Name">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" id="name_ta" name="name_ta" placeholder="Category in Tamil">
                        </div>


                        <div class="form-group">
                            <textarea class="maxlength-textarea form-control" name="description_en"  data-plugin="maxlength" data-placement="bottom-right-inside" maxlength="100" rows="2" placeholder="Category Description"></textarea>
                        </div>

                        <div class="form-group">
                            <textarea class="maxlength-textarea form-control" name="description_ta"  data-plugin="maxlength" data-placement="bottom-right-inside" maxlength="100" rows="2" placeholder="Description in Tamil"></textarea>
                        </div>

                        <div class="form-group">
                            <div class="input-group input-group-file" data-plugin="inputGroupFile">
                            <input type="text" class="form-control" placeholder="Upload Category Image" readonly="">
                            <span class="input-group-append">
                                <span class="btn btn-success btn-file waves-effect waves-classic">
                                <i class="icon md-upload" aria-hidden="true"></i>
                                <input type="file" name="image"  accept="image/*">
                                </span>
                            </span>
                            </div>
                        </div> 

                        <div class="form-group">
                            <label for="parent">Parent</label>
                            <select class="form-control" name="parent_category_id" id="parent">
                                <option value="">Primary Category</option>
                                @foreach ($categories as $item)
                                @if (is_null($item->parent))
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endif
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

 
 
  <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
   $(document).ready(function() 
      {  
   $('form input').keydown(function (e) {
     if (e.keyCode == 13) {
        e.preventDefault();
        return false;
    }
	
}); 
   }); 
</script>
 



 
 
  @endsection