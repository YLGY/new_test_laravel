<form action="{{route('statuses.store')}}" class="weibo" method="POST">
    {{ csrf_field() }}    

    @include('shared._errors')

    <div class="weibo__group">
        <textarea name="content" rows="3" class="weibo__input" placeholder="Say something...">
            {{ old('content') }}
        </textarea>
    </div>
    <button type="submit" class="weibo__submit" class="btn btn-primary float-right">Post</button>
</form>