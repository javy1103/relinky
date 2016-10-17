<div class="uk-width-medium-7-10 uk-push-1-6">
    <div class="md-card search-form">
        <div class="md-card-toolbar">
            <h2 class="md-card-heading-text uk-text-center">Find an Agent</h2>
        </div>
        <div class="md-card-content">
            <form action="/search" method="post">
                {{ csrf_field() }}
                <div class="uk-grid">
                    <div class="uk-width-medium-2-6">
                        <select class="keyword-select" placeholder="Enter city or zipcode" name="keyword" data-md-selectize></select>
                    </div>
                    <div class="uk-width-medium-1-6">
                        <select class="type-select" placeholder="Type" data-md-selectize></select>
                    </div>
                    <div class="uk-width-medium-1-6">
                        <select class="min-price-select" placeholder="Min Price" data-md-selectize></select>
                    </div>
                    <div class="uk-width-medium-1-6">
                        <select class="max-price-select" placeholder="Max Price" data-md-selectize></select>
                    </div>
                    <div class="uk-width-medium-1-6">
                        <button class="md-btn md-btn-primary md-btn-wave-light waves-effect waves-button waves-light" type="submit" name="button">Go</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
