@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card border border-secondary">
            <div class="card-header bg-transparent border-secondary d-flex justify-content-between ">
                <h5 class="card-title">Subscriber</h5>
            </div>
            <div class="card-body">
                <table class="table table-bordered dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th> Serial</th>
                            <th> Id </th>
                            <th> Email</th>
                            <th> Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $serial = 1;
                        ?>
                        @foreach ($subscriber as $data )

                        <tr>
                            <td>{{ $serial ++ }}</td>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->email}}</td>
                            <td class="table-action">
                                <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                                <a href="#" type="button" data-bs-toggle="modal"
                                    data-bs-target="#defaultModalPrimary{{ $data->id}}">
                                    <i class="align-middle" data-feather="trash"></i>
                                </a>
                            </td>
                        </tr>
                        {{--   Modal start  --}}
                        <div class="modal fade" id="defaultModalPrimary{{ $data->id }}" tabindex="-1" role="dialog"
                            aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Default modal</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body m-3">
                                        <p class="mb-0"> Are you want to delete this item??</p>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="{{ route('subscriber.destroy',$data->id) }}" type="button"
                                            class="btn btn-danger">Yes</a>
                                        <button type="button" class="btn btn-dark"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer border border-secondary">
                <div class="col-lg-12">
                    <button type="button" class="btn btn-primary">Copy</button>
                    <button type="button" class="btn btn-secondary">Excel</button>
                    <button type="button" class="btn btn-danger">PDF</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
