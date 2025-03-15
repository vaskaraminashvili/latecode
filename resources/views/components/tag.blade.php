@props(['counter' => false, 'tag' => [], 'class' => 'px-3 py-2 small'])
<a
    class="d-flex justify-content-center align-items-center  bg-opacity-15 rounded-3 tag-counter {{ $class }} "
    href="{{route('item.index' , ['tag' => $tag->slug])}}"
>
    <p class="mb-0 fw-bold" style="color: {{$tag->color}}">{{$tag->title}}</p>
    @if ($counter)
        <div class="ms-2 h6 fw-normal mb-0">
            <div class="d-flex" style="color: {{$tag->color}}">

                (
                <p class="purecounter mb-0 fw-bold" style="color: {{$tag->color}}"
                   data-purecounter-start="0"
                   data-purecounter-end="{{$tag->items_count}}"
                   data-purecounter-delay="200">{{$tag->items_count}}</p>
                )

            </div>
        </div>
    @endif
</a>
