<div class="address-container form-group">
    <div class="col-lg-2 col-sm-4"></div>
    <div class="col-lg-8 col-sm-6">
        {{ Form::text('addresses[]', $service_addr, ["class" => "form-control"]) }}
    </div>
    <div class="col-lg-2 col-sm-2">
        <a href="#" class="destroy-address col-sm-12 btn btn-default"> Удалить адрес </a>
    </div>
</div>
