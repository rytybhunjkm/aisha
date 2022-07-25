<div class="row form-group">
    <div class="col col-md-12">
        <select class="form-control" name="{{$name}}" id="{{$id}}">
            <option value="">{{$label}}</option>
            @foreach ($array as $key => $value)
                <option value="{{ $key }}" {{$selected == $key ? 'selected' : ''}}>
                    {{ $value }}
                </option>
            @endforeach
        </select>
        @error($name)
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
</div>