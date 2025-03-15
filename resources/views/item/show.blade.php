<x-layouts.master>
    <!-- =======================
    Page content START -->
    <section class="pt-3 pt-xl-5">
        <div class="container" data-sticky-container>
            <div class="row g-4">
                <!-- Main content START -->
                <div class="col-xl-8">

                    <div class="row g-4">
                        <!-- Title START -->
                        <div class="col-12">
                            <!-- Title -->
                            <h2>{{$item->title}}</h2>
                            <!-- Content -->
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item fw-light h6 me-3 mb-1 mb-sm-0">
                                    <a class="d-flex justify-content-center align-items-center px-3 py-2 bg-opacity-15 rounded-3 tag-counter">
                                        <p class="mb-0 fw-bold">Topics : </p>
                                    </a>
                                </li>
                                @foreach($item->tags as $tag)
                                    <li class="list-inline-item fw-light h6 me-3 mb-1 mb-sm-0">
                                        <x-tag :tag="$tag"/>
                                    </li>

                                @endforeach
                            </ul>
                        </div>
                        <!-- Title END -->

                        <!-- About course START -->
                        <div class="col-12">
                            <div class="card border">
                                <!-- Card header START -->
                                <div class="card-header border-bottom">
                                    <h3 class="mb-0">Course description</h3>
                                </div>
                                <!-- Card header END -->

                                <!-- Card body START -->
                                <div class="card-body">
                                    @foreach($item->descriptionCode as $part)
                                        {!! $part['desc'] !!}
                                        @if(!empty($part['code']))
                                            <x-code>
                                                {!! $part['code'] !!}
                                            </x-code>

                                        @endif
                                    @endforeach

                                </div>

                                <!-- Card body START -->
                            </div>
                        </div>
                        <!-- About course END -->

                        <!-- Comments START -->
                        <x-comments::index :model="$item"/>
                        <!-- Comments END -->

                    </div>
                </div>
                <!-- Main content END -->

                <!-- Right sidebar START -->
                <div class="col-xl-4">
                    <div data-sticky data-margin-top="80" data-sticky-for="768">
                        <div class="row g-4">
                            <!-- Tags START -->
                            <div class="col-md-6 col-xl-12">
                                <x-popular-tags/>
                            </div>
                            <!-- Tags END -->
                        </div><!-- Row End -->
                    </div>
                </div>
                <!-- Right sidebar END -->

            </div><!-- Row END -->
        </div>
    </section>
    <!-- =======================
    Page content END -->
</x-layouts.master>
