@extends('master.backend')
@section('title',__('backend.permissions'))
@section('styles')
    @include('backend.templates.components.dt-styles')
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">@lang('backend.permissions'):</h4>
                    <a href="{{ route('backend.permissions.create') }}" class="btn btn-primary"><i
                            class="fas fa-plus"></i> &nbsp;@lang('backend.add-new')
                    </a>
                </div>
            </div>
            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                   style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>@lang('backend.name'):</th>
                    <th>@lang('backend.time'):</th>
                    <th class="text-center">@lang('backend.actions'):</th>
                </tr>
                </thead>
                <tbody>
                @foreach($permissions as $permission)
                    <tr>
                        <td>{{ $permission->id }}</td>
                        <td>{{ $permission->name }}</td>
                        <td>{{ date('d.m.Y H:i:s',strtotime($permission->created_at))}}</td>
                        <td class="text-center">
                            <a class="btn btn-primary"
                               href={{ route('backend.permissions.edit',['permission'=>$permission->id]) }}>
                                <i class="fas fa-edit"></i>
                            </a>
                            <a class="btn btn-danger"
                               href="{{ route('backend.delPermission',['id'=>$permission->id]) }}">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('scripts')
    @include('backend.templates.components.dt-scripts')
@endsection
