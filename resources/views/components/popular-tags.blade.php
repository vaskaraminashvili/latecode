<div class="card card-body border p-4">
    <h4 class="mb-3">Popular Tags</h4>
    <ul class="list-inline mb-0">
        @foreach($tags as $tag)
            <li class="list-inline-item">
                <x-tag :$tag/>
            </li>
        @endforeach
    </ul>
</div>
