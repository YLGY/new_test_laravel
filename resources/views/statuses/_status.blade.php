<li id="status-{{ $status->id }}" class="status">
    <a href="{{ route('users.show', $user->id) }}" class="status__left">
        <img src="{{ $user->gravatar() }}" alt="{{ $user->name }}" class="status__gravatar">
    </a>

    <div class="status__right">
        <span class="status__user">
            <a href="{{ route('users.show', $user->id) }}">
                {{ $user->name }}
            </a>
        </span>
        <span class="status__timestamp">
            {{ $status->created_at->diffForHumans() }}
        </span>
        <span class="status__content">
            {{ $status->content }}
        </span>
        @can('destroy', $status)
            <form action="{{ route('statuses.destroy', $status->id) }}" method="POST" class="status__deleform">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger status__delebtn">Delete</button>
            </form>
        @endcan
    </div>
</li>