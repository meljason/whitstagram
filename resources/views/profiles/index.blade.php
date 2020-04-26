@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fyyz1-2.fna.fbcdn.net/v/t51.2885-19/s150x150/57400196_1206906449486521_7168345797648449536_n.jpg?_nc_ht=instagram.fyyz1-2.fna.fbcdn.net&amp;_nc_ohc=YftaExW-wGgAX_75C1m&amp;oh=46abaad58572a73642ab70a28a7149d5&amp;oe=5ECD9B3A" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user->username}}</h1>
                <a href="/p/create">Add New Post</a>
            </div>

            <a href="/profile/{{$user->id}}/edit">Edit Profile</a>

            <div class="d-flex">
                <div class="pr-5"><strong>{{$user->posts->count()}}</strong> posts</div>
                <div class="pr-5"><strong>4,631</strong> followers</div>
                <div class="pr-5"><strong>130</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="www.jasonchong.tech">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        @foreach ($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{$post->id}}"><img src="/storage/{{ $post->image}}" class="w-100"></a>
            </div>
        @endforeach
        
        
    </div>

</div>
@endsection
