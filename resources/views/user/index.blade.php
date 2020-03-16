@extends('default.head')
@section('title', "Auteur")
@section('content')
    @if(count($userArticle) > 0)
        <h1 class="article">Auteur : {{$userArticle['0']->user->name}}</h1>
    @endif
    <section class="art">
        @if(count($userArticle) > 0)
            @foreach( $userArticle as $userArticles)
                <div class="cardArticle">
                    <img src="https://picsum.photos/id/{{rand(1,50)}}/900/300" class="card-img-top" alt="...">
                    <div class="content">
                        <h3>{{$userArticles->title}}</h3>
                        <h5>{{$userArticles->category->name}}</h5>
                        <p>{{$userArticles->summary}}</p>
                        <a href="/article/{{$userArticles->id}}" class="btn btn-outline-secondary">More</a>
                    </div>
                </div>
            @endforeach
        @else
            <div style="margin-top: 15px;padding: 20px;" class="alert alert-danger" role="alert">
                Aucun article publié sur cette page
            </div>
        @endif
    </section>
@endsection
