<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - @if($post)
        {{ $post->title }} @endif</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css" rel="stylesheet" />
    <!-- CSS -->
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet" />
</head>

<body style="padding-top: 150px;">
    @include('navbar')

    <div class="container mb-4">
        <div class="row mt-4">
            <div class="col-md-10 offset-md-1">                
                <h3>{{$post->title}}</h3>
                @if(!Auth::guest() && ($post->author_id == Auth::user()->id || Auth::user()->is_admin()))
                <div class="d-flex flex-row-reverse">
                    <div class="p-2"><a href="{{ url('edit/'.$post->slug)}}" class="btn btn-secondary">Editar Post</a></div>
                  </div>
                @endif
                <p>{{ $post->created_at->format('M d,Y \a\t h:i a') }} por <a href="#">{{ $post->author->name }}</a></p>
                @if($post)
                <div>
                    {!! $post->body !!}
                </div>
                @else
                No hay post
                @endif
            </div>
        </div>        
    </div>
    @include('footer')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.js"></script>
</body>

</html>