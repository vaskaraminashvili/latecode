@if ($paginator->hasPages())
    <nav class="mt-4 d-flex justify-content-center" aria-label="navigation">
        <ul class="pagination pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item mb-0 disabled" aria-disabled="true">
                    <span class="page-link"><i class="fas fa-angle-double-left"></i></span>
                </li>
            @else
                <li class="page-item mb-0">
                    <button type="button" class="page-link" wire:click="previousPage('{{ $paginator->getPageName() }}')"
                            wire:loading.attr="disabled">
                        <i class="fas fa-angle-double-left"></i>
                    </button>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item mb-0 disabled" aria-disabled="true">
                        <span class="page-link">{{ $element }}</span>
                    </li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item mb-0 active" aria-current="page">
                                <span class="page-link">{{ $page }}</span>
                            </li>
                        @else
                            <li class="page-item mb-0">
                                <button type="button" class="page-link"
                                        wire:click="gotoPage({{ $page }}, '{{ $paginator->getPageName() }}')">
                                    {{ $page }}
                                </button>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item mb-0">
                    <button type="button" class="page-link" wire:click="nextPage('{{ $paginator->getPageName() }}')"
                            wire:loading.attr="disabled">
                        <i class="fas fa-angle-double-right"></i>
                    </button>
                </li>
            @else
                <li class="page-item mb-0 disabled" aria-disabled="true">
                    <span class="page-link"><i class="fas fa-angle-double-right"></i></span>
                </li>
            @endif
        </ul>
    </nav>
@endif
