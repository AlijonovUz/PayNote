@props(['paginator'])

@if($paginator->hasPages())
    <div class="mt-8 flex justify-center">
        <nav class="flex items-center gap-2" aria-label="Pagination">
            @if($paginator->onFirstPage())
                <span
                    class="disabled w-9 h-9 flex items-center justify-center rounded-lg border border-gray-200 bg-white text-slate-500 hover:bg-gray-50 transition-colors cursor-not-allowed opacity-50 pointer-events-none">
                    <i class="fa-solid fa-chevron-left text-xs"></i>
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}"
                   class="disabled w-9 h-9 flex items-center justify-center rounded-lg border border-gray-200 bg-white text-slate-500 hover:bg-gray-50 transition-colors">
                    <i class="fa-solid fa-chevron-left text-xs"></i>
                </a>
            @endif

            @php
                $current = $paginator->currentPage();
                $last = $paginator->lastPage();
                $range = 2;

                $start = max(1, $current - $range);
                $end = min($last, $current + $range);
            @endphp

            @if($start > 1)
                <a href="{{ $paginator->url(1) }}"
                   class="w-9 h-9 flex items-center justify-center rounded-lg border border-gray-200 bg-white text-slate-600 hover:bg-gray-50 hover:text-indigo-600 transition-colors font-medium">
                    1
                </a>

                @if($start > 2)
                    <span class="flex items-end justify-center w-9 h-9 pb-2 text-slate-400">...</span>
                @endif
            @endif

            @for($page = $start; $page <= $end; $page++)
                @if($page == $current)
                    <span
                        class="w-9 h-9 flex items-center justify-center rounded-lg bg-indigo-600 text-white font-medium shadow-md shadow-indigo-200">
                        {{ $page }}
                    </span>
                @else
                    <a href="{{ $paginator->url($page) }}"
                       class="w-9 h-9 flex items-center justify-center rounded-lg border border-gray-200 bg-white text-slate-600 hover:bg-gray-50 hover:text-indigo-600 transition-colors font-medium">
                        {{ $page }}
                    </a>
                @endif
            @endfor

            @if($end < $last)
                @if($end < $last - 1)
                    <span class="flex items-end justify-center w-9 h-9 pb-2 text-slate-400">...</span>
                @endif

                <a href="{{ $paginator->url($last) }}"
                   class="w-9 h-9 flex items-center justify-center rounded-lg border border-gray-200 bg-white text-slate-600 hover:bg-gray-50 hover:text-indigo-600 transition-colors font-medium">
                    {{ $last }}
                </a>
            @endif

            @if($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}"
                   class="w-9 h-9 flex items-center justify-center rounded-lg border border-gray-200 bg-white text-slate-500 hover:bg-gray-50 transition-colors">
                    <i class="fa-solid fa-chevron-right text-xs"></i>
                </a>
            @else
                <span
                    class="w-9 h-9 flex items-center justify-center rounded-lg border border-gray-200 bg-white text-slate-500 cursor-not-allowed opacity-50 pointer-events-none">
                    <i class="fa-solid fa-chevron-right text-xs"></i>
                </span>
            @endif
        </nav>
    </div>
@endif
