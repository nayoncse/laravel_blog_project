@extends('layout.theme1.master')
@section('content')
<div class="row">
    <div class="offset-2 col-lg-8 col-xlg-9 col-md-7">
        <div class="card">
            <div class="card-body">
                <form class="form-horizontal form-material" action="{{ route('post.update',$post->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    @include('admin.post._form')
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button class="btn btn-success">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection