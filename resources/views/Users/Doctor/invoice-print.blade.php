<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <title>MediHelp | {{$viewReportData->AvailableTestName}} Report</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 

   <!-- Style -->
   @include('layouts.adminComponents.lib.Style')

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body onload="delayedPrint();">
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          <i class="fa fa-flask" aria-hidden="true"></i> MediHelp Lab.
          <small class="pull-right">Downloaded Date: {{ date('Y-m-d') }}</small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        From
        <address>
          <strong>MediHelp Lab.</strong><br>
          558,<br>
          Galle Road,<br>
          Kalutara.<br>
          Tel: 034-2030200
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        To
        <address>
          <strong>{{$viewReportData->name}}</strong><br>
          {{$viewReportData->address}}<br>
          Mobile:{{$viewReportData->mobile}}<br>
          Email:{{$viewReportData->email}}
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        <b>Report #{{$viewReportData->rid}}</b><br>
        <br>
        <b>Report ID:</b> {{$viewReportData->rid}}<br>
        
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-xs-12 table-responsive">
        <table class="table table-striped">
          <thead>
          <tr>
            <th>Test ID</th>
            <th>Test</th>
            <th>Normal Range</th>
            <th><b>Result</b></th>
            <th>Status</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td>{{$viewReportData->tid}}</td>
            <td>{{$viewReportData->AvailableTestName}}</td>
            <td>{{$viewReportData->AvailableTestRange}}</td>
            <td>{{$viewReportData->result}}</td>
            <td>{{$viewReportData->status}}</td>
          </tr>
          
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <!-- accepted payments column -->
      <div class="col-xs-6">
        <p class="lead">Summary:</p>
    
        <p class=" well well-sm no-shadow" style="margin-top: 10px;">
          @if ($viewReportData->status == "Normal")
          It's great news! It means that the specific markers or values that were tested fall within the normal range, 
          indicating that there are no immediate concerns based on those particular tests. 
          However, it's important to remember that lab tests are just one part of a larger picture of your health.
          @else
          If your lab test results come back abnormal, it's important not to panic. 
          Abnormal results don't necessarily mean a serious health issue, but they do warrant further investigation and attention.
          @endif

        </p>
      </div>
      <!-- /.col -->
      <div class="col-xs-6">
        <p class="lead">Tested Date: {{$viewReportData->date}}</p>

        
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->

<script>
  function delayedPrint() {
      setTimeout(function() {
          window.print();
      }, 200); // Delay in milliseconds (2000ms = 2 seconds)
  }
  </script>
</body>
</html>
