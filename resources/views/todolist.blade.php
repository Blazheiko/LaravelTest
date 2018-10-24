@extends('app')

@section('content')
  @foreach($posts as $post)
     <article>
        <h2> {{$post->id}}</h2>
        <p>
           {{$post->title}}
        </p>
        <p>
            {{$post->content}}
        </p>
     </article>

  @endforeach

@stop




