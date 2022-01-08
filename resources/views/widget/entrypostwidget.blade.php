@isset(\Illuminate\Support\Facades\Auth::user()->id)
<form method="POST" action="{{route('entry.post')}}">
    @csrf
    <div class="form-floating mb-3">
        <textarea class="form-control" name="entryContent" placeholder="Yorumunuzu buraya yazınız" style="height: 100px"></textarea>
        <label for="floatingTextarea2">Yorum</label>
    </div>
    <input type="hidden" name="title_id" id="title_id" value="{{ $title->id }}"/>
    <input type="hidden" name="title_slug" id="title_slug" value="{{ $title->slug }}"/>
    <input type="hidden" name="user_id" id="user_id" value="{{ \Illuminate\Support\Facades\Auth::user()->id }}"/>
    <button type="submit" class="btn btn-primary mb-3">Gönder</button>
</form>
@endisset
