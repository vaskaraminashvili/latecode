<?php

namespace App\Livewire\Components;

use App\Models\Item;
use App\Models\Tag;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class Items extends Component
{
    use WithPagination, WithoutUrlPagination;

    public $filter = [
        'search_term' => null,
        'sort_by'     => null,
        'tags'        => [],
        'parent_tags' => [],
        'skill_level' => [],
    ];
    public $parent_tags;
    public $tags;
    public $current_tag;
    public $isCollapseOpen = false;

    public function updatingFilter()
    {
        $this->resetPage();

    }

    public function render(Request $request)
    {

        $current_tag = $request->tag;
        if ($current_tag) {
            $this->filter['tags'][] = $current_tag;
        }
        $this->parent_tags = Tag::whereHas('children')->get();
        $this->tags = Tag::query()
            ->popular()
            ->whereDoesntHave('children')->get();

        $collapsedTags = $this->tags->slice(10);
        foreach ($collapsedTags as $tag) {
            if (in_array($tag->slug, $this->filter['tags'])) {
                $this->isCollapseOpen = true;
                break;
            }
        }
        $items = Item::query()
            ->with([
                'tags'
            ])
            ->filter($this->filter)
            ->where('status', 1)
            ->paginate(12);
        return view('livewire.components.items', [
            'items' => $items
        ]);
    }
//
//    public function paginationView()
//    {
//        return 'vendor.pagination.custom';
//    }

}
