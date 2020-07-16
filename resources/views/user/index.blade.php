@extends('layouts.app')

@section('content')

@php
$no = 1;
@endphp
@include('layouts.headers.cards')

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header bg-transparent">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="text-uppercase text-muted ls-1 mb-1">Users</h6>
                            <h2 class="mb-0">All Users</h2>
                        </div>
                        <div class="col text-right">
                            <a href="{{ route('user.create') }}" class="btn btn-sm btn-primary"><i class="fa fa-plus mr-2"></i>Create</a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="table-light">
                            <th>No</th>
                            <th>Name</th>
                            <th>Username/NIK</th>
                            <th>role</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($datas as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->username }}</td>
                                <td>{{ $data->role }}</td>
                                <td class="p-2">
                                    <form action="{{ route('user.destroy', $data) }}" method="POST" onsubmit="return confirm('are you sure?, this action cant be undone')">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('user.show', $data) }}" class="btn btn-info btn-sm"><i class="fa fa-folder"></i></a>
                                        <a href="{{ route('user.edit', $data) }}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                        <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footers.auth')
</div>
@endsection