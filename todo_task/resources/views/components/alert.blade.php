<div>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
    @if(session()->has('error'))
    <div>{{session->get('error')}}</div>
    @elseif(session()->has('message'))
    <div>{{session->get('message')}}</div>
    @endif
</div>