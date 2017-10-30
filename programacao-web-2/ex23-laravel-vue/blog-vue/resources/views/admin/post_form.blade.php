@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="row">
				<div class="col-lg-12" style="margin-bottom:15px">
					<a href="{{ route('admin.post')}}"><button class="btn btn-success">Gerenciar Posts</button></a>
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading">
					<h2>Adicionar de Post</h2>
				</div>
				<div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('admin.post.save') }}">
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