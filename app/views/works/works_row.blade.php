<div class="works_row clear-fix {{ $row_count > 2 ? 'works_row_hidden' : ''}}">
    @foreach ($arr as $work)
			  <div class="work_preview {{ $work->need_big_preview ? 'work_preview_big' : ''}}">
				    {{ HTML::image($work->need_big_preview ? $work->big_preview->url('medium')
                                                   : $work->preview->url('medium')) }}
				    <a href="{{ URL::route('works.show', $work->slug) }}">{{ $work->title }}</a>
				    <p>{{ Str::limit($work->solution_content, 100) }}</p>
			  </div>
    @endforeach
</div>
