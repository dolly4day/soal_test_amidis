@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Department') }}</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($departments as $department)
                            <tr>
                                <td>{{ $department->nama }}</td>
                                <td>
                                    <a class="btn btn-warning" href="{{ route('department.edit', $department) }}"> {{ __('Edit') }} </a>
                                    &nbsp; &nbsp; &nbsp;
                                    <a class="btn btn-danger" href="{{ route('department.destroy', $department) }}"> {{ __('Hapus') }} </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="2"><a class="btn btn-success" href="{{ route('department.create') }}"> {{ __('Buat') }} </a></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
