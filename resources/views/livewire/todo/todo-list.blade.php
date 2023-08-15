<div>
    <div class="row mb-3 mt-3">
        <div class="col">
            <h1>My todos</h1>
        </div>
    </div>

    <livewire:todo-add-form />

    <div class="col">
        <div class="row">
            <ul class="list-group">
                @foreach($todos as $todo)
                    <livewire:Todo.TodoItem :todo="$todo" wire:key="{{ $todo['id'] }}" />
                @endforeach
            </ul>
        </div>
    </div>
</div>
