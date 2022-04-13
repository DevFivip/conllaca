@if ($paginator->hasPages())
    <div class="c-pagination">

        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            {{-- <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                <span class="page-link" aria-hidden="true">&lsaquo;</span>
            </li> --}}

            <a aria-label="@lang('pagination.previous')" class="c-button" disabled=""><span
                    class="c-icon -arrow-left"></span></a>
        @else
            {{-- <li class="page-item">
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev"
                    aria-label="@lang('pagination.previous')">&lsaquo;</a>
            </li> --}}

            <span aria-label="@lang('pagination.previous')" class="c-button page-link"><span
                    class="c-icon -arrow-left"></span></span>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item disabled" aria-disabled="true"><span
                        class="page-link">{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active" aria-current="page"><span
                                class="page-link">{{ $page }}</span></li>
                    @else
                        <li class="page-item"><a class="page-link"
                                href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next"
                    aria-label="@lang('pagination.next')">&rsaquo;</a>
            </li>
        @else
            <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                <span class="page-link" aria-hidden="true">&rsaquo;</span>
            </li>
        @endif








        <a href="/wines/search?page=1&amp;order_by=Name" class="c-button" disabled=""><span
                class="c-icon -arrow-left"></span></a>&nbsp;
        <a href="/wines/search?page=2&amp;order_by=Name" class="c-button"><span
                class="c-icon -arrow-right"></span></a>
        <div class="c-pagination__pages">
            <a href="/wines/search?page=1&amp;order_by=Name" class="-selected">1</a>
            <a href="/wines/search?page=2&amp;order_by=Name" class="">2</a>
            <a href="/wines/search?page=3&amp;order_by=Name" class="">3</a>
            <a href="/wines/search?page=4&amp;order_by=Name" class="">4</a>
            <span>...</span>
            <a href="/wines/search?page=18&amp;order_by=Name" class="">18</a>

        </div>
        <a href="/wines/search?page=2&amp;order_by=Name" class="c-button -xs-hidden"><span
                class="c-icon -arrow-right"></span></a>


    </div>




@endif
