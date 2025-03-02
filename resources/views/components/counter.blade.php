<!-- =======================
Counter START -->
<section class="py-0 py-xl-5">
    <div class="container">
        <div class="row g-4">
            @foreach($tags as $tag)
                <!-- Counter item -->
                <div class="col-sm-6 col-xl-2">
                    <x-tag counter="true" class="mb-2" :$tag/>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- =======================
Counter END -->
