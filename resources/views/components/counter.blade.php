<!-- =======================
Counter START -->
<section class="py-0 py-xl-5">
    <div class="container">
        <div class="row g-4">
            @foreach($tags as $tag)
                <!-- Counter item -->
                <div class="col-sm-6 col-xl-3">
                    <a
                        class="d-flex justify-content-center align-items-center p-4 bg-opacity-15 rounded-3"
                        style="background-color: {{$tag->color}}"
                        href="{{route('tag.index' , ['tag' => $tag->slug])}}"
                    >
                        <p class="mb-0 fs-4 fw-bold">{{$tag->title}}</p>
                        <div class="ms-4 h6 fw-normal mb-0">
                            <div class="d-flex">
                                <h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0"
                                    data-purecounter-end="{{$tag->items_count}}"
                                    data-purecounter-delay="200">{{$tag->items_count}}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- =======================
Counter END -->
