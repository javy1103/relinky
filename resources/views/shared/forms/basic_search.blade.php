<div class="uk-width-medium-7-10 uk-push-1-6">
    <div class="md-card search-form">
        <div class="md-card-toolbar">
            <h2 class="md-card-heading-text uk-text-center">Find an Agent</h2>
        </div>
        <div class="md-card-content">
            <form action="/search/agent" method="post">
                {{ csrf_field() }}
                <div class="uk-grid">
                    <div class="uk-width-medium-2-6">
                        <select class="keyword-select" placeholder="Enter city or zipcode" name="keyword" data-md-selectize></select>
                    </div>
                    <div class="uk-width-medium-1-6">
                        <select class="type-select" placeholder="Type" data-md-selectize></select>
                    </div>
                    <div class="uk-width-medium-1-6">
                        <input name="min_price" class="min-price-select selectize-input" placeholder="Min Price">
                    </div>
                    <div class="uk-width-medium-1-6">
                        <input name="max_price" class="max-price-select selectize-input" placeholder="Max Price">
                    </div>
                    <div class="uk-width-medium-1-6 uk-text-center">
                        <button class="uk-width-1-2 md-btn md-btn-primary md-btn-wave-light waves-effect waves-button waves-light" type="submit">Go</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
