<div>
    @if(Route::current()->parameter('tag'))
        @php
            $tag = $items[0]->tags->where('slug', Route::current()->parameter('tag'))->first();
            $tag_title = $tag->title;
        @endphp
            <!-- ======================= Page Banner START -->
        <section class="align-items-center d-flex page_banner">
            <!-- Main banner background image -->
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="" style="color: {{$tag->color}}">{{$tag_title}}</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======================= Page Banner END -->
    @endif

    <!-- =======================
    Page content START -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <!-- Main content START -->
                <div class="col-lg-8 col-xl-9">
                    <form class="row mb-4 align-items-center" method="get">
                        <!-- Search option START -->
                        <!-- Search bar -->
                        <div class="col-xl-6">
                            <div class="border rounded p-2">
                                <div class="input-group input-borderless">
                                    <input class="form-control me-1" type="search" name="search"
                                           value="{{$data['search'] ?? ''}}"
                                           placeholder="Find your course">
                                    <button type="button" class="btn btn-primary mb-0 rounded z-index-1"><i
                                            class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Select option -->
                        <div class="col-xl-3 mt-3 mt-xl-0">
                            <div class="border rounded p-2 input-borderless">
                                <select class="form-select form-select-sm js-choice border-0"
                                        aria-label=".form-select-sm">
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
                            <p class="mb-0 text-end">Showing {{$items->firstItem()}}-{{$items->lastItem()}}
                                of {{$items->total()}} result</p>
                        </div>

                        <!-- Search option END -->
                    </form>

                    <!-- Course Grid START -->
                    <div class="row g-4">
                        @foreach($items as $item)
                            <x-item :$item/>
                        @endforeach

                    </div>
                    <!-- Course Grid END -->
                    <!-- Pagination START -->
                    {{ $items->onEachSide(1)->links('vendor.pagination.custom') }}
                    <!-- Pagination END -->

                </div>
                <!-- Main content END -->

                <!-- Right sidebar START -->
                <div class="col-lg-4 col-xl-3">
                    <!-- Responsive offcanvas body START -->
                    <div class="offcanvas-lg offcanvas-end" tabindex="-1" id="offcanvasSidebar">
                        <div class="offcanvas-header bg-light">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Advance Filter</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                    data-bs-target="#offcanvasSidebar" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body p-3 p-lg-0">
                            <form>
                                <!-- Category START -->
                                <div class="card card-body shadow p-4 mb-4">
                                    <!-- Title -->
                                    <h4 class="mb-3">{{__('Tag')}}</h4>
                                    <!-- Category group -->
                                    <div class="col-12">
                                        @foreach($tags as $tag)
                                            @if($loop->iteration == 10)
                                                @break
                                            @endif
                                            <!-- Checkbox -->
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                           id="flexCheckDefault{{$tag->id}}">
                                                    <label class="form-check-label"
                                                           for="flexCheckDefault{{$tag->id}}">{{$tag->title}}</label>
                                                </div>
                                                <span class="small">({{$tag->items_count}})</span>
                                            </div>
                                            <!-- Checkbox -->
                                        @endforeach
                                        <!-- Collapse body -->
                                        <div class="collapse multi-collapse" id="multiCollapseExample1">
                                            <div class="card card-body p-0">
                                                @foreach($tags as $tag)
                                                    @if($loop->iteration < 10)
                                                        @continue
                                                    @endif
                                                    <!-- Checkbox -->
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                   id="flexCheckDefault{{$tag->id}}">
                                                            <label class="form-check-label"
                                                                   for="flexCheckDefault{{$tag->id}}">{{$tag->title}}</label>
                                                        </div>
                                                        <span class="small">({{$tag->items_count}})</span>
                                                    </div>
                                                    <!-- Checkbox -->
                                                @endforeach
                                            </div>
                                        </div>
                                        <!-- Collapse button -->
                                        <a class=" p-0 mb-0 mt-2 btn-more d-flex align-items-center"
                                           data-bs-toggle="collapse" href="#multiCollapseExample1" role="button"
                                           aria-expanded="false" aria-controls="multiCollapseExample1">
                                            See <span class="see-more ms-1">more</span><span
                                                class="see-less ms-1">less</span><i class="fas fa-angle-down ms-2"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- Category END -->

                                <!-- Language START -->
                                <div class="card card-body shadow p-4 mb-4">
                                    <!-- Title -->
                                    <h4 class="mb-3">HERE WILL GO PARENT TAGS </h4>
                                    <ul class="list-inline mb-0 g-3">
                                        @foreach($parent_tags as $tag)
                                            <!-- Item -->
                                            <li class="list-inline-item mb-2">
                                                <input type="checkbox" class="btn-check" id="btn-check-2">
                                                <label class="btn btn-light btn-primary-soft-check"
                                                       for="btn-check-2">{{$tag->title}}</label>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <!-- Language END -->
                                <!-- Skill level START -->
                                <div class="card card-body shadow p-4 mb-4">
                                    <!-- Title -->
                                    <h4 class="mb-3">Skill level</h4>
                                    <ul class="list-inline mb-0">
                                        <!-- Item -->
                                        <li class="list-inline-item mb-2">
                                            <input type="checkbox" class="btn-check" id="btn-check-12">
                                            <label class="btn btn-light btn-primary-soft-check" for="btn-check-12">All
                                                levels</label>
                                        </li>
                                        @foreach(\App\Enums\DifficultyLevel::cases() as $level)
                                            <!-- Item -->
                                            <li class="list-inline-item mb-2">
                                                <input type="checkbox" class="btn-check" id="btn-check-12">
                                                <label class="btn btn-light btn-primary-soft-check" for="btn-check-12">
                                                    {{ $level->name }}
                                                </label>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <!-- Skill level END -->


                            </form><!-- Form End -->
                        </div>

                        <!-- Button -->
                        <div class="d-grid p-2 p-lg-0 text-center">
                            <button class="btn btn-primary mb-0">Filter Results</button>
                        </div>

                    </div>
                    <!-- Responsive offcanvas body END -->
                </div>
                <!-- Right sidebar END -->
            </div><!-- Row END -->
        </div>
    </section>
    <!-- =======================
    Page content END -->
</div>
