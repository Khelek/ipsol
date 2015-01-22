<h3> Выберите главную новость </h3>

{{ Former::open()->method('POST')->route('admin.news.big_news.store') }}
  <div class="col-lg-10 col-sm-9">
      @if (!is_null($big_news))
          {{ Former::select('news_id')
            ->fromQuery(\News::all(), 'title', 'id')
            ->select($big_news->news->id)
            ->setAttributes(["class" => 'form-control', "style"
                             => "width: 100%; height: 30px"])
            ->label('') }}
      @else
          {{ Former::select('news_id')
            ->addOption()
            ->fromQuery(\News::all(), 'title', 'id')
            ->setAttributes(["class" => 'form-control', "style"
                             => "width: 100%; height: 30px"])
            ->label('') }}
      @endif
  </div>
  {{  BootstrapForm::submit('Сохранить', ['class' =>
                                              'btn-xs btn-info col-sm-3 col-lg-2']) }}
{{ Former::close() }}
