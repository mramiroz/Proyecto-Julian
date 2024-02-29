<h1>Ticket Details</h1>

    <div>
        <h2>Ticket ID: {{ $ticket->id }}</h2>
        <p>Title: {{ $ticket->title }}</p>
        <p>Description: {{ $ticket->description }}</p>
        <p>Status: {{ $ticket->status }}</p>
        <p>Purchase Date: {{ $ticket->created_at }}</p>
    </div>

    <a href="{{ route('tickets.index') }}">Back to tickets list</a>
