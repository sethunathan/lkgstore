@extends('admin.layouts')

@push('styles')
@endpush

@push('scripts')


@endpush

@push('page_scripts')

@endpush

@section('content')

<div class="page">
  <div class="page-header">
    <h1 class="page-title"> Categories</h1>
    <div class="page-header-actions">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Categories</a></li>
      </ol>
    </div>
  </div>
  <div class="page-content">

    <div class="site-action">
          <a class="site-action-toggle btn-raised btn btn-success btn-floating waves-effect waves-classic" href="{{ url('admin/category/create')}}"> 
            <i class="front-icon md-plus animation-scale-up" aria-hidden="true"></i>
          </a> 
   </div>



    <!-- Panel -->
    <div class="panel">
      <div class="panel-body container-fluid">

        <table class="table table-bordered ">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name_en</th>
              <th>Name_ta</th>
              <th>Image</th>
              <th>Parent</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($categories as $category)
            <tr>
              <td scope="row">{{ $category->id }}</td>
              <td> {{ $category->name }} </td>
              <td> {{ $category->getTranslation('name', 'ta') }} </td>
              <td>
                <img class="rounded" height="40" src="{{$category->getFirstMediaUrl('images', 'thumb')}}" />
                </td>
              <td>
                @if ($category->parent)
                {{ $category->parent->name }}
                @endif
              </td>
            </tr>
            @endforeach

          </tbody>
        </table>

      </div>
    </div>
    <!-- End Panel -->

  </div>
</div>

@endsection