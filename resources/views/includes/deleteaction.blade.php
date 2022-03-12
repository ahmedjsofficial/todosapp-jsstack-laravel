<form class="todo_form" method="POST" action="{{ route('home.destroy', $currentTodo->id) }}">
    @method("DELETE")
    @csrf
        <button type="submit" class="action_circle delete_button grid_box">
            <img src="{{ asset('images/trash2-fill.svg') }}">
        </button>
</form>