<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <h1>{{ $title }}</h1>
    <p>{{ $body }}</p>

    @foreach($todos as $todo)
        <div wire:key="{{ $todo['id'] }}">
            <livewire:Todo.TodoItem :todo="$todo" />
        </div>
    @endforeach

    <form wire:submit="handleSubmit">
        <label for="title">Title is {{$title}}</label>
        <br>
        <input type="text" id="title" wire:model="title" />
    </form>

    <hr>
</div>
