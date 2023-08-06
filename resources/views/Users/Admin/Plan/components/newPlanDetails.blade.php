<!-- This form included into addClient Blade -->

<!-- Main content -->
<section class="content ">
    <div class="container-fluid">

        <!-- SELECT2 EXAMPLE -->
        <div class="col-lg-6">

        
            <form action="{{ route('admin.addingPlan') }}" method="post">
                @csrf
                <div class="card card-info ">
                    <div class="card-header">
                        <h3 class="card-title">New Plan Details</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            {{-- <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                            </button> --}}
                        </div>
                    </div>



                    <!-- /.card-header -->
                    <div class="card-body">

                        {{-- toastr msg --}}
                        @include('Users.Admin.messages.addMsg')

                        <div class="row">

                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-6 col-12">

                                <div class="form-group">
                                    <label>Name of the Plan</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-list-alt"></i></span>
                                        </div>
                                        <input type="text" placeholder="Plan Name" name="planName" class="form-control">
                                    </div>
                                </div>


                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>Plan Price</label>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa-sharp fa-solid fa-money-bill-1-wave"></i></span>
                                        </div>
                                        <input type="number" name="planPrice" class="form-control" placeholder="Price of the Plan">
                                    </div>
                                    <!-- /.input group -->
                                </div>


                                <div class="form-group">
                                    <label>Plan Months</label>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                        </div>
                                        <input type="number" name="planMonth" class="form-control" placeholder="Months">
                                    </div>
                                    <!-- /.input group -->
                                </div>

                            </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <small class="form-text text-muted text-right">Please check details again.</small>
                        <button type="submit" class="btn btn-warning btn-lg float-right"><b>&nbsp; Save All&nbsp;</b>
                    </div>

                </div>
                <!-- /.card -->
            </form>
        </div>

    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->


@push('specificJs')

{{-- toastr msg --}}
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
