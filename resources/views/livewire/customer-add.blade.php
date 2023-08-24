<div>
    <style>
        .error { color: red;}
    </style>
    <h1>Customer create form</h1>
    <form wire:submit="save">
        <div class="mb-3">
            <label for="name">Name</label>
            <input class="form-control" type="text" name="name" id="name" wire:model="name" />
            @error('name') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="email">Email</label>
            <input class="form-control" type="text" name="email" id="email" wire:model="email" />
            @error('email') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="phone_number">Phone number</label>
            <input class="form-control" type="text" name="phone_number" id="phone_number" wire:model="phone_number" />
            @error('phone_number') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="age">Age</label>
            <input class="form-control" type="number" name="age" id="age" wire:model="age" />
            @error('age') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="country">Country</label>
            <select class="form-control" name="country" id="country" wire:model="country">
                <option value="India">India</option>
                <option value="Nepal">Nepal</option>
                <option value="China">China</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Singapore">Singapore</option>
            </select>
            @error('country') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="age">Notes</label>
            <textarea class="form-control" name="notes" id="notes" rows="10" wire:model="notes"></textarea>
            @error('notes') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <input type="submit" value="Submit" class="btn btn-success" />
        </div>
    </form>
</div>
