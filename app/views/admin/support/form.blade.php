{{ Former::string('name')->required() }}
<div id="service-center-addresses">
    {{-- TODO мб сделать хелпер вместо импорта --}}
    <div style='margin-left: -15px; margin-right: -15px;'>
        {{ Form::label('addresses', 'Addresses', ["class" => "col-lg-2 col-sm-4 control-label"]) }}
    </div>

    @foreach($address->addresses as $service_addr)
        @include('admin.support.service_center_address_input')
    @endforeach
</div>

<div class="form-group" style="margin-bottom: 20px">
    <div class="col-lg-2 col-sm-4"></div>
    <div class="col-lg-8 col-sm-6">
        <a href="#" class="add-address btn btn-default"> Добавить адрес </a>
    </div>
</div>
{{ Former::actions()
            ->large_primary_submit('Submit')
            ->large_inverse_reset('Reset') }}

@section('scripts')
    @parent
    <script type="bogus" id="multi">
     <?php $service_addr = ''; // Иначе почему то в @include будет последнее значение этой переменной ?>
     @include('admin.support.service_center_address_input')
    </script>

    <script type="text/javascript">
        $(document).on('click', '.destroy-address', function() {
            $(this).parents('.address-container').remove();
        });

        $(document).on('click', '.add-address', function() {
            var a = $("#multi").html();
           $('#service-center-addresses').append(a);
        });
    </script>
@stop
