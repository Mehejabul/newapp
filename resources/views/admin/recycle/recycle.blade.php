


@extends('layouts.admin')
@section('content')


<div class="row">
    <div class="col-12 col-lg-4 col-xxl-4 d-flex">
        <div class="card flex-fill">
            <div class="card-body py-4">
                <a href=" {{ route('recycle.user') }}">
                <div class="d-flex align-items-start">
                    <div class="flex-grow-1">
                        <h2 class="mb-2">Total Users</h2>
                    </div>
                    <div class="d-inline-block ms-3">
                        <div class="stat">
                        <h3 class="text-center">{{ Count($data );  }}</h3>
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
                <a href=" {{ route('recycle.banner') }}">
                <div class="d-flex align-items-start">
                    <div class="flex-grow-1">
                        <h2 class="mb-2">Total banner</h2>
                    </div>
                    <div class="d-inline-block ms-3">
                        <div class="stat">
                        <h3 class="text-center">{{ Count($ban);  }}</h3>
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
                <a href=" {{ route('recycle.post') }}">
                <div class="d-flex align-items-start">
                    <div class="flex-grow-1">
                        <h2 class="mb-2">Total POst</h2>
                    </div>
                    <div class="d-inline-block ms-3">
                        <div class="stat">
                        <h3 class="text-center">{{ Count($posts);  }}</h3>
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
                <a href=" {{ route('recycle.category') }}">
                <div class="d-flex align-items-start">
                    <div class="flex-grow-1">
                        <h2 class="mb-2">Total category</h2>
                    </div>
                    <div class="d-inline-block ms-3">
                        <div class="stat">
                        <h3 class="text-center">{{ Count($category);  }}</h3>
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
                <a href=" {{ route('recycle.tag') }}">
                <div class="d-flex align-items-start">
                    <div class="flex-grow-1">
                        <h2 class="mb-2">Total Tag</h2>
                    </div>
                    <div class="d-inline-block ms-3">
                        <div class="stat">
                        <h3 class="text-center">{{ Count($del_tag);  }}</h3>
                        </div>
                    </div>
                </div>
            </a>
            </div>
        </div>
    </div>

</div>
@endsection
