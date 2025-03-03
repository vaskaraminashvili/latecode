<x-layouts.master>


    @if(Route::current()->getName() === 'tag.index')
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
                    <x-filter :route="route('tag.index', ['tag' => Route::current()->parameter('tag')])"/>


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
                                    <h4 class="mb-3">Category</h4>
                                    <!-- Category group -->
                                    <div class="col-12">
                                        <!-- Checkbox -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       id="flexCheckDefault9">
                                                <label class="form-check-label" for="flexCheckDefault9">All</label>
                                            </div>
                                            <span class="small">(1256)</span>
                                        </div>
                                        <!-- Checkbox -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       id="flexCheckDefault10">
                                                <label class="form-check-label"
                                                       for="flexCheckDefault10">Development</label>
                                            </div>
                                            <span class="small">(365)</span>
                                        </div>
                                        <!-- Checkbox -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       id="flexCheckDefault11">
                                                <label class="form-check-label" for="flexCheckDefault11">Design</label>
                                            </div>
                                            <span class="small">(156)</span>
                                        </div>
                                        <!-- Checkbox -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       id="flexCheckDefault12">
                                                <label class="form-check-label"
                                                       for="flexCheckDefault12">Accounting</label>
                                            </div>
                                            <span class="small">(65)</span>
                                        </div>
                                        <!-- Checkbox -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       id="flexCheckDefault17">
                                                <label class="form-check-label"
                                                       for="flexCheckDefault17">Translation</label>
                                            </div>
                                            <span class="small">(245)</span>
                                        </div>
                                        <!-- Checkbox -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       id="flexCheckDefault13">
                                                <label class="form-check-label" for="flexCheckDefault13">Finance</label>
                                            </div>
                                            <span class="small">(184)</span>
                                        </div>
                                        <!-- Checkbox -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       id="flexCheckDefault14">
                                                <label class="form-check-label" for="flexCheckDefault14">Legal</label>
                                            </div>
                                            <span class="small">(65)</span>
                                        </div>
                                        <!-- Checkbox -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       id="flexCheckDefault15">
                                                <label class="form-check-label"
                                                       for="flexCheckDefault15">Photography</label>
                                            </div>
                                            <span class="small">(99)</span>
                                        </div>

                                        <!-- Collapse body -->
                                        <div class="collapse multi-collapse" id="multiCollapseExample1">
                                            <div class="card card-body p-0">
                                                <!-- Checkbox -->
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                               id="flexCheckDefault16">
                                                        <label class="form-check-label"
                                                               for="flexCheckDefault16">Writing</label>
                                                    </div>
                                                    <span class="small">(178)</span>
                                                </div>
                                                <!-- Checkbox -->
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                               id="flexCheckDefault18">
                                                        <label class="form-check-label" for="flexCheckDefault18">Marketing</label>
                                                    </div>
                                                    <span class="small">(104)</span>
                                                </div>
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
                                        <!-- Item -->
                                        <li class="list-inline-item mb-2">
                                            <input type="checkbox" class="btn-check" id="btn-check-9">
                                            <label class="btn btn-light btn-primary-soft-check" for="btn-check-9">Beginner</label>
                                        </li>
                                        <!-- Item -->
                                        <li class="list-inline-item mb-2">
                                            <input type="checkbox" class="btn-check" id="btn-check-10">
                                            <label class="btn btn-light btn-primary-soft-check" for="btn-check-10">Intermediate</label>
                                        </li>
                                        <!-- Item -->
                                        <li class="list-inline-item mb-2">
                                            <input type="checkbox" class="btn-check" id="btn-check-11">
                                            <label class="btn btn-light btn-primary-soft-check" for="btn-check-11">Advanced</label>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Skill level END -->

                                <!-- Language START -->
                                <div class="card card-body shadow p-4 mb-4">
                                    <!-- Title -->
                                    <h4 class="mb-3">Language</h4>
                                    <ul class="list-inline mb-0 g-3">
                                        <!-- Item -->
                                        <li class="list-inline-item mb-2">
                                            <input type="checkbox" class="btn-check" id="btn-check-2">
                                            <label class="btn btn-light btn-primary-soft-check" for="btn-check-2">English</label>
                                        </li>
                                        <!-- Item -->
                                        <li class="list-inline-item mb-2">
                                            <input type="checkbox" class="btn-check" id="btn-check-3">
                                            <label class="btn btn-light btn-primary-soft-check" for="btn-check-3">Francas</label>
                                        </li>
                                        <!-- Item -->
                                        <li class="list-inline-item mb-2">
                                            <input type="checkbox" class="btn-check" id="btn-check-4">
                                            <label class="btn btn-light btn-primary-soft-check"
                                                   for="btn-check-4">Hindi</label>
                                        </li>
                                        <!-- Item -->
                                        <li class="list-inline-item mb-2">
                                            <input type="checkbox" class="btn-check" id="btn-check-5">
                                            <label class="btn btn-light btn-primary-soft-check" for="btn-check-5">Russian</label>
                                        </li>
                                        <!-- Item -->
                                        <li class="list-inline-item mb-2">
                                            <input type="checkbox" class="btn-check" id="btn-check-6">
                                            <label class="btn btn-light btn-primary-soft-check" for="btn-check-6">Spanish</label>
                                        </li>
                                        <!-- Item -->
                                        <li class="list-inline-item mb-2">
                                            <input type="checkbox" class="btn-check" id="btn-check-7">
                                            <label class="btn btn-light btn-primary-soft-check" for="btn-check-7">Bengali</label>
                                        </li>
                                        <!-- Item -->
                                        <li class="list-inline-item mb-2">
                                            <input type="checkbox" class="btn-check" id="btn-check-8">
                                            <label class="btn btn-light btn-primary-soft-check" for="btn-check-8">Portuguese</label>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Language END -->
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


</x-layouts.master>



