<div>
<livewire:events.main-component />
    <hr>
    <livewire:events.independent />
    <div x-on:got-name.window="alert('Hi')">
        <p>A different div</p>
    </div>
    <hr>
    <div>
        <button @click="$dispatch('got-name', {name: 'Amitav Roy'})">Direct dispact</button>
    </div>
    <div>
        @foreach($names as $name)
            <button @click="$dispatch('got-name', {name: '{{$name}}'})">{{ $name }}</button>
        @endforeach
    </div>
    <hr>
    <div>
        @foreach($names as $name)
            <button wire:click="sendToThird">{{ $name }}</button>
        @endforeach
    </div>
</div>
