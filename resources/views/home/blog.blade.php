@extends('layout.layout')
@section('title', 'OrganicFood')
@section('content')
    <style>
        .Blog_tt {
            text-align: center;
            color: #333;
        }

        .Blog_tt:hover {
            color: #33CC33;
        }
    </style>
    <h1 class="Blog_tt">
        <span>Home>>Blog</span>
    </h1>

    <nav class="grid wide">
        <div class="row">
            @foreach ($blog as $b)
                <div class="col l-6 m-6 c-12">
                    <div class="Blog_item">
                        <img class="img_blog_item" src="{{ url('img/' . $b->image) }}" alt="">
                        <h4><a class="blog_topic" href="{{ url('home/blogDetail/'.$b->id) }}">{{ $b->topic }}</a></h4>
                        <h5 style="margin-left:10px; color:gray;">{{ $b->date }}</h5>
                        <h5 style="padding: 0 10px 0 10px; color: silver;"> {!!\Illuminate\Support\Str::limit($b->content, 100)!!}</h5>
                    </div>
                </div>
            @endforeach
        </div>
    </nav>
    <style>
        .relative {
            background-color: none;
            padding: 20px 10px 20px 10px;
            margin: 0 20px 0 20px;
            border-radius: 20px;
            color: #33CC33;
        }

        .relative:hover {
            background-color: #33CC33;
            color: #fff;
            transition: 0.1s;
            text-decoration: none;
        }

        .Blog_item {
            height: 380px;
            width: 70%;
            background-color: #fff;
            box-shadow: rgba(0, 0, 0, 0.2) 0px 1px 2px;
            font-family: Arial, Helvetica, sans-serif;
            margin-top: 16px;
        }

        .Blog_item:hover {
            box-shadow: 0px 0px 10px 4px rgba(0, 0, 0, 0.3);
            transition: 0.3s;
        }

        .img_blog_item {
            width: 100%;
            max-height: 250px;
        }
        .blog_topic{
            color: #333;
            padding-left: 10px;
            padding-right: 10px;
        }
        .blog_topic:hover{
            color: #33CC33;
            text-decoration: none;
        }
    </style>
@endsection
@section('script-section')


@endsection
