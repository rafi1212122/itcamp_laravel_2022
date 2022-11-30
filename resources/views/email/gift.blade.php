<div style="background: rgb(203 213 225);padding-top: 4rem;padding-bottom: 4rem">
    <div style="background: rgb(51 65 85); border-radius: 1rem;color: white;margin: 5vw;padding: 1rem;font-family: sans-serif">
        <h2>New Gift!</h2>
        <h4>New gift from {{ $gift->user->name }}</h4>
        <h6>Message: {{ $gift->pesan }}</h6>
        <h6>Link: <a href="http://localhost:8000/storage/{{ $gift->file }}">http://localhost:8000/storage/{{ $gift->file }}</a></h6>

    </div>
</div>