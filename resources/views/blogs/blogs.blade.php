@extends('layouts.master')

@section('title') Blogs @stop

@section('content')
    <livewire:navbar />

    <livewire:blogs.blog-header />

    <livewire:blogs.blogs />

    <livewire:footer />
@stop
