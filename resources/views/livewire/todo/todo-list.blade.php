<div>
    <div class="row mb-3 mt-3">
        <div class="col">
            <h1>My todos</h1>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col">
            <form wire:submit="handleSubmit">
                <div class="mb-3">
                    <input class="form-control" type="text" id="title" placeholder="Enter your task here" wire:model="title" />
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>

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
