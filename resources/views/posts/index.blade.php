@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($posts as $post)
            <div class="col-8 offset-2 pb-4">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">
                            <img src="{{$post->user->profile->profileImage() }}" class="rounded-circle w-100 mr-3" style="max-width: 40px;">
                            <span class="font-weight-bold">
                                <a href="/profile/{{$post->user->id}}">
                                    <span class="text-dark">{{$post->user->username}}</span>
                                </a>
                            </span>
                        </p>
                    </div>

                    <a href="/profile/{{$post->user->id}}"><img src="/storage/{{ $post->image }}" class="w-100" srcset=""></a>

                    <div class="card-body">
                        <p class="card-text">
                            <span class="font-weight-bold">
                                <a href="/profile/{{$post->user->id}}">
                                    <span class="text-dark">{{$post->user->username}}</span>
                                </a>
                            </span> 
                            {{$post->caption}}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                {{$posts->links()}}
            </div>
        </div>
    </div>
@endsection
