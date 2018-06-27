<li class="list__item">
    <img src="{{ $user->gravatar() }}" alt="{{ $user->name }}" class="list__gravatar">
    <a href="{{ route('users.show', $user->id) }}" class="list__name">{{ $user->name }}</a>

    @can('destroy', $user)
        <form action="{{ route('users.destroy', $user->id) }}" method="POST">
            @csrf
            @method('DELETE')

            <button class="btn btn-danger delete-btn">Delete</button>
        </form>
    @endcan
</li>