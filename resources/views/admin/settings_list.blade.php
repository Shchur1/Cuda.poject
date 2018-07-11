@extends('layouts.admin',['pageTitle' => __('pages.settings_list')])

@section('content')
    <div class="content">
        @include('messages')
        <form class="form-update" action="{{ route('settings.store') }}" method="POST">
            @csrf
            @foreach($settings as $setting)
                <div class="form-group">
                    <label class="form-label" for="key">@lang('generic.'.$setting->key)</label>
                    <input class="form-input" value="{{ $setting->value }}" id="key" name="{{ $setting->key }}">
                </div>
            @endforeach
            <div>
                <button class="btn btn-dark">@lang('generic.save')</button>
            </div>
        </form>
    </div>
@endsection