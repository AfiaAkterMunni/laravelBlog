@if ($paginator->hasPages())
    <div class="row">
        <div class="column large-12">
            <nav class="pgn">
                <ul>
                    <li>
                        @if ($paginator->onFirstPage())
                            <span class="pgn__prev previous-link-disable">Prev</span>
                        @else
                            <span  class="pgn__prev">
                                <a href="{{$paginator->previousPageUrl()}}" class="previous-link">Prev</a>
                            </span>
                        @endif
                    </li>
                    @for ($page = 1; $page <= $paginator->lastPage(); $page++)
                        <li>
                            <a
                                class="pgn__num @if ($paginator->currentPage() == $page) current @endif"
                                href="{{ $paginator->url($page) }}"
                            >
                                {{ $page }}
                            </a>
                        </li>
                    @endfor
                    <li>
                        @if ($paginator->hasMorePages())
                            <span class="pgn__next">
                                <a href="{{$paginator->nextPageUrl()}}" class="next-link">Next</a>
                            </span>
                        @else
                            <span class="pgn__next previous-link-disable">Next</span>
                        @endif
                    </li>
                </ul>
            </nav>
        </div>
    </div>
@endif
{{-- <div class="row">
    <div class="column large-12">
        <nav class="pgn">
            <ul>
                <li>
                    <span class="pgn__prev" href="#0">
                        Prev
                    </span>
                </li>
                <li><a class="pgn__num" href="#0">1</a></li>
                <li><span class="pgn__num current">2</span></li>
                <li><a class="pgn__num" href="#0">3</a></li>
                <li><a class="pgn__num" href="#0">4</a></li>
                <li><a class="pgn__num" href="#0">5</a></li>
                <li><span class="pgn__num dots">…</span></li>
                <li><a class="pgn__num" href="#0">8</a></li>
                <li>
                    <span class="pgn__next" href="#0">
                        Next
                    </span>
                </li>
            </ul>
        </nav>
    </div>
</div> --}}
