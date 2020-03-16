@extends('default.head')
@section('title', "Home")
@section('content')
<div class="navCategoryUser">
    <section>
        <h1 class="article title">Category</h1>
        <div class="scroll">
            @foreach( $selectCategorie ?? '' as $selectCatego)
                <div class="cardArticle cardCustom">
                    <img src="https://picsum.photos/id/{{rand(10,20)}}/200/100" class="card-img-top" alt="...">
                    <div>
                        <h5 class="card-title">{{$selectCatego->name}}</h5>
                        <a href="/category/{{$selectCatego->id}}" class="btn btn-outline-secondary">More</a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <section>
        <h1 class="article title">Auteur</h1>
        <div class="scroll">
            @foreach( $selectUser ?? '' as $selectUsers)
                <div class="cardArticle cardCustom">
                    <img src="https://picsum.photos/id/{{rand(600,1100)}}/200/100" class="card-img-top" alt="...">
                    <div>
                        <h5 class="card-title">{{$selectUsers->name}}</h5>
                        <a href="/user/{{$selectUsers->id}}" class="btn btn-outline-secondary">More</a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</div>
<h1 class="article">Articles</h1>
<section class="art">
    @foreach( $posts as $post)
        <div class="cardArticle">
            <img src="https://picsum.photos/id/{{rand(1,50)}}/900/300" class="card-img-top" alt="...">
            <div class="content">
                <h3>{{$post->title}}</h3>
                <h5>{{$post->category->name}}</h5>
                <p>{{$post->summary}}</p>
                <a href="/article/{{$post->id}}" class="btn btn-outline-secondary">More</a>
            </div>
        </div>
    @endforeach
</section>
@endsection