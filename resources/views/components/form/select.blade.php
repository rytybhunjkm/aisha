<div class="row form-group">
    <div class="col col-md-12">
        <div class="input-group">
            <div class="input-group-addon">{{ $label }}</div>
            <input type="number" id="{{ $id }}" name="{{ $name }}" class="form-control"
                value="{{ $value }}">
        </div>
        @error($name)
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
</div>
