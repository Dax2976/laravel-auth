@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            @forelse ($posts as $post)
            <div class="col border m-1">
                <h3>{{$post->title}}</h3>
                <img src="{{$post->image}}" alt="">
                <p>{{$post->description}}</p>
                <div>
                    <a href="{{route('admin.posts.show',$post->id)}}">View</a>
                </div>
                <div>
                    <a href="{{route('admin.posts.create')}}">Create a new post</a>
                </div>
                <div>
                    <a href="{{route('admin.posts.edit',$post->id)}}">Edit the Post</a>
                </div>
                <div>
                    <form action="{{route('admin.posts.destroy',$post->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete Post</button>
                    </form>
                </div>
            </div>
            @empty
            @endforelse
        </div>
    </div>
@endsection 