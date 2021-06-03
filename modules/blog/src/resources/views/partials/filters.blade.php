
<div class="col-lg-4 calendar-sidebar">
    <aside class="filters calendar-filters">
        <form id="form-filters" class="js-filter-form accordion" method="get">
            <div class="filters__header d-lg-none">
                <div class="d-flex align-items-center">
                    <h2 class="filters__title">{{_e('Filters')}}</h2>
                    <span class="js-filter-picked js-filter-reset clear-all d-md-none">{{_e('Clear all')}}</span>
                </div>
                <div class="filters-btn-close js-filters-close">
                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 15.2471L15 3.24707" stroke="#1D2128" stroke-width="2"
                              stroke-linecap="round"/>
                        <path d="M15 15.2471L3 3.24707" stroke="#1D2128" stroke-width="2"
                              stroke-linecap="round"/>
                    </svg>
                </div>
            </div>

            @foreach($filters as $filterKey=>$filter)
                @include('blog::partials.filters.' . $filter->controlType)
            @endforeach

            <div class="filters__btn-bar">
                <span class="js-filter-picked js-filter-reset clear-all d-none d-md-inline-block d-lg-none">{{_e('Clear all')}}</span>
                <button type="button" class="btn btn-animate btn-green btn-apply js-filter-apply">{{_e('Apply filters')}}</button>
            </div>
        </form>
    </aside>
</div>

<div class="wrap-btn-filter d-lg-none">
    <button class="btn-filter js-filters-open">
            <span class="btn-filter__icon">
                <svg width="15" height="16" viewBox="0 0 15 16" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.989136 13.6606H8.13144" stroke="#1D2128" stroke-width="1.75"
                          stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M0.989136 7.66064H10.9884" stroke="#1D2128" stroke-width="1.75"
                          stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M0.989136 1.66064H13.8453" stroke="#1D2128" stroke-width="1.75"
                          stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </span>
        <span class="btn-filter__text">{{_e('Filters')}}</span>
    </button>
</div>
