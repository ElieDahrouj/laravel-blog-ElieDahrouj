@extends('default.head')
@section('title', "Article")
@section('content')
    <section class="sectionArticle">
        <div class="cardArticle readingArticle">
            <img src="https://picsum.photos/id/{{rand(500,1100)}}/900/300" class="card-img-top rounded" alt="...">
            <div class="content">
                <h3>{{$article->title}}</h3>
                <h6 style="color: gray">{{$dateFormated}}</h6>
                <h5><b>Auteur : {{$article->user->name}}</b></h5>
                <h5><b>Catégorie : {{$article->category->name}}</b></h5>
                <p>{{$article->summary}}</p>
                <p>{{$article->content}}</p>
            </div>
        </div>
    </section>
@endsection