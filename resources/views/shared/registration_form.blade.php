<div class="md-card-content large-padding" id="register_form">
    <h2 class="heading_a uk-margin-medium-bottom">Create an account</h2>
    <form method="POST" action="{{ url('/register') }}">
        {{ csrf_field() }}

        <div class="uk-form-row">
            <label for="name">Name</label>
            <input class="md-input {{ $errors->has('name') ? 'md-input-danger' : '' }}" type="text" id="name" name="name" value="{{ old('name') }}" />
            @if ($errors->has('name'))
                <div class="parsley-errors-list filled"><span class="parsley-required">{{ $errors->first('name') }}</span></div>
            @endif
        </div>

        <div class="uk-form-row">
            <label for="email">Email</label>
            <input class="md-input {{ $errors->has('email') ? 'md-input-danger' : '' }}" type="email" id="email" name="email" value="{{ old('email') }}" />
            @if ($errors->has('email'))
                <div class="parsley-errors-list filled"><span class="parsley-required">{{ $errors->first('name') }}</span></div>
            @endif
        </div>

        <div class="uk-form-row">
            <label for="username">Username</label>
            <input class="md-input {{ $errors->has('username') ? 'md-input-danger' : '' }}" type="text" id="username" name="username" value="{{ old('username') }}" />
            @if ($errors->has('username'))
                <div class="parsley-errors-list filled"><span class="parsley-required">{{ $errors->first('username') }}</span></div>
            @endif
        </div>

        <div class="uk-form-row">
            <label for="password">Password</label>
            <input class="md-input {{ $errors->has('password') ? 'md-input-danger' : '' }}" type="password" id="password" name="password" value="{{ old('password') }}" />
            @if ($errors->has('password'))
                <div class="parsley-errors-list filled"><span class="parsley-required">{{ $errors->first('password') }}</span></div>
            @endif
        </div>

        <div class="uk-form-row">
            <p>
                <input {{ isset($pro) ? 'checked' : '' }} type="checkbox" name="profile_type" id="profile_type" data-md-icheck />
                <label for="profile_type" class="inline-label">Real Estate Professional</label>
            </p>
        </div>
        <div class="uk-margin-medium-top">
            <button type="submit" class="md-btn md-btn-primary md-btn-block md-btn-large">Sign Up</button>
        </div>
    </form>
</div>
