<html>
<body>
@push("script")
    <script src="first.js"/>
@endpush

@push("script")
    <script src="second.js"/>
@endpush

@prepend("script")
    <script src="third.js"/>
@endprepend

@stack("script")
</body>
</html>
