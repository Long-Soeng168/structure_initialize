@extends('admin.layouts.admin')

@section('content')
    <div class="px-4">
        <x-form-header :value="__('Create Page')" class="p-4" />

        @livewire('page-create')

    </div>
@endsection
