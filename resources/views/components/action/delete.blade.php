<form method="POST" action="{{$route}}">
    @csrf
    @method('DELETE')

    <input type="hidden" name="{{$id}}" value="{{$value}}">

    <button class="btn btn-outline-danger">
        <i class="fa-solid fa-trash-can"></i>
    </button>
</form>