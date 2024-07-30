@if ($paginator->hasPages())
<!--
<button class="page-move-btn">
                <img src="{{asset('assets/images/previous-icon.png')}}" alt="" />
                <span class="button-text">Previous</span>
            </button>
            <div class="page-numbers-wrapper">
                <button class="page-number active-page-number">1</button>
                <button class="page-number">2</button>
                <button class="page-number">3</button>
                <button class="page-number">4</button>
            </div>
            <button class="page-move-btn">
                <span class="button-text">Next</span>
                <img src="{{asset('assets/images/next-icon.png')}}" alt="" />
            </button>

             -->
<nav class="navbar navbar-expand-sm">
    <ul class="pagination pagination-list">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
        <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
            <span  aria-hidden="true">
                <button class="page-move-btn">
                    <i class="fa fa-chevron-left p-left" aria-hidden="true"></i>
                    <span class="button-text">Previous</span>
                </button>
            </span>
        </li>
        @else

        <li class="page-item">
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">

                <button class="page-move-btn">
                    <i class="fa fa-chevron-left p-left" aria-hidden="true"></i>
                    <span class="button-text">Previous</span>
                </button>
            </a>
        </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
        <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
        @foreach ($element as $page => $url)
        @if ($page == $paginator->currentPage())
        <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
        @else
        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
        @endif
        @endforeach
        @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
        <li class="page-item">
            <a  href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">

            <button class="page-move-btn">
                <span class="button-text">Next</span>
                <img src="{{asset('assets/images/next-icon.png')}}" alt="" />
            </button>
            </a>
        </li>
        @else
        <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
            <span  aria-hidden="true">

            <button class="page-move-btn">
                <span class="button-text">Next</span>
                <img src="{{asset('assets/images/next-icon.png')}}" alt="" />
            </button>
            </span>
        </li>
        @endif
    </ul>
</nav>

@endif
