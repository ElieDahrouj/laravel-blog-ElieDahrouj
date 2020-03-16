@extends('default.head')
@section('title', "Category")
@section('content')
    @if(count($category) > 0)
        <h1 class="article">Category : {{$category['0']->category->name}}</h1>
    @endif
    <section class="art">
        @if(count($category) > 0)
            @foreach( $category as $categories)
                <div class="cardArticle">
                    <img src="https://picsum.photos/id/{{rand(1,50)}}/900/300" class="card-img-top" alt="...">
                    <div class="content">
                        <h3>{{$categories->title}}</h3>
                        <h5>{{$categories->user->name}}</h5>
                        <p>{{$categories->summary}}</p>
                        <a href="/article/{{$categories->id}}" class="btn btn-outline-secondary">More</a>
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