@if($currentTodo->completed == false)
    <form class="todo_form" method="POST" action="{{ route('home.update', $currentTodo->id) }}">
    @method("PUT")
    @csrf

        <input type="text" id="completed" name="completed" value="1" hidden />
        <button type="submit" class="action_circle grid_box" id="completed" name="completed" value="true">
            <img src="{{ asset('images/circle.svg') }}">
        </button>
    </form>
    <a href="#" class="todo_link todo_link_uncompleted">{{ $currentTodo->title }}</a>
@else
    <form class="todo_form" method="POST" action="{{ route('home.update', $currentTodo->id) }}">
    @method("PUT")
    @csrf

        <input type="text" id="completed" name="completed" value="0" hidden />
        <button type="submit" class="action_circle grid_box" id="completed" name="completed" value="false">
            <img src="{{ asset('images/check2-circle.svg') }}">
        </button>
    </form>
    <a href="#" class="todo_link todo_link_completed">{{ $currentTodo->title }}</a>
@endif

