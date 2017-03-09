@if(Session::has('info'))
    <div class="container">
        <div class="alert alert-success">{{ Session::get('info') }}</div>
    </div>
@endif