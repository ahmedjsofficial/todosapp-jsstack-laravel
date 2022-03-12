<!-- Todos Home -->
@extends('layouts.app')

@section('content')

    <div class="todos_warp">
        @include('includes.todostitle')
        <div class="todos_container">
            <div class="todos_dashboard">
                <div class="form_container">
                    <form class="todo_form" action="{{ route('home.store') }}" method="POST">
                        @csrf
                            <input type="text" id="title" name="title" placeholder="Type here...." class="todo_input" max="255" />
                            <button type="submit" class="addtodo_btn"><img src="{{ asset('images/addtodo.svg') }}"></button>
                    </form>
                </div>

                {{-- Latest Todos --}}
                @if(!Auth::guest())
                @if(count($todos) > 0)
                    <div class="all_todos_grid">
                        @foreach($todos as $currentTodo)
                            
                                @if(Auth::user()->id == $currentTodo->user_id)
                                    <li class="current_todo">
                                        <div class="current_todo_flexbox">
                                            @include('includes.checkaction')
                                        </div>
                                        <div class="current_todo_flexbox">
                                            @include('includes.editaction')
                                            @include('includes.deleteaction')
                                        </div>
                                    </li>
                                @endif
                            
                        @endforeach
                    </div>
                @else
                    <div class="developer_uncout_wrap">
                        <div class="developer_uncout grid_box">
                            <img src="{{ asset('images/Developer.svg') }}" alt="developer/uncount" class="developer" />
                            <p>Type to add todos there!</p>
                            <a href="#title" class="addtodo_btn uncount_btn">Go to Input</a>
                        </div>
                    </div>
                @endif
                @endif
                {{-- Latest Todos --}}
                
            </div>
        </div>
    </div>
    
@endsection
