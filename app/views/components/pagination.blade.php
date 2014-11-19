@if ($paginator->getLastPage() > 1)
<?php $previousPage = ($paginator->getCurrentPage() > 1) ? $paginator->getCurrentPage() - 1 : 1; ?>  
<?php $nextPage = ($paginator->getCurrentPage() < $paginator->getLastPage()) ? $paginator->getCurrentPage() + 1 : $paginator->getCurrentPage(); ?>  
<?php $curPage = $paginator->getCurrentPage(); ?>
<?php $lastPage = $paginator->getLastPage(); ?>

<div class="content">
  <div class="pagination">
  @for ($i = 1; $i <= $paginator->getLastPage(); $i++)
      @if (($curPage == $lastPage && $i == $lastPage - 4) ||
          ($curPage != $lastPage && $curPage != $lastPage - 1 && $i == $previousPage - 1 && $i - 1  >= 1) ||
          ($curPage == $lastPage - 1 && $i == $lastPage - 4))
		      <span class="ellipsis">...</span>
      @endif

      @if (($curPage == 1 && $i == 5) ||
          ($curPage != 1 && $curPage != 2 && $i == $nextPage + 1 && $paginator->getLastPage() - $i >= 1) ||
          ($curPage == 2 && $i == 5))
		      <span class="ellipsis">...</span>
      @endif

      @if (($curPage == 1 && ($i == 3 || $i == 4)) || ($curPage == 2
         && $i == 4)) {{--  -1- 2 3 4 ... 5 --}}
          <button class="button {{ $i == $curPage ? 'button_active' : '' }}">
              <a href="{{ $paginator->getUrl($i) }}" class=""> {{ $i }} </a>
          </button>
      @endif

      @if (($curPage == $lastPage && ($i == $lastPage - 2 || $i == $lastPage - 3)) ||
          ($curPage == $lastPage - 1 && $i == $lastPage - 3))  {{--  1 ... 11 12 13 -14- --}}
          <button class="button {{ $i == $curPage ? 'button_active' : '' }}">
              <a href="{{ $paginator->getUrl($i) }}" class=""> {{ $i }} </a>
          </button>
      @endif

     @if ($i == 1 || $i == $previousPage || $i == $paginator->getCurrentPage() || $i == $nextPage || $i == $paginator->getLastPage())
         <button class="button {{ $i == $curPage ? 'button_active' : '' }}">
             <a href="{{ $paginator->getUrl($i) }}" class=""> {{ $i }} </a>
         </button>
     @endif
  @endfor
</div>
</div>
@endif
