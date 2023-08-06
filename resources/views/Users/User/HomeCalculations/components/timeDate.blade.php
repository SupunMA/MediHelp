<h5>
    <b>Date -
        <?php
        $dt = new DateTime();
        echo $dt->format('Y-m-d | Time - g:i');
        ?>
    </b> 
    
</h5>

<h5>
    {{-- සෑම මසකම<b> 
        <?php
    //get Due date from loan table
        $date = Carbon\Carbon::createFromFormat('Y-m-d', $item->loanDate);
        echo $dueDate = $date->format('d');
        ?>
    </b>දින හෝ ඊට පෙර මුදල් ගෙවිය යුතුයි. --}}
</h5>