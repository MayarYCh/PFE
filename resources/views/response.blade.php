<form action="{{ route('microtasks.storeResponse') }}" method="POST">
    @csrf
    <input type="hidden" name="microtask_id" value="{{ $microtask->id }}">
    <textarea name="response" rows="5">{{ $microtask->response }}</textarea>
    <button type="submit">Submit</button>
</form>
