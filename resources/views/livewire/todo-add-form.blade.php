<div class="row mb-5" wire:add-todo="handleSubmit">
    <div class="col">
        <div class="mb-3">
            <input class="form-control" type="text" id="title" placeholder="Enter your task here" wire:model="title" />
            Task length <h2 x-text="$wire.title.length"></h2>
        </div>
        <button type="submit" class="btn btn-primary" x-on:click="$dispatch('add-todo')">Add</button>
    </div>
</div>
