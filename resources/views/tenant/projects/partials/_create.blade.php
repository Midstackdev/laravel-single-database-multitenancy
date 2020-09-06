<form method="POST" action="{{ route('project.store') }}">
    @csrf

    <div class="form-group">
        <label for="name" class="">{{ __('Name') }}</label>

        <div class="">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <div class="">
            <button type="submit" class="btn btn-primary">
                {{ __('Create project') }}
            </button>
        </div>
    </div>
</form>