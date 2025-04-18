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
        'category'    => null,
    ];
    public $parent_tags;
    public $tags;
    public $current_tag;
    public $isCollapseOpen = false;
    public $category;

    public function mount(Request $request)
    {
        $this->category = $request->route('category');;
    }

    public function updatingFilter(Request $request)
    {
        $this->resetPage();
    }

    public function render(Request $request)
    {

        $current_tag = $request->tag;
        if ($current_tag) {
            $this->filter['tags'][] = $current_tag;
        }
        $this->filter['category'] = $this->category;
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

}
