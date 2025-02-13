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
