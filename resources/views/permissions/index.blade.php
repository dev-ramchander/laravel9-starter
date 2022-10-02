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
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($permissions as $permission)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>
                                            <button class="btn btn-sm text-uppercase btn-outline-primary""><strong>{{ $permission->name }}</strong></button>
                                        </td>
                                        <td>{{ $permission->created_at->format('d-M-Y') }}</td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    @can('administration')
                                                        {!! Form::open(['method' => 'DELETE', 'route' => ['permissions.destroy', $permission->id], 'style' => 'display:inline']) !!}
                                                        {!! Form::submit('Delete', ['class' => 'btn btn-outline-danger dropdown-item text-danger']) !!}
                                                        {!! Form::close() !!}
                                                    @endcan
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="text-center">Roles not found</td>
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
