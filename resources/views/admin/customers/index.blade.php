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
    <h1 class="page-title"> Customers List</h1>
    <div class="page-header-actions">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Customers</a></li>
      </ol>
    </div>
  </div>
  <div class="page-content">

    <div class="site-action">
          <a class="site-action-toggle btn-raised btn btn-success btn-floating waves-effect waves-classic" href="{{ url('admin/customers/create')}}"> 
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
              <th>Name</th>
              <th>Mobile</th>
              <th>Image</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($customers as $customer)
            <tr>
              <td scope="row">{{ $customer->id }}</td>
              <td> {{ $customer->name }} </td>
              <td> {{ $customer->mobile }} </td>
              <td>
                <img class="avatar" height="40" src="http://localhost:8000/global/portraits/{{ rand(1, 20) }}.jpg" />
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