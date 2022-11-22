


@extends('layouts.admin')
@section('content')


<div class="row">
    <div class="col-12 col-lg-4 col-xxl-4 d-flex">
        <div class="card flex-fill">
            <div class="card-body py-4">
                <a href=" {{ route('all.index') }}">
                <div class="d-flex align-items-start">
                    <div class="flex-grow-1">
                        <h2 class="mb-2">Total Users</h2>
                        <div class="mb-0">
                            {{--  <span class="badge badge-soft-success me-2"> {{ Count($data );  }}</span>  --}}
                            {{--  <span class="text-muted">Since last week</span>  --}}
                        </div>
                    </div>
                    <div class="d-inline-block ms-3">
                        <div class="stat">
                        <h3>{{ Count($data );  }}</h3>
                        </div>
                    </div>
                </div>
            </a>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-4 col-xxl-4 d-flex">
        <div class="card flex-fill">
            <div class="card-body py-4">
                <div class="d-flex align-items-start">
                    <div class="flex-grow-1">
                        <h3 class="mb-2">43</h3>
                        <p class="mb-2">Pending Orders</p>
                        <div class="mb-0">
                            <span class="badge badge-soft-danger me-2"> -4.25% </span>
                            <span class="text-muted">Since last week</span>
                        </div>
                    </div>
                    <div class="d-inline-block ms-3">
                        <div class="stat">
                            <i class="align-middle text-danger" data-feather="shopping-bag"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-4 col-xxl-4 d-flex">
        <div class="card flex-fill">
            <div class="card-body py-4">
                <div class="d-flex align-items-start">
                    <div class="flex-grow-1">
                        <h3 class="mb-2">$ 18.700</h3>
                        <p class="mb-2">Total Revenue</p>
                        <div class="mb-0">
                            <span class="badge badge-soft-success me-2"> +8.65% </span>
                            <span class="text-muted">Since last week</span>
                        </div>
                    </div>
                    <div class="d-inline-block ms-3">
                        <div class="stat">
                            <i class="align-middle text-info" data-feather="dollar-sign"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
