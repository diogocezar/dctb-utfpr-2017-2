@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="row">
				<div class="col-lg-12" style="margin-bottom:15px">
					<a href="{{ route('admin.comment')}}"><button class="btn btn-success">Gerenciar Comentário</button></a>
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading">
					<h2>Adicionar de Comentário</h2>
				</div>
				<div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('admin.comment.save') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nome</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                            <label for="content" class="col-md-4 control-label">Conteúdo</label>

                            <div class="col-md-6">
                                <textarea id="content" type="content" class="form-control" name="content" required></textarea>

                                @if ($errors->has('content'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('post_id') ? ' has-error' : '' }}">
                            <label for="content" class="col-md-4 control-label">Post</label>

                            <div class="col-md-6">
                                <select id="post_id" class="form-control" name="post_id" required>
									@foreach($posts as $key => $post)
										<option value="{{ $post->id }} "> {{ $post->name }} </option>
									@endforeach
                                </select>

                                @if ($errors->has('post_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Enviar
                                </button>
                            </div>
                        </div>
                    </form>
				</div>
			</div>
			<table></table>
		</div>
	</div>
</div>
@endsection