<div class="o-content-messages">
    <div class="o-errors">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <div class="o-messages">
        @if (session('message'))
            {{ session('message') }}
        @endif
    </div>
</div>