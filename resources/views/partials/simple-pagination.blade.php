@if ($paginator->hasPages())
    <nav class="flex justify-center my-4" aria-label="Simple Pagination">
        <div class="join w-96">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <button class="join-item btn btn-disabled w-52 min-w-0 flex justify-center items-center" aria-disabled="true">
                    @lang('pagination.previous')
                </button>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="join-item btn w-52 min-w-0 flex justify-center items-center">
                    @lang('pagination.previous')
                </a>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="join-item btn w-52 min-w-0 flex justify-center items-center">
            @lang('pagination.next')
                </a>
            @else
                <button class="join-item btn btn-disabled w-52 min-w-0 flex justify-center items-center" aria-disabled="true">
                    @lang('pagination.next')
                </button>
            @endif
        </div>
    </nav>
@endif
