@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Feed de Notícias</div>
                <div class="panel-body">
					<Posts></Posts>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection