{{-- variables = [$object, $image] --}}

<?php $object_image_have_file = $image . "_updated_at" ?>

@if ($object->$object_image_have_file)
   <div class="col-md-8 col-md-offset-4">
       {{ HTML::image($object->$image->url('medium')) }}
   </div>
   {{ Former::file($image)->accept('image') }}
@else
   {{ Former::file($image)->accept('image')->required() }}
@endif
