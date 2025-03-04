<?php

namespace Database\Seeders;

use App\Enums\UserType;
use App\Models\Category;
use App\Models\CodeLanguage;
use App\Models\Item;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'name'     => 'Creator',
            'email'    => 'admin@admin.com',
            'type'     => UserType::ADMIN,
            'password' => bcrypt('password'),
        ]);

        $categories = [
            [
                "title"       => [
                    "ka" => 'ამოხსნები',
                    "en" => 'solutions'
                ],
                "slug"        => str()->slug('solutions'),
                "description" => [
                    "ka" => "solutions category description",
                    "en" => "solutions category description"
                ],
                "status"      => true
            ],
            [
                "title"       => [
                    "ka" => 'სწრაფი რჩევები',
                    "en" => 'Quick tips'
                ],
                "slug"        => str()->slug('quick-tips'),
                "description" => [
                    "ka" => "solutions category description",
                    "en" => "solutions category description"
                ],
                "status"      => true
            ],
            [
                "title"       => [
                    "ka" => 'კოდი მაგალითები',
                    "en" => 'code-examples'
                ],
                "slug"        => str()->slug('code-examples'),
                "description" => [
                    "ka" => "solutions category description",
                    "en" => "solutions category description"
                ],
                "status"      => true
            ],
        ];
        foreach ($categories as $category) {
            Category::create($category);

        }
        $tags = [
            [
                'title'  => 'Laravel',
                'slug'   => 'laravel',
                'color'  => 'rgb(245, 104, 87)',
                'status' => 1,
            ],
            [
                'title'  => 'General',
                'slug'   => 'general',
                'color'  => 'rgb(78, 137, 218)',
                'status' => 1,
            ],
            [
                'title'  => 'Eloquent',
                'slug'   => 'eloquent',
                'color'  => 'rgb(9, 215, 193)',
                'status' => 1,
            ],
            [
                'title'  => 'Vue',
                'slug'   => 'vue',
                'color'  => 'rgb(58, 185, 129)',
                'status' => 1,
            ],
            [
                'title'  => 'Code Review',
                'slug'   => 'code-review',
                'color'  => 'rgb(140, 211, 98)',
                'status' => 1,
            ],
            [
                'title'  => 'Testing',
                'slug'   => 'testing',
                'color'  => 'rgb(218, 87, 87)',
                'status' => 1,
            ],
            [
                'title'  => 'Livewire',
                'slug'   => 'livewire',
                'color'  => 'rgb(251, 112, 169)',
                'status' => 1,
            ],
            [
                'title'  => 'JavaScript',
                'slug'   => 'javascript',
                'color'  => 'rgb(154, 212, 224)',
                'status' => 1,
            ],
            [
                'title'  => 'Requests',
                'slug'   => 'requests',
                'color'  => 'rgb(187, 130, 78)',
                'status' => 1,
            ],
            [
                'title'  => 'Servers',
                'slug'   => 'servers',
                'color'  => 'rgb(249, 169, 122)',
                'status' => 1,
            ],
            [
                'title'  => 'Feedback',
                'slug'   => 'feedback',
                'color'  => 'rgb(136, 173, 72)',
                'status' => 1,
            ],
            [
                'title'  => 'Forge',
                'slug'   => 'forge',
                'color'  => 'rgb(93, 179, 183)',
                'status' => 1,
            ],
            [
                'title'  => 'Mix',
                'slug'   => 'mix',
                'color'  => 'rgb(247, 201, 83)',
                'status' => 1,
            ],
            [
                'title'  => 'Tips',
                'slug'   => 'tips',
                'color'  => 'rgb(131, 126, 182)',
                'status' => 1,
            ],
            [
                'title'  => 'Nova',
                'slug'   => 'nova',
                'color'  => 'rgb(12, 248, 197)',
                'status' => 1,
            ],
            [
                'title'  => 'PHP',
                'slug'   => 'php',
                'color'  => 'rgb(79, 91, 147)',
                'status' => 1,
            ],
            [
                'title'  => 'Spark',
                'slug'   => 'spark',
                'color'  => 'rgb(102, 173, 211)',
                'status' => 1,
            ],
            [
                'title'  => 'Lumen',
                'slug'   => 'lumen',
                'color'  => 'rgb(249, 169, 122)',
                'status' => 1,
            ],
            [
                'title'  => 'Inertia',
                'slug'   => 'inertia',
                'color'  => 'rgb(159, 122, 234)',
                'status' => 1,
            ],
            [
                'title'  => 'Filament',
                'slug'   => 'filament',
                'color'  => 'rgb(253, 174, 75)',
                'status' => 1,
            ],
            [
                'title'  => 'Guides',
                'slug'   => 'guides',
                'color'  => 'rgb(213, 30, 34)',
                'status' => 1,
            ],
            [
                'title'  => 'Vite',
                'slug'   => 'vite',
                'color'  => 'rgb(116, 123, 255)',
                'status' => 1,
            ],
            [
                'title'  => 'Design',
                'slug'   => 'design',
                'color'  => 'rgb(245, 205, 87)',
                'status' => 1,
            ],
            [
                'title'  => 'Envoyer',
                'slug'   => 'envoyer',
                'color'  => 'rgb(245, 104, 87)',
                'status' => 1,
            ],
            [
                'title'  => 'Vapor',
                'slug'   => 'vapor',
                'color'  => 'rgb(37, 196, 242)',
                'status' => 1,
            ],
            [
                'title'  => 'React',
                'slug'   => 'react',
                'color'  => 'rgb(97, 218, 251)',
                'status' => 1,
            ],
            [
                'title'  => 'DevOps',
                'slug'   => 'devops',
                'color'  => 'rgb(136, 150, 175)',
                'status' => 1,
            ],
            [
                'title'  => 'Reverb',
                'slug'   => 'reverb',
                'color'  => 'rgb(131, 70, 49)',
                'status' => 1,
            ],
        ];
        foreach ($tags as $tag) {
            Tag::create($tag);
        }
        $child_tags = Tag::query()
            ->whereIn('title', ['Laravel', 'Filament'])
            ->get();
        $parent_php = Tag::query()
            ->where('title', 'PHP')
            ->first();
        foreach ($child_tags as $tag) {
            $parent_php->appendNode($tag);
        }
