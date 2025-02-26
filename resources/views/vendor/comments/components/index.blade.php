@props([
    'model',
])

<div class="lakm_commenter">
    <div
        x-cloak
        x-data
        class="space-y-8 no-dark:text-white"
    >
        @if(config('comments.should_confirm_link_visit'))
            <x-comments::link-visit-confirm-modal/>
        @endif
        <livewire:comments-list :model="$model"/>
        <hr class="text-gray-400"/>
        <div id="create-comment-form">
            <livewire:comments-create-form :model="$model"/>
        </div>
    </div>
</div>

