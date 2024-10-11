@extends('admin.layouts.admin')

@section('content')
    <div class="px-4">
        <x-form-header :value="__('News')" />

        @livewire('news-table-data')

    </div>
@endsection
