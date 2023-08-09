<div>
    <div class="row mb-2 mt-5">
        <div class="col">
            <h1>View todo - {{ $task }}</h1>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <form wire:submit="handleSubmit">
                <div class="mb-3"><input type="text" class="form-control" wire:model="task" /></div>
            </form>
        </div>
    </div>
</div>
