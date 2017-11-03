@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Feed de Notícias</div>
                <div class="panel-body">
					@foreach ($posts as $post)
						<h2>{{ $post->name }}</h2>
						<p>{{ $post->content }}</p>
						<div style="margin-left: 5%">
							@foreach ($post->comments as $comment)
								<h3>{{ $comment->name }}</h2>
								<small>{{ $comment->content }}</small>
							@endforeach
						</div>
						<hr/>
					@endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
