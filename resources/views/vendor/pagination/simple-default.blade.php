@if ($paginator->hasPages())
    <div class="c-pagination">

        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a class="" disabled=""><span class="c-icon -arrow-left"></span>Anterior</a>
        @else
            <a class="" href="{{ $paginator->previousPageUrl() }}"><span
                    class="c-icon -arrow-left"></span> Anterior</a>
        @endif

        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="">Siguiente <span
                    class="c-icon -arrow-right"></span></a>
        @else
            <a class="" href="{{ $paginator->nextPageUrl() }}">Siguiente <span
                    class="c-icon -arrow-right"></span></a>
        @endif

    </div>
@endif
