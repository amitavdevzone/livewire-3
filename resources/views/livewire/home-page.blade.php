<div>
    <x-nav />
    <p>This is home page</p>
    @persist('player')
        <audio src="./music.mp3" controls></audio>
    @endpersist
</div>
