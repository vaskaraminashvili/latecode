<div class="card card-body border p-4">
    <h4 class="mb-3">Popular Tags</h4>
    <ul class="list-inline mb-0">
        @foreach($tags as $tag)
            <li class="list-inline-item">
                {{--                <a class="btn btn-outline-light btn-sm" style="color: {{$tag->color}}"--}}
                {{--                   href="{{route('tag.index', ['tag' => $tag->slug])}}">--}}
                {{--                    {{$tag->title}}--}}
                {{--                </a>--}}
                <x-tag :$tag/>

            </li>

        @endforeach

    </ul>
</div>
