@props(['route'])

<!-- Search option START -->
<form class="row mb-4 align-items-center" method="get" action="{{ $route }}">
    <!-- Search bar -->
    <div class="col-sm-6 col-xl-4">
        <div class="input-group">
            <input class="form-control me-1" type="search" name="search" value="{{$data['search'] ?? ''}}"
                   placeholder="Search course">
        </div>
    </div>
    {{--    @if(Route::current()->getName() != 'tag.index')--}}
    @if(true)
        <!-- Select option -->
        <div class="col-sm-6 col-xl-3 mt-3 mt-lg-0">
            <select class="form-select form-select-sm js-choice" aria-label=".form-select-sm" name="tag">
                <option value="">Category</option>
                <option>All</option>
                <option>Development</option>
                <option>Design</option>
                <option>Accounting</option>
                <option>Translation</option>
                <option>Finance</option>
                <option>Legal</option>
                <option>Photography</option>
                <option>Writing</option>
                <option>Marketing</option>
            </select>
        </div>
    @endif

    <!-- Select option -->
    <div class="col-sm-6 col-xl-3 mt-3 mt-xl-0">
        <select class="form-select form-select-sm js-choice" name="sortBy" aria-label=".form-select-sm">
            <option value="">Sort by</option>
            <option>Free</option>
            <option>Most viewed</option>
            <option>Popular</option>
        </select>
    </div>

    <!-- Button -->
    <div class="col-sm-6 col-xl-2 mt-3 mt-xl-0 d-grid ms-auto">
        <button class="btn btn-lg btn-primary mb-0">Filter Results</button>
    </div>
</form>
<!-- Search option END -->
