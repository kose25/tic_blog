<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css" rel="stylesheet" />
</head>

<body style="padding-top: 120px;">
    @include('navbar')

    <div class="container mb-4">
        <h3>Ultimos posts</h3>
        <div class="row">
        @if ( !$posts->count() )
<h4>Aun no hay post publicados</h4>
@else
@foreach( $posts as $post )
            <div class="col-md-4">
                <div class="card">
                    {{-- <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/184.webp" class="card-img-top" alt="Fissure in Sandstone" /> --}}
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $post->created_at->format('M d,Y \a\t h:i a') }} por <a href="#">{{ $post->author->name }}</a></h6>
                        <p class="card-text">{!! Str::limit($post->body, $limit = 150, $end = '....... ') !!}</p>
                        <a href="{{url('/'.$post->slug)}}" class="btn btn-primary">Ver Mas</a>
                        @if(!Auth::guest() && ($post->author_id == Auth::user()->id || Auth::user()->is_admin()))
                        @if($post->active == '1')
                        <a href="{{ url('edit/'.$post->slug)}}" class="btn btn-secondary">Editar Post</a>
                        @endif
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
    @include('footer')

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.js"></script>
</body>

</html>