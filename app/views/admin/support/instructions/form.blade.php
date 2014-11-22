{{ Former::string('name')->required() }}

@if ($instruction->instruction_updated_at)
   <div class="col-lg-10 col-lg-offset-2 col-sm-8 col-sm-offset-4">
       <a href="{{ $instruction->instruction->url() }}" > Инструкция </a>
   </div>
   {{ Former::file('instruction') }}
@else
   {{ Former::file('instruction') }}
@endif

@if ($instruction->documentation_updated_at)
   <div class="col-lg-10 col-lg-offset-2 col-sm-8 col-sm-offset-4">
       <a href="{{ $instruction->documentation->url() }}" > Документация </a>
   </div>
   {{ Former::file('documentation') }}
@else
   {{ Former::file('documentation') }}
@endif

@if ($instruction->certificate_updated_at)
   <div class="col-lg-10 col-lg-offset-2 col-sm-8 col-sm-offset-4">
       <a href="{{ $instruction->certificate->url() }}" > Сертификат </a>
   </div>
   {{ Former::file('certificate') }}
@else
   {{ Former::file('certificate') }}
@endif

{{ Former::actions()
            ->large_primary_submit('Submit')
            ->large_inverse_reset('Reset') }}
