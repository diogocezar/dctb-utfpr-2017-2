@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="row">
				<div class="col-lg-12" style="margin-bottom:15px">
					<a href="{{ route('admin.comment.form')}}"><button class="btn btn-success">Adicionar Novo Comentário</button></a>
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading">
					<h2>Gerencia de Comentário</h2>
				</div>
				<div class="panel-body">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Nome</th>
								<th>Conteúdo</th>
								<th>Post</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($comments as $comment)
								<tr>
									<td>{{ $comment->name }}</td>
									<td>{{ $comment->content }}</td>
									<td>{{ $comment->post->name }}</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
			<table></table>
		</div>
	</div>
</div>
@endsection