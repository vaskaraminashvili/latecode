<a {{ $attributes->merge(['class' => 'btn-tag']) }}
   href="{{route('tag.index', ['tag' => $tag->slug])}}">
    {{$tag->title}}
</a>
