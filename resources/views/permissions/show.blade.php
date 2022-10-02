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
                                <h3 class="mb-0">Show Role</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('roles.index') }}" class="btn btn-sm btn-primary">Back</a>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table align-items-center table-flush table-fit custom-table">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col" class="ndelemet">Permissions</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <a class="btn text-uppercase btn-sm btn-outline-primary"
                                            href="{{ route('roles.edit', $role->id) }}"><strong>{{ $role->name }}</a>
                                    </td>
                                    <td class="ndelemet">
                                        @forelse ($rolePermissions as $v)
                                            <button type="button"
                                                class="btn-sm btn btn-outline-default">{{ $v->name }}</button>

                                        @empty
                                            <span class="badge badge-pill badge-danger">permission not
                                                found</span>
                                        @endforelse
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item"
                                                    href="{{ route('roles.edit', $role->id) }}"><strong>Edit</a>
                                                @can('role-delete')
                                                    {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id], 'style' => 'display:inline']) !!}
                                                    {!! Form::submit('Delete', ['class' => 'btn btn-outline-danger dropdown-item text-danger']) !!}
                                                    {!! Form::close() !!}
                                                @endcan
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
