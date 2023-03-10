<div>
    @props(['errors'])

    @if ($errors->any())
        <div class="alert alert-danger " id="msg_fade">
            <strong>Whoops!</strong> {{ __('There were some problems with your input.') }}<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

</div>
