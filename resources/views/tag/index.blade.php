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
    <section class="pt-5">
        <div class="container">
            <x-filter :route="route('tag.index', ['tag' => Route::current()->parameter('tag')])"/>

            <!-- Course list START -->
            <div class="row g-4 justify-content-center">
                @foreach($items as $item)
                    <x-item :$item/>
                @endforeach
            </div>
            <!-- Course list END -->

            <!-- Pagination START -->
            {{ $items->onEachSide(1)->links('vendor.pagination.custom') }}
            <!-- Pagination END -->

        </div>
    </section>
    <!-- =======================
    Page content END -->


</x-layouts.master>
