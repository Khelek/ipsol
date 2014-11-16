{{ Former::string('title') }}
{{ Former::string('slug') }}
{{ Former::textarea('content')->addClass('ckeditor') }}
{{ Former::string('meta_title') }}
{{ Former::string('meta_description') }}
{{ Former::string('meta_keywords') }}
{{ Former::actions()
            ->large_primary_submit('Submit')
            ->large_inverse_reset('Reset') }}
