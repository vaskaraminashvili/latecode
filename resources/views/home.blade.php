<x-layouts.master>
    <x-counter/>

    <!-- =======================
    Popular course START -->
    <section>
        <div class="container">
            <!-- Title -->
            <div class="row mb-4">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="fs-1">Most Popular Courses</h2>
                    <p class="mb-0">Choose from hundreds of courses from specialist organizations</p>
                </div>
            </div>

            <!-- Tabs START -->
            <ul class="nav nav-pills nav-pills-bg-soft justify-content-sm-center mb-4 px-3" id="course-pills-tab"
                role="tablist">
                @foreach($tags as $tag)
                    <!-- Tab item -->
                    <li class="nav-item me-2 me-sm-5">
                        <button class="nav-link mb-2 mb-md-0 {{$loop->first ? 'active' : ''}}"
                                id="course-pills-tab-{{$tag->slug}}"
                                data-bs-toggle="pill"
                                data-bs-target="#course-pills-tabs-{{$tag->slug}}" type="button" role="tab"
                                aria-controls="course-pills-tabs-{{$tag->slug}}" aria-selected="false">{{$tag->title}}
                        </button>
                    </li>

                @endforeach

            </ul>
            <!-- Tabs END -->

            <!-- Tabs content START -->
            <div class="tab-content" id="course-pills-tabContent">
                @foreach($tags as $tag)
                    <!-- Content START -->
                    <div class="tab-pane fade show {{$loop->first ? 'active' : ''}}"
                         id="course-pills-tabs-{{$tag->slug}}" role="tabpanel"
                         aria-labelledby="course-pills-tab-{{$tag->slug}}">
                        <div class="row g-4">
                            @foreach($tag->items as $item)
                                <!-- Card item START -->
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="card shadow h-100">

                                        <!-- Card body -->
                                        <div class="card-body pb-0">
                                            <!-- Badge and favorite -->
                                            <div class="d-flex justify-content-between mb-2">
                                                <span class="h6 fw-light mb-0">
                                                    <i class="fas fa-signal text-success me-1"></i>
                                                    {{$item->difficulty->label()}}
                                                </span>
                                            </div>
                                            <!-- Title -->
                                            <h5 class="card-title fw-normal">
                                                <a href="{{route('item.show', ['slug' => $item->slug])}}">{{$item->title}}</a>
                                            </h5>
                                            <p class="mb-2 text-truncate-2">
                                                {!! Str::limit($item->description, 60, preserveWords: true) !!}
                                            </p>

                                        </div>
                                        <!-- Card footer -->
                                        <div class="card-footer pt-0 pb-3">
                                            <hr>
                                            <div class="d-flex justify-content-between">
                                                <span class="h6 fw-light mb-0">
                                                    <i class="far fa-clock text-danger me-1"></i>
                                                    {{$item->readingTime . ' ' . __('minutes')}}
                                                </span>

                                                <span class="h6 fw-light mb-0">
                                                    {{$item->wordCount . ' ' . __('words')}}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card item END -->
                            @endforeach

                        </div> <!-- Row END -->
                    </div>
                    <!-- Content END -->
                @endforeach
            </div>
            <!-- Tabs content END -->
        </div>
    </section>
    <!-- =======================
    Popular course END -->
</x-layouts.master>
