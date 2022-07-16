<div class="row form-group">
    <div class="col col-md-12">
          <select class="form-control" name="{{$name}}" id="{{$id}}">
                <option value="">{{$label}}</option>
                @foreach ($collection as  $model)
                      <option {{ $model->id == $selected ? 'selected' : '' }} value="{{ $model->id }}">
                            {{ $model->$field }}
                      </option>
                @endforeach
          </select>
          @error($name)
                <p class="text-danger">{{ $message }}</p>
          @enderror
    </div>
</div>

