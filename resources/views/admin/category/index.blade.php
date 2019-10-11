@extends('layout.theme1.master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ $title }}</h4>
                    <a href="{{ route('category.create') }}" class="btn btn-primary">Add new</a>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Details</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $serial++ }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->details }}</td>
                                    <td>
                                        <a href="{{ route('category.edit',$category->id) }}">Edit</a>
                                        <form method="post" action="{{ route('category.destroy',$category->id) }}">
                                            @csrf
                                            @method('delete')
                                            <button onclick="return confirm('Are you confirm to delete this category')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <h6 class="card-title"><i class="m-r-5 font-18 mdi mdi-numeric-2-box-multiple-outline"></i> Table Without Outside Padding</h6>
                </div>
            </div>
        </div>

    </div>
@endsection