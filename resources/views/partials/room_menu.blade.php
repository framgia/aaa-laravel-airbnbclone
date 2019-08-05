<ul class="sidebar list-unstyled">
    <li>
        <a href="{{ route('rooms.listing', $room) }}">Listing</a>
        @include('partials/check_done', ['condition' => true])
    </li>
    <li>
        <a href="{{ route('rooms.pricing', $room) }}">Pricing</a>
        @include('partials/check_done', ['condition' => $room->price])
    </li>
    <li>
        <a href="{{ route('rooms.description', $room) }}">Description</a>
        @include('partials/check_done', ['condition' => $room->listing_name])
    </li>
    <li>
        <a href="{{ route('rooms.photos', $room) }}">Photos</a>
        @include('partials/check_done', ['condition' => $room->photos()->exists()])
    </li>
    <li>
        <a href="{{ route('rooms.amenities', $room) }}">Amenities</a>
        @include('partials/check_done', ['condition' => true])
    </li>
    <li>
        <a href="{{ route('rooms.location', $room) }}">Location</a>
        @include('partials/check_done', ['condition' => $room->address])
    </li>
</ul>

<hr>

@if ($room->isReady())
    <form method="POST" action="{{ route('rooms.publish', $room) }}">
        @csrf
        @method('PATCH')

        <button type="submit" class="btn btn-normal btn-block">Publish</button>
    </form>
@else
    <button disabled type="submit" class="btn btn-normal btn-block disabled">Publish</button>
@endif