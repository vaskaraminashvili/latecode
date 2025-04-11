<?php

namespace App\Http\Controllers;

class GlossaryController extends Controller
{
    public function index()
    {
        // In a real app, you would fetch these from a database
        $tags = [
            [
                'id'          => 'd1e8582a-81fd-47c7-8812-e87381b6b3fe',
                'name'        => 'Computer Science',
                'description' => 'These are items about computer science — the study of computation, information, and automation.'
            ],
            [
                'id'          => '0ee79935-fb73-44f8-94f0-cdc7db6987d1',
                'name'        => 'Finance',
                'description' => 'These are items about finance — the study and discipline of money, currency and capital assets.'
            ]
        ];

        $items = [
            [
                'id'              => 'def3f840-163c-4171-91e1-48fcf909335a',
                'term'            => 'Default',
                'disambiguation'  => 'Computer Science',
                'alternate_terms' => ['Preset', 'Factory preset'],
                'definition'      => 'The preexisting value of a user-configurable setting that is assigned to a software application, computer program or device. Such settings are also called presets or factory presets, especially for electronic devices.',
                'tags'            => ['Computer Science'],
                'related_terms'   => [],
                'updated_at'      => now()->toIso8601String()
            ],
            // Add more items as needed
        ];

        return view('glossary.index', compact('tags', 'items'));
    }
}
