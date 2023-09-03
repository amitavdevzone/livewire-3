<div>
    <x-nav />
    <p>This is about us page</p>
    @persist('player')
        <audio src="./music.mp3" controls></audio>
    @endpersist
</div>
