@extends('layouts.app')


@section('content')
    @include('layouts.common.jubotron')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Permission Management</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('permissions.create') }}" class="btn btn-sm btn-primary">Create new</a>
                            </div>
                        </div>
                    </div>

                    @if ($message = Session::get('success'))
                        <div class="pad-lr-1p5rem">
                            <div class=" alert alert-success">
                                <strong>Success!</strong> <span>{{ $message }}. </span>
                            </div>
                        </div>
                    @elseif ( $message = Session::get('error') )
                        <div class="pad-lr-1p5rem">
                                <div class="alert alert-danger">
                                    <strong>Failed!</strong> <span>{{ $message }}. </span>
                                </div>
                            </div>
                    @endif


                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Creation Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($permissions as $permission)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>
                                            <span class="badge badge-info text-12px">{{ $permission->name }}</span>
                                        </td>
                                        <td>{{ $permission->created_at->format('d-M-Y') }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="text-center">Permissions not found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer pagination py-4 justify-content-end mb-0">
                        {{ $permissions->links() }}
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth')
    </div>
@endsection
