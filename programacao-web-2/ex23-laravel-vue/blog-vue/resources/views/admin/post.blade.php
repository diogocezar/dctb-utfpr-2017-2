@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="row">
				<div class="col-lg-12" style="margin-bottom:15px">
					<a href="{{ route('admin.post.form')}}"><button class="btn btn-success">Adicionar Novo Post</button></a>
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading">
					<h2>Gerencia de Posts</h2>
				</div>
				<div class="panel-body">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Nome</th>
								<th>Conteúdo</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($posts as $post)
								<tr>
									<td>{{ $post->name }}</td>
									<td>{{ $post->content }}</td>
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