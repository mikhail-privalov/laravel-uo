<?php
/**@phpdoc
 * @var \App\Models\BlogCategory $item
 * @var \Illuminate\Support\ViewErrorBag $errors
 */
?>
@extends('layouts.app')

@section('content')

    {{ Form::open(['url' => route('blog.admin.categories.update', $blogCategory), 'method' => 'PATCH']) }}

    @include('blog.admin.categories.forms._form')

    {{ Form::close() }}

@endsection
