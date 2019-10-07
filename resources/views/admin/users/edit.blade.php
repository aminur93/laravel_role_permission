@extends('layouts.master')

@section('page')
    User Edit
@stop

@push('css')
    @endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">User Edit</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{ route('adminusers.update',['users' => $users->id]) }}" method="post">
                        @csrf
                        {{ method_field('PUT') }}

                        @foreach($roles as $role)
                            <div class="form-check">
                                <input type="checkbox" name="roles[]" value="{{ $role->id }}"
                                   {{ $users->hasAnyRole($role->name) ? 'checked' : '' }}
                                >
                                <label for="">{{ $role->name }}</label>
                            </div>
                            @endforeach

                        <button type="submit" class="btn btn-sm btn-primary" style="margin-left: 20px;">Update</button>

                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@stop

@push('js')
    @endpush