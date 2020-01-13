@if (config('contactetc.show_errors_below_field') && $errors->has($field->field_name))
    <span class="invalid-feedback" style='display:block !important; ' role="alert">
         <strong>{{ $errors->first($field->field_name) }}</strong>
    </span>
@endif
