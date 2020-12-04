
@if ($paginator->hasPages())
    <nav>
        <ul class="pagination justify-content-center p-4">
        
            @if ($paginator->onFirstPage())
                <li class="page-item disabled">
                    <a class="page-link" aria-label="Previous">
                        <span aria-hidden="true">Back</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="Previous">
                        <span aria-hidden="true">Back</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
            @endif
            
            <li class="page-item disabled">
                <a class="page-link">{{ $paginator->currentPage() }}</a>
            </li>

            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="Next">
                        <span aria-hidden="true">Next</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            @else
                <li class="page-item disabled">
                    <a class="page-link" aria-label="Next">
                        <span aria-hidden="true">Next</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            @endif
        </ul>
    </nav>
@endif