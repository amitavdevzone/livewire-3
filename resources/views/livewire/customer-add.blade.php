<div>
    <style>
        .error { color: red;}
    </style>
    <h1>Customer create form</h1>
    <form wire:submit="save">
        <div class="mb-3">
            <label for="name">Name</label>
            <input class="form-control" type="text" name="form.name" id="name" wire:model.blur="form.name" />
            @error('form.name') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="email">Email</label>
            <input class="form-control" type="text" name="form.email" id="email" wire:model="form.email" />
            @error('form.email') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="phone_number">Phone number</label>
            <input class="form-control" type="text" name="form.phone_number" id="phone_number" wire:model="form.phone_number" />
            @error('form.phone_number') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="age">Age</label>
            <input class="form-control" type="number" name="form.age" id="age" wire:model="form.age" />
            @error('form.age') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="country">Country</label>
            <select class="form-control" name="form.country" id="country" wire:model="form.country">
                <option value="India">India</option>
                <option value="Nepal">Nepal</option>
                <option value="China">China</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Singapore">Singapore</option>
            </select>
            @error('form.country') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="age">Notes</label>
            <textarea class="form-control" name="form.notes" id="notes" rows="10" wire:model.blur="form.notes"></textarea>
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-success">
                Save
                <div wire:loading>...</div>
            </button>
        </div>
    </form>
</div>
