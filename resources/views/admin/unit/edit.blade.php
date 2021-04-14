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
    <h1 class="page-title">Edit Unit</h1>
    <div class="page-header-actions">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Unit</a></li>
      </ol>
    </div>
  </div>
  <div class="page-content">
 

    <!-- Panel -->
    <div class="panel">
      <div class="panel-body container-fluid">
        <form action="{{ url('admin/unit/')}}/{{ $unit->id }} }}" method="POST" enctype="multipart/form-data" role="form">
           <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">  
			<div class="form-group">
                <input type="text" class="form-control" 
                    required id="id" name="id" readonly value="{{ $unit->id }}"  />
            </div> 
            <div class="form-group">
                <input type="text" class="form-control" 
                    required id="name" name="name"    value="{{ $unit->name }}"  placeholder="Name"/>
            </div> 
            
           
			 

       <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
    <!-- End Panel -->

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