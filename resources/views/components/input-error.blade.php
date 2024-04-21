@props(['messages', 'whereError'])

@if ($messages)
    @if($whereError == 'password' || $whereError == 'mailSingup' || $whereError == 'passwordSingup')
        <div class="negative-Feedback" style="margin-bottom: -4%">
    @else
        <div class="negative-Feedback" style="margin-bottom: -3.8%">
    @endif
        @foreach ((array) $messages as $message)
            <div class="ball-Negative-Feedback"></div>
            <span>{{ $message }}</span>
            <div id="spacer"></div>
        @endforeach
        </div>
@endif
