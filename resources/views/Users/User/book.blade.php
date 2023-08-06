<div class="card text-center col-xl-12 col-lg-12 col-md-12 col-sm-12">
  <div class="card-header">
    @foreach ($plans as $plan)
      @if ($plan->planID === Auth::user()->refPlan)
        <h3 class="text-danger">Selected Plan is <b>{{ $plan->planName }}</b> </h3> 
          
        @php
        //Get plan Months
            $months =$plan->planMonth;
        @endphp

      @endif
    @endforeach

   
  </div>

  @if (isset($payment) && $payment->confirm === 1)
  <?php

  //Months got above foreach loop
  $paidD = new DateTime($payment->payDate);
  $expD = new DateTime($payment->payDate);
  $expD -> add(new DateInterval('P'.$months.'M'));
      
  ?>
    
  <div class="card-body text-left">
    <h5 class="">Booking a Slot</h5>
    <form action="{{route('CustomerBookingTime')}}" method="post">
      @csrf
      <div class="row">
        
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
        
            <p class="form-text text-muted text-left">Select a Date</p>
            {{-- Max date validate when select date --}}
            <input type="date" name="date" class="form-control" id="dateInput" max= "<?php echo $expD->format('Y-m-d'); ?>" required>
        
        </div>

        
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
        
            <p class="form-text text-muted text-left">Select a Time Slot</p>
            <select class="form-control select2bs4" name="slotID" id="TimeSelect" required></select>
        
        </div>

        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
        
          <p class="form-text text-muted text-left">Select a Coach</p>
          <select name="coachID" class="form-control select2bs4" id="CoachSelect" required></select>
      
        </div>

      </div>
      <br>

      <button type="submit" class="btn btn-primary" >Book Now</button>
    </form>
      

       
    </div>
    <div class="card-footer text-muted">
        Plan Activated date : {{$payment->payDate}}  |  Expiration date : 
        <?php
        //Months got above foreach loop
        echo $expD->format('Y-m-d');
        ?>
    </div>
  </div>

  @elseif(isset($payment) && $payment->confirm === 0)
  <div class="card-body text-center">
    <h5 class="">Your Payment has not confirmed yet. Please wait.! </h5>
  </div>

  @elseif (isset($payment) && $payment->confirm === 2)
  <div class="card-body text-center">
    <h5 class="">Your Payment was Declined.</h5>
  </div>
  @endif

</div>




<script>

//////// Coaches Mapping/////////////

  var coachData = {!! json_encode($coaches) !!};
  var slotData = {!! json_encode($slots) !!};
  var taskData = {!! json_encode($tasks) !!};
   

//Adding data select input using foreach

  var input = document.getElementById("dateInput");
  var CoachSelect = document.getElementById("CoachSelect");
  var TimeSelect = document.getElementById("TimeSelect");


  input.addEventListener("change", function() {
    // Get the selected date
    
  var date = new Date(input.value);
  var selectedDate = date.getDay();
  var selectedDate = selectedDate + 1;

    
  //clear select
  TimeSelect.innerHTML = "";
  CoachSelect.innerHTML = "";



    // Use forEach to loop through the array
  coachData.forEach(function(coach) {
    let wdays = coach.wdays;
    let daysArr = wdays.toString().split('').map(Number);

    daysArr.forEach(function(eCoach){
    
      if(eCoach === selectedDate) {
        // Create a new option element
      var option = document.createElement("option");
      // Set the value and text of the option
      option.value = coach.id;
      option.text = coach.name;
      // Append the option to the select element
      CoachSelect.appendChild(option);
    
      }
      

    });
  });

   ///////// Time slots Mapping///////////////////

  let myArray = [];
  let removeArray = [];

  slotData.forEach(function(slot) {
    var optionSloat = document.createElement("option");
    // Set the value and text of the option
    optionSloat.value = slot.slotID;
    optionSloat.text = slot.slotTime;
    // Append the option to the select element
    TimeSelect.appendChild(optionSloat);
        })

  slotData.forEach(function(slot) {
     
    taskData.forEach(function(timeTask) {
          
      if(slot.slotID === timeTask.slotID && input.value === timeTask.date)
          {
          
            myArray.push(slot.slotID);
          

            let count = myArray.reduce((acc, val) => {
              return val === slot.slotID ? acc + 1 : acc;
            }, 0);

            
            if(count <= slot.peopleAmount){

              var optionSloat = document.createElement("option");
              // Set the value and text of the option
              optionSloat.value = slot.slotID;
              optionSloat.text = slot.slotTime;
              // Append the option to the select element
              TimeSelect.appendChild(optionSloat);

            }else{
              
              removeArray.push(slot.slotID);

              let count2 = removeArray.reduce((acc, val) => {
              return val === slot.slotID ? acc + 1 : acc;
              }, 0);

              for (let i = 0; i < count2; i++) {
               
                TimeSelect.options.remove(slot.slotID - 1);
                console.log(count2);
                
                }

             
            }
          
          }
          
         

        
        })

      
    })
////// Remove Duplicate Values////////////

    // Create an empty array to store unique options
    let uniqueOptions = [];

    // Loop through all options in the select element
    for (let i = 0; i < TimeSelect.options.length; i++) {
      // Check if the option is already in the unique options array
      let optionExists = uniqueOptions.filter(function (option) {
        return option.value === TimeSelect.options[i].value;
      });

      // If the option does not exist in the array, add it
      if (optionExists.length === 0) {
        uniqueOptions.push(TimeSelect.options[i]);
      }
    }

    // Clear the select element
    TimeSelect.options.length = 0;

    // Loop through the unique options array
    for (let option of uniqueOptions) {
      // Add the option to the select element
      TimeSelect.add(option);
    }

  });


</script>

