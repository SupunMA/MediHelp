@extends('layouts.userLayout')

@section('content')


<div class="container-fluid">

{{-- toastr msg --}}
    @include('Users.Admin.messages.addMsg')

    {{-- Content --}}
    @include('Users.User.Plans.planCards.cards')

{{-- toastr msg --}}
    @push('specificJs')


<script>
    $('.toastrDefaultError').click(function () {
        toastr.error("Could't Save the Data. Please try again")
    });

    $('.toastrDefaultSuccess').click(function () {
        toastr.success('&#160; Saved Successfully!.&#160;')
    });

</script>

{{-- toastr auto click --}}
<script type="text/javascript">
    $(document).ready(function () {
        $(".toastrDefaultSuccess").click();
        $(".toastrDefaultError").click();
    });

</script>
@endpush
</div>
@endsection

@section('header')
Select Plan
@endsection
