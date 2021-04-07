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
    <h1 class="page-title"> Cities</h1>
    <div class="page-header-actions">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Cities</a></li>
      </ol>
    </div>
  </div>
  <div class="page-content">

    @include('admin.city_create')

    <!-- Panel -->
    <div class="panel">
      <div class="panel-body container-fluid">

        <table class="table table-bordered ">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>State</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($cities as $city)
            <tr>
              <td scope="row">{{ $city->id }}</td>
              <td> {{ $city->name }}</td>
              <td>
                {{ $city->state->name }}
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