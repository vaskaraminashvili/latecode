<x-layouts.master>
    <!-- =======================
Page Banner START -->
    <section class="bg-dark align-items-center d-flex"
             style="background:url(assets/images/pattern/04.png) no-repeat center center; background-size:cover;">
        <!-- Main banner background image -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Title -->
                    <h1 class="text-white">NEWS / SOULTUIONS / TIPS / PACKAGES list </h1>
                    <!-- Breadcrumb -->
                    <div class="d-flex">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-dark breadcrumb-dots mb-0">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Courses</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Page Banner END -->

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
