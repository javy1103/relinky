<div class="md-card-content large-padding" id="login_form">
    <div class="login_heading">
        <h2 class="uk-text-center">Sign In</h2>
    </div>
    <form role="form" method="POST" action="{{ url('/login') }}">
        {{ csrf_field() }}
        <div class="uk-form-row">
            <label for="email">Email</label>
            <input class="md-input {{ $errors->has('email') ? ' md-input-danger' : '' }}" id="email" type="email" name="email" value="{{ old('email') }}" />
            @if ($errors->has('email'))
            <div class="parsley-errors-list filled"><span class="parsley-required">{{ $errors->first('email') }}</span></div>
            @endif
        </div>
        <div class="uk-form-row">
            <label for="login_password">Password</label>
            <input class="md-input {{ $errors->has('password') ? ' md-input-danger' : '' }}" type="password" id="login_password" name="password" />
            @if ($errors->has('password'))
            <div class="parsley-errors-list filled"><span class="parsley-required">{{ $errors->first('password') }}</span></div>
            @endif
        </div>
        <div class="uk-margin-medium-top">
            <button type="submit" class="md-btn md-btn-primary md-btn-block md-btn-large">Sign In</button>
        </div>
        <div class="uk-margin-top">
            <a href="#" id="login_help_show" class="uk-float-right">Need help?</a>
            <span class="icheck-inline">
                <input type="checkbox" name="remember" id="login_page_stay_signed" data-md-icheck />
                <label for="login_page_stay_signed" class="inline-label">Stay signed in</label>
            </span>
        </div>
    </form>
</div>