//        Tag::factory(20)->create();

        Item::factory()
            ->count(500)
            ->create()
            ->each(function ($item) {
                $randomTags = Tag::all()->random(3);

                // Attach the random tags to the item
                $item->tags()->attach($randomTags);
            });

        $languages = [
            '1C',
            '4D',
            'ABAP',
            'ABNF',
            'Access logs',
            'Ada',
            'Apex',
            'Arduino',
            'ARM assembler',
            'AVR assembler',
            'ActionScript',
            'Alan IF',
            'Alan',
            'AngelScript',
            'Apache',
            'AppleScript',
            'Arcade',
            'AsciiDoc',
            'AspectJ',
            'AutoHotkey',
            'AutoIt',
            'Awk',
            'Ballerina',
            'Bash',
            'Basic',
            'BBCode',
            'Blade',
            'BNF',
            'BQN',
            'Brainfuck',
            'C#',
            'C',
            'C++',
            'C/AL',
            'C3',
            'Cache Object Script',
            'Candid',
            'CMake',
            'COBOL',
            'CODEOWNERS',
            'Coq',
            'CSP',
            'CSS',
            "Cap'n Proto",
            'Chaos',
            'Chapel',
            'Cisco CLI',
            'Clojure',
            'CoffeeScript',
            'CpcdosC+',
            'Crmsh',
            'Crystal',
            'cURL',
            'Cypher',
            'D',
            'Dafny',
            'Dart',
            'Delphi',
            'Diff',
            'Django',
            'DNS Zone file',
            'Dockerfile',
            'DOS',
            'dsconfig',
            'DTS',
            'Dust',
            'Dylan',
            'EBNF',
            'Elixir',
            'Elm',
            'Erlang',
            'Excel',
            'Extempore',
            'F#',
            'FIX',
            'Flix',
            'Fortran',
            'FunC',
            'G-Code',
            'Gams',
            'GAUSS',
            'GDScript',
            'Gherkin',
            'Glimmer and EmberJS',
            'GN for Ninja',
            'Go',
            'Grammatical Framework',
            'Golo',
            'Gradle',
            'GraphQL',
            'Groovy',
            'GSQL',
            'HTML, XML',
            'HTTP',
            'Haml',
            'Handlebars',
            'Haskell',
            'Haxe',
            'High-level shader language',
            'Hy',
            'Ini, TOML',
            'Inform7',
            'IRPF90',
            'Iptables',
            'JSON',
            'JSONata',
            'Java',
            'JavaScript',
            'Jolie',
            'Julia',
            'Julia REPL',
            'Kotlin',
            'Lang',
            'LaTeX',
            'Leaf',
            'Lean',
            'Lasso',
            'Less',
            'LDIF',
            'Liquid',
            'Lisp',
            'LiveCode Server',
            'LiveScript',
            'LookML',
            'Lua',
            'Luau',
            'Macaulay2',
            'Makefile',
            'Markdown',
            'Mathematica',
            'Matlab',
            'Maxima',
            'Maya Embedded Language',
            'Mercury',
            'MetaPost',
            'MIPS Assembler',
            'Mint',
            'Mirth',
            'mIRC Scripting Language',
            'Mizar',
            'MKB',
            'MLIR',
            'Mojolicious',
            'Monkey',
            'Moonscript',
            'Motoko',
            'N1QL',
            'NSIS',
            'Never',
            'Nginx',
            'Nim',
            'Nix',
            'Oak',
            'Object Constraint Language',
            'OCaml',
            'Objective C',
            'Odin',
            'OpenGL Shading Language',
            'OpenSCAD',
            'Oracle Rules Language',
            'Oxygene',
            'PF',
            'PHP',
            'Papyrus',
            'Parser3',
            'Perl',
            'Phix',
            'Pine Script',
            'Plaintext',
            'Pony',
            'PostgreSQL & PL/pgSQL',
            'PowerOn',
            'PowerShell',
            'Processing',
            'Prolog',
            'Properties',
            'Protocol Buffers',
            'Puppet',
            'Python',
            'Python profiler results',
            'Python REPL',
            'Q#',
            'Q',
            'QML',
            'R',
            'Raku',
            'RakuDoc',
            'RakuQuoting',
            'RakuRegexe',
            'Razor CSHTML',
            'ReasonML',
            'Rebol & Red',
            'RenderMan RIB',
            'RenderMan RSL',
            'ReScript',
            'RiScript',
            'RISC-V Assembly',
            'Roboconf',
            'Robot Framework',
            'RPM spec files',
            'Ruby',
            'Rust',
            'RVT Script',
            'SAS',
            'SCSS',
            'SQL',
            'STEP Part 21',
            'Scala',
            'Scheme',
            'Scilab',
            'SFZ',
            'Shape Expressions',
            'Shell',
            'Smali',
            'Smalltalk',
            'SML',
            'Solidity',
            'Splunk SPL',
            'Stan',
            'Stata',
            'Structured Text',
            'Stylus',
            'SubUnit',
            'Supercollider',
            'Svelte',
            'Swift',
            'Tcl',
            'Terraform',
            'Test Anything Protocol',
            'Thrift',
            'Toit',
            'TP',
            'Transact-SQL',
            'TTCN-3',
            'Twig',
            'TypeScript',
            'Unicorn Rails log',
            'Unison',
            'VB.Net',
            'VBA',
            'VBScript',
            'VHDL',
            'Vala',
            'Verilog',
            'Vim Script',
            'WGSL',
            'X#',
            'X++',
            'x86 Assembly',
            'x86 Assembly (AT&T)',
            'XL',
            'XQuery',
            'YAML',
            'ZenScript',
            'Zephir',
            'Zig'
        ];

        foreach ($languages as $language) {
            CodeLanguage::create([
                'name' => $language,
                'code' => $language,
            ]);
        }
    }
}
