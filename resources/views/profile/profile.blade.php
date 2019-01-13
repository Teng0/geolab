
@extends ('profile.main')

@section("header")
    <ul>
        <li>Main</li>
        <li>Profile</li>
    </ul>
@endsection

@section("sidebar")
    @parent
    <h4>Sidebar profile</h4>
@endsection


@section('main')
    @component('alert')

        <div class="alert-dark">

            @slot('title')
                    Title GOes here
            @endslot
        </div>
        <strong>Whoops!</strong> Something went wrong!
    @endcomponent
@endsection

@section("footer")
    Footer
@endsection




