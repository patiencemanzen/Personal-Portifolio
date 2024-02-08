@extends('layouts.master')

@section('title') Home @stop

@section('content')
    <livewire:navbar />
    <livewire:hero />
    <livewire:about />
    <livewire:technologies />
    <livewire:dev-ops-stack />
    <livewire:experience />
    <livewire:education />
    <livewire:projects />
    <livewire:testimonial />
@stop
