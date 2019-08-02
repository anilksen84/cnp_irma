
  <table id="" class="table table-striped table-bordered">

  <thead class="cf">

    <tr>

      <th class="th-sm"><?php //echo $this->lang->line('PINAKAS_AT');?>Projection
      </th>

      <th class="th-sm"><?php //echo $this->lang->line('ONOMA');?>Projection Years
      </th>
      <th class="th-sm"><?php //echo $this->lang->line('ONOMA');?>Policyholder Age
      </th>

      <th class="th-sm"><?php //echo $this->lang->line('EPONIMO');?> Avg Projected Salary

      </th> <th class="th-sm"><?php //echo $this->lang->line('EMAIL');?>Avg Projected Units      
      </th>

    </tr>

  </thead>

  <tbody>

  <?php if(!empty($result)){ 

  //  print_r($customer);

  foreach($result as $cus) { ?>

    <tr>

      <td data-title="ID"><?php echo $cus->pro_no;?></td>

      <td data-title="Name"><?php echo $cus->pro_year;?></td>

      <td data-title="Name"><?php echo $cus->age;?></td>

      <td data-title="Surname"><?php echo $cus->salary;?></td>

      <td data-title="Email"><?php echo $cus->avg_unit;?></td>
     
    </tr>



    <?php } } ?>

  

  </tbody>

</table>

