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
                                           wire:model.live.debounce.300ms="filter.search_term"
                                           value="{{$filter['search_term'] ?? ''}}"
                                           placeholder="Find your course">
                                </div>
                            </div>
                        </div>
                        <!-- Select option -->
                        <div class="col-xl-3 mt-3 mt-xl-0">
                            <div class="border rounded p-2 input-borderless">
                                <select class="form-select form-select-sm js-choice border-0"
                                        aria-label=".form-select-sm"
                                        wire:model.change="filter.sort_by"
                                >
                                    <option value="newest">{{__('Newest')}}</option>
                                    <option value="oldest">{{__('Oldest')}}</option>
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
                    {{ $items->onEachSide(1)->links() }}
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
                        <div class="offcanvas-body p-3 p-lg-0" x-data="{ isOpen: @entangle('isCollapseOpen') }">
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
                                                    <input class="form-check-input" type="checkbox"
                                                           value="{{$tag->slug}}"
                                                           wire:model.change="filter.tags"
                                                           id="flexCheckDefault{{$tag->id}}">
                                                    <label class="form-check-label"
                                                           for="flexCheckDefault{{$tag->id}}">{{$tag->title}}</label>
                                                </div>
                                                <span class="small">({{$tag->items_count}})</span>
                                            </div>
                                            <!-- Checkbox -->
                                        @endforeach
                                        <!-- Collapse body -->
                                        <div>
                                            <div x-show="isOpen" x-collapse>
                                                <div class="card card-body p-0">
                                                    @foreach($tags as $tag)
                                                        @if($loop->iteration < 10)
                                                            @continue
                                                        @endif
                                                        <!-- Checkbox -->
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                       value="{{$tag->slug}}"
                                                                       wire:model.change="filter.tags"
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
                                        </div>
                                        <!-- Collapse button -->
                                        <a class="p-0 mb-0 mt-2 btn-more d-flex align-items-center"
                                           wire:click.prevent="$toggle('isCollapseOpen')">
                                            See
                                            <span x-show="!isOpen" class="see-more ms-1">more</span>
                                            <span x-show="isOpen" class="see-more ms-1">less</span>
                                            <i class="fas fa-angle-down ms-2"
                                               x-bind:class="{ 'rotate-180': isOpen }"></i>
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
                                                <input type="checkbox" class="btn-check" id="btn-check-2"
                                                       value="{{$tag->id}}"
                                                       wire:model.change="filter.parent_tags">
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
                                        @foreach(\App\Enums\DifficultyLevel::cases() as $level)
                                            <!-- Item -->
                                            <li class="list-inline-item mb-2">
                                                <input type="checkbox" class="btn-check" id="btn-check-{{$level->name}}"
                                                       value="{{$level->value}}"
                                                       wire:model.change="filter.skill_level"
                                                >
                                                <label class="btn btn-light btn-primary-soft-check"
                                                       for="btn-check-{{$level->name}}">
                                                    {{ $level->name }}
                                                </label>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <!-- Skill level END -->


                            </form><!-- Form End -->
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
