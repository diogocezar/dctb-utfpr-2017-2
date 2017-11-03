@extends('layouts.app')

@section('content')
<div id="vue-posts">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Feed de Notícias</div>
                    <div class="panel-body">
    					<comp-posts></comp-posts>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('inside-script')
<script src="{{ asset('js/pages/post.js') }}"></script>
@endsection