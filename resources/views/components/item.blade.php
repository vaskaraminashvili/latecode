<!-- Card item START -->
<div class="col-sm-6 col-xl-4">
    <div class="card shadow h-100">

        <!-- Card body -->
        <div class="card-body pb-0">
            <!-- Badge and favorite -->
            <div class="d-flex justify-content-between mb-2">
                <ul class="list-inline mb-0">
                    @foreach($item->tags as $tag)
                        <li class="list-inline-item fw-light small">
                            <x-tag class="small px-2 py-1" :tag="$tag"/>
                        </li>

                    @endforeach
                </ul>
            </div>
            <div class="d-flex justify-content-between mb-2">
                @if ($item->difficulty)
                    <a href="#"
                       class="badge bg-{{$item->difficulty->getColor()}} bg-opacity-10 text-{{$item->difficulty->getColor()}}">{{$item->difficulty->label()}}</a>

                @endif
                {{--                <a href="#" class="h6 fw-light mb-0"><i class="far fa-heart"></i></a>--}}
            </div>
            <!-- Title -->
            <h5 class="card-title fw-normal">
                <a href="{{route('item.show', ['slug' => $item->slug])}}">{{$item->title}}</a>
            </h5>
            <p class="mb-2 text-truncate-2">
                <a class="card-link"
                   href="{{route('item.show', ['slug' => $item->slug])}}">{!! Str::limit($item->description, 60, preserveWords: true) !!}</a>

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
