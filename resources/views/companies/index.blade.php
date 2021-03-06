@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Companies</h2>
            </div>
            <div class="pull-right" style="margin-bottom:5;">
                @can('company-create')
                <a class="btn btn-success" href="{{ route('companies.create') }}"> Create New Company</a>
                @endcan
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success" style="margin-top: 10;padding-bottom: inherit;">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Registration Number</th>
            <th>Name</th>
            <th>Address</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($companies as $company)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $company->reg_no }}</td>
            <td>{{ $company->name }}</td>
            <td>{{ $company->address }}</td>
            <td>
                <form action="{{ route('companies.destroy',$company->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('companies.show',$company->id) }}">Show</a>
                    @can('company-edit')
                    <a class="btn btn-primary" href="{{ route('companies.edit',$company->id) }}">Edit</a>
                    @endcan

                    @csrf
                    @method('DELETE')
                    @can('company-delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    @endcan
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $companies->links() !!}

<p class="text-center text-primary"><small>Developed by Harsh Pansuriya</small></p>

@endsection