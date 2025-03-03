<x-layouts.master>

    <section class="pt-5">
        <div class="container">
            <!-- Search option START -->
            <div class="row mb-4 align-items-center">
                <!-- Search bar -->
                <div class="col-sm-6 col-xl-4">
                    <form class="border rounded p-2">
                        <div class="input-group input-borderless">
                            <input class="form-control me-1" type="search" placeholder="Search course">
                            <button type="button" class="btn btn-primary mb-0 rounded"><i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Select option -->
                <div class="col-sm-6 col-xl-3 mt-3 mt-lg-0">
                    <form class="border rounded p-2 input-borderless">
                        <select class="form-select form-select-sm js-choice" aria-label=".form-select-sm">
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
                    </form>
                </div>

                <!-- Select option -->
                <div class="col-sm-6 col-xl-3 mt-3 mt-xl-0">
                    <form class="border rounded p-2 input-borderless">
                        <select class="form-select form-select-sm js-choice" aria-label=".form-select-sm">
                            <option value="">Sort by</option>
                            <option>Free</option>
                            <option>Most viewed</option>
                            <option>Popular</option>
                        </select>
                    </form>
                </div>

                <!-- Button -->
                <div class="col-sm-6 col-xl-2 mt-3 mt-xl-0 d-grid">
                    <a href="#" class="btn btn-lg btn-primary mb-0">Filter Results</a>
                </div>
            </div>
            <!-- Search option END -->

            <!-- Course list START -->
            <div class="row g-4 justify-content-center">
                @foreach($items as $item)
                    <x-item :$item/>

                @endforeach

            </div>
            <!-- Course list END -->

            <!-- Pagination START -->
            {{ $items->onEachSide(1)->links('vendor.pagination.custom') }}
            <!-- Pagination END -->

        </div>
    </section>
    <!-- =======================
    Page content END -->


</x-layouts.master>
