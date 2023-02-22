
<!--/ Feedbacks /-->

@if (session()->has('error' ) && is_string(session()->get('error')))
    <div class="error">

        <p>{!! session()->get('error') !!}</p>
    </div>
@endif

@if (session()->has('warning' ) && is_string(session()->get('warning')))
    <div class="warning">

        <p>{!! session()->get('warning') !!}</p>
    </div>
@endif

@if (session()->has('success' ) && is_string(session()->get('success')))
    <div class="success">

        <p>{!! session()->get('success') !!}</p>
    </div>
@endif

<!--/ End / Feedbacks /-->
