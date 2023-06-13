@if ($paginator->hasPages())
    <ul>
        @if ($paginator->onFirstPage())
            <li><i class="fas fa-arrow-left"></i></li>
        @else
            <li>
                <a href="{{ $paginator->previousPageUrl() }}"><i class="fas fa-arrow-left"></i></a>
            </li>
        @endif

        @foreach ($elements as $element)
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active"><a role="button">{{ $page }}</a></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach
        
        @if ($paginator->hasMorePages())
            <li>
                <a href="{{ $paginator->nextPageUrl() }}"><i class="fas fa-arrow-right"></i></a>
            </li>
        @else
            <li><i class="fas fa-arrow-right"></i></li>
        @endif
    </ul>
@endif
