@extends('layouts.admin', ['pageTitle' => __('pages.profile')])

@section('content')
    <div>
        <form action="{{ route('profile.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name" class="form-label form-label--required">Name</label>
                <input type="text" name="name" class="form-input" value="{{ $admin->name }}" required>
            </div>

            <div class="form-group">
                <div class="form-col--3">
                    <label class="form-label">Avatar</label>
                    <div class="post-thumbnail">
                        <a id="thumbnail-upload">
                            <div class="post-thumbnail__stub {{ $admin->avatar ? 'hidden' : '' }}"
                                 id="thumbnail-stub">
                                <div class="post-thumbnail__icon"></div>
                                <div class="post-thumbnail__label">Set featured image</div>
                            </div>
                            <div class="post-thumbnail__preview-wrapper {{ $admin->avatar ? 'active' : '' }}"
                                 id="thumbnail-holder-wrapper">
                                <img id="thumbnail-holder" src="{{ $admin->avatar }}" class="post-thumbnail__preview"
                                     alt=""/>
                            </div>
                        </a>
                        <input id="thumbnail-input" class="screenreader-only" type="text" name="avatar"
                               value="{{ $admin->avatar }}"/>
                    </div>

                    @if(isset($admin->avatar))
                        <a href="{{ url('admin/profile').'/'.$admin->id }}"
                           onclick="event.preventDefault(); document.getElementById('remove-avatar').submit();"
                           class="btn btn--primary">
                            Delete avatar
                        </a>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <button class="btn btn--blue btn--block btn--large">Save</button>
            </div>
        </form>

        @if(isset($admin->avatar))
            <form id="remove-avatar" action="{{ url('admin/profile').'/'.$admin->id }}" method="POST"
                  style="display: none;">
                @method('DELETE')
                @csrf
            </form>
        @endif
    </div>
@endsection

@section('scripts')
    <script src="/vendor/laravel-filemanager/js/lfm.js"></script>
    <script>
        $('#thumbnail-upload').click(function () {
            localStorage.setItem('is_thumbnail_upload', 'true');
            openModal('modal-filemanager');
            return false;
        });
    </script>
@endsection

@section('modals')
    <div id="modal-filemanager" class="modal modal--filemanager">
        <iframe src="/filemanager?type=image"
                style="width: 100%; height: 500px; overflow: hidden; border: none;"></iframe>
    </div>
@endsection