<?php

namespace App\Livewire\Components;

use App\Models\Item;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithPagination;

class Items extends Component
{
    use WithPagination;

    public $parent_tags;
    public $tags;
    public $current_tag;

    public function render(Request $request)
    {
        $current_tag = $request->tag;

        $this->parent_tags = Tag::whereHas('children')->get();
        $this->tags = Tag::query()
            ->popular()
            ->whereDoesntHave('children')->get();

        $items = Item::query()
            ->with([
                'tags'
            ])
            ->filter($request)
            ->where('status', 1)
            ->when($current_tag !== null, function (Builder $query) use ($current_tag) {
                return $query->whereHas('tags', function (Builder $query) use ($current_tag) {
                    $query->where('slug', $current_tag);
                });
            })
            ->paginate(12);
        return view('livewire.components.items', [
            'items' => $items
        ]);
    }
}
