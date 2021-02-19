🐼{{ $type }} - {{ $slot }} - {{ required }}🐼

@if($type == "text")
<div class="form-group">
    <label for="{{ $name }}">{{ $slot }} {{ $required ? "(required)" : ""}}</label><br />
    <input id="{{ $name }}" type="text" name="{{ $name }}" value="{{ old( $name ) }}" class="form-control" />
</div>
@else
<div class="form-group">
    <label for="{{ $name }}">{{ $slot }}</label><br />
    <input id="{{ $name }}" type="file" name="{{ $name }}" value="{{ old($name) }}" class="form-control-file" />
</div>
@endif