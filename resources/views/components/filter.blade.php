@props(['route'])
<form class="row mb-4 align-items-center" method="get" action="{{ $route }}">
    <!-- Search option START -->
    <div class="row mb-4 align-items-center">
        <!-- Search bar -->
        <div class="col-xl-6">
            <div class="border rounded p-2">
                <div class="input-group input-borderless">
                    <input class="form-control me-1" type="search" name="search" value="{{$data['search'] ?? ''}}"
                           placeholder="Find your course">
                    <button type="button" class="btn btn-primary mb-0 rounded z-index-1"><i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Select option -->
        <div class="col-xl-3 mt-3 mt-xl-0">
            <div class="border rounded p-2 input-borderless">
                <select class="form-select form-select-sm js-choice border-0" aria-label=".form-select-sm">
                    <option value="">Most Viewed</option>
                    <option>Recently search</option>
                    <option>Most popular</option>
                    <option>Top rated</option>
                </select>
            </div>
        </div>

        <!-- Content -->
        <div class="col-12 col-xl-3 d-flex justify-content-between align-items-center mt-3 mt-xl-0">
            <!-- Advanced filter responsive toggler START -->
            <button class="btn btn-primary mb-0 d-lg-none" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
                <i class="fas fa-sliders-h me-1"></i> Show filter
            </button>
            <!-- Advanced filter responsive toggler END -->
            <p class="mb-0 text-end">Showing 1-7 of 32 result</p>
        </div>

    </div>
    <!-- Search option END -->
</form>
