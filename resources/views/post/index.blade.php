@extends('admin.layouts.dashboard')
@section('titlePage','List Blog')
@section('titleDashboard','List Blog')
@section('content')

    <table class="table table-bordered" >
        <thead>
        <tr>
            <th>STT</th>
            <th>Title</th>
            <th>Description</th>
            <th>Author</th>
            <th>Category</th>
            <th>Image</th>
            <th colspan="2">Edit</th>
        </tr>
        </thead>
        <tbody>
        @forelse($posts as $key => $post)
            <tr>
                <th>{{++$key}}</th>
                <th>{{$post->title}}</th>
                <th>{{$post->description}}</th>
                <th>{{$post->user->name}}</th>
                <th>{{$post->category->name}}</th>
                <th><img src="{{asset('storage/'.$post->image)}}" height="50px" width="50px"></th>
                <th><a href="{{route('post.edit',$post->id)}}" class=" btn btn-primary"><i class="fa fa-edit"></i></a></th>
                <th><a href="{{route('post.delete',$post->id)}}" onclick="confirm('Ban chac chan muon xoa?')" class="btn btn-danger">
                        <i class="fa fa-trash "></i>
                    </a></th>
            </tr>
        @empty
            <tr>
                <th colspan="7">No Data</th>
            </tr>
        @endforelse
        </tbody>
    </table>
@endsection
