{{ Former::string('name')->required() }}

@if ($instruction->instruction_updated_at)
   <div class="col-lg-10 col-lg-offset-2 col-sm-8 col-sm-offset-4">
       <a href="{{ $instruction->instruction->url() }}" > {{ Lang::get('general.link') }} </a>
   </div>
   {{ Former::file('instruction') }}
@else
   {{ Former::file('instruction') }}
@endif

@if ($instruction->documentation_updated_at)
   <div class="col-lg-10 col-lg-offset-2 col-sm-8 col-sm-offset-4">
       <a href="{{ $instruction->documentation->url() }}" > {{ Lang::get('general.link') }}  </a>
   </div>
   {{ Former::file('documentation') }}
@else
   {{ Former::file('documentation') }}
@endif

@if ($instruction->certificate_updated_at)
   <div class="col-lg-10 col-lg-offset-2 col-sm-8 col-sm-offset-4">
       <a href="{{ $instruction->certificate->url() }}" > {{ Lang::get('general.link') }}  </a>
   </div>
   {{ Former::file('certificate') }}
@else
   {{ Former::file('certificate') }}
@endif

{{ Former::actions()
            ->large_primary_submit(Lang::get('validation.attributes.submit')) }}
