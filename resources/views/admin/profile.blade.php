@extends('layouts.app')
@section('title')
{{ $user->name }}
@endsection
@section('content')
<div>
  <ul class="list-group">
    <li class="list-group-item">
      Se unio el {{$user->created_at->format('M d,Y \a\t h:i a') }}
    </li>
    <li class="list-group-item panel-body">
      <table class="table-padding">
        <style>
          .table-padding td {
            padding: 3px 8px;
          }
        </style>
        <tr>
          <td>Total de publicaciones</td>
          <td> {{$posts_count}}</td>
          @if($author && $posts_count)
          <td><a href="{{ url('/my-all-posts')}}">Mostrar Todos</a></td>
          @endif
        </tr>
        <tr>
          <td>Publicaciones publicadas</td>
          <td>{{$posts_active_count}}</td>
          @if($posts_active_count)
          <td><a href="{{ url('/user/'.$user->id.'/posts')}}">Mostrar todos</a></td>
          @endif
        </tr>
        <tr>
          <td>Publicaciones en borrador </td>
          <td>{{$posts_draft_count}}</td>
          @if($author && $posts_draft_count)
          <td><a href="{{ url('my-drafts')}}">Mostrar Todos</a></td>
          @endif
        </tr>
      </table>
    </li>
    <li class="list-group-item">
      Comentarios en total {{$comments_count}}
    </li>
  </ul>
</div>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3>Ultimas Publicaciones</h3>
  </div>
  <div class="panel-body">
    @if(!empty($latest_posts[0]))
    @foreach($latest_posts as $latest_post)
    <p>
      <strong><a href="{{ url('/'.$latest_post->slug) }}">{{ $latest_post->title }}</a></strong>
      <span class="well-sm">On {{ $latest_post->created_at->format('M d,Y \a\t h:i a') }}</span>
    </p>
    @endforeach
    @else
    <p>No has escrito ningún post hasta ahora.</p>
    @endif
  </div>
</div>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3>Ultimos Comentarios</h3>
  </div>
  <div class="list-group">
    @if(!empty($latest_comments[0]))
    @foreach($latest_comments as $latest_comment)
    <div class="list-group-item">
      <p>{{ $latest_comment->body }}</p>
      <p>En {{ $latest_comment->created_at->format('M d,Y \a\t h:i a') }}</p>
      <p>En el post <a href="{{ url('/'.$latest_comment->post->slug) }}">{{ $latest_comment->post->title }}</a></p>
    </div>
    @endforeach
    @else
    <div class="list-group-item">
      <p>No has comentado hasta ahora. Sus últimos 5 comentarios se mostrarán aquí</p>
    </div>
    @endif
  </div>
</div>
@endsection