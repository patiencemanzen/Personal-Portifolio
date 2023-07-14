@extends('layouts.master')

@section('title') Home @stop

@section('content')
    <livewire:navbar />
    <livewire:hero />
    <livewire:technologies />
    <livewire:about />
    <livewire:dev-ops-stack />
    <livewire:projects />
    <livewire:testimonial />
@stop
