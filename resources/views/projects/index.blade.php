@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('projects.creatwerwerwerwee') }}" title="Create a project"> <i class="fas fa-plus-circle">create</i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Introduction</th>
            <th>Location</th>
            <th>Cost</th>
            <th>Date Created</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($projects as $project)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $project->name }}</td>
                <td>{{ $project->introduction }}</td>
                <td>{{ $project->location }}</td>
                <td>{{ $project->cost }}</td>
                <td>{{ date_format($project->created_at, 'jS M Y') }}</td>
                <td>
                    <form action="{{ route('projects.destroy', $project->id) }}" method="POST">

                        <ul>
                            <li>
                                <a href="{{ route('projects.show', $project->id) }}" title="show">
                                    <i class="fas fa-eye text-success  fa-lg">show</i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('projects.edit', $project->id) }}">
                                    <i class="fas fa-edit  fa-lg">edit</i>

                                </a>
                            </li>
                            <li>
                                @csrf
                                @method('DELETE')
                                <button type="submit" title="delete" style="border: none; background-color:transparent;">
                                    <i class="fas fa-trash fa-lg text-danger">delete</i>

                                </button>
                            </li>
                        </ul>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $projects->links() !!}

@endsection
