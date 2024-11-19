@extends('partials.layout')
@section('title', 'Posts')
@section('content')
    <div class="container mx-auto">
        <a href="{{route('posts.create')}}" class="btn btn-primary">New Post</a>
        <div class="text-center my-2">
            {{$posts->links()}}
        </div>

        <table class="table table-zebra">
            <thead>
                <th>ID</th>
                <th>Title</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Actions</th>
            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->created_at}}</td>
                        <td>{{$post->updated_at}}</td>
                        <td>
                            <div class="join">
                                <a href="" class="btn join-item btn-info">View</a>
                                <a href="" class="btn join-item btn-warning">Edit</a>
                                <a href="" class="btn join-item btn-error">Delete</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
