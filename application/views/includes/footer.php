          <!--  <script type="text/javascript">
           $("#menu li a").click(function() {
    alert();
    $(this).parent().addClass('selected').siblings().removeClass('selected');

    });

      $("#test111").click(function(){
            alert('dsf');
  $("#show_ang").addClass("show");
});</script> -->


            <footer class="footer">

                <div class="container-fluid">

                     <p class="copyright text-center">

                        &copy;

                        <script>

                            document.write(new Date().getFullYear())

                        </script>

                        <a href="#">IRMA</a></p>

                </div>

            </footer>

        </div>

    </div>

</body>

<!--   Core JS Files   -->

<script src="<?php echo base_url();?>assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>

<script src="<?php echo base_url();?>assets/js/jquery-ui.min.js" type="text/javascript"></script>

<script src="<?php echo base_url();?>assets/js/bootstrap.min.js" type="text/javascript"></script>

<script src="<?php echo base_url();?>assets/js/material.min.js" type="text/javascript"></script>

<script src="<?php echo base_url();?>assets/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>

<!-- Forms Validations Plugin -->

<script src="<?php echo base_url();?>assets/js/jquery.validate.min.js"></script>

<!--  Plugin for Date Time Picker and Full Calendar Plugin-->

<script src="<?php echo base_url();?>assets/js/moment.min.js"></script>

<!--  Charts Plugin -->

<script src="<?php echo base_url();?>assets/js/chartist.min.js"></script>

<!--  Plugin for the Wizard -->

<script src="<?php echo base_url();?>assets/js/jquery.bootstrap-wizard.js"></script>

<!--  Notifications Plugin    -->

<script src="<?php echo base_url();?>assets/js/bootstrap-notify.js"></script>

<!-- DateTimePicker Plugin -->

<script src="<?php echo base_url();?>assets/js/bootstrap-datetimepicker.js"></script>

<!-- Vector Map plugin -->

<script src="<?php echo base_url();?>assets/js/jquery-jvectormap.js"></script>

<!-- Sliders Plugin -->

<script src="<?php echo base_url();?>assets/js/nouislider.min.js"></script>

<!--  Google Maps Plugin    -->

<script src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Select Plugin -->

<script src="<?php echo base_url();?>assets/js/jquery.select-bootstrap.js"></script>

<!--  DataTables.net Plugin    -->

<script src="<?php echo base_url();?>assets/js/jquery.datatables.js"></script>

<!-- Sweet Alert 2 plugin -->

<script src="<?php echo base_url();?>assets/js/sweetalert2.js"></script>

<!--    Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->

<script src="<?php echo base_url();?>assets/js/jasny-bootstrap.min.js"></script>

<!--  Full Calendar Plugin    -->

<script src="<?php echo base_url();?>assets/js/fullcalendar.min.js"></script>

<!-- TagsInput Plugin -->

<script src="<?php echo base_url();?>assets/js/jquery.tagsinput.js"></script>

<!-- Material Dashboard javascript methods -->

<script src="<?php echo base_url();?>assets/js/material-dashboard.js"></script>

<!-- Material Dashboard DEMO methods, don't include it in your project! -->

<script src="<?php echo base_url();?>assets/js/demo.js"></script>

<script type="text/javascript">

    $(document).ready(function() {

        md.initSliders()

        demo.initFormExtendedDatetimepickers();

    });

</script>

<script type="text/javascript">
$(document).ready(function(){
    $(".dropdown, .btn-group").hover(function(){
        var dropdownMenu = $(this).children(".dropdown-menu");
        if(dropdownMenu.is(":visible")){
            dropdownMenu.parent().toggleClass("open");
        }
    });
});     
</script>

<script type="text/javascript">


    $(document).ready(function() {



        // Javascript method's body can be found in assets/js/demos.js

        demo.initDashboardPageCharts();

       // md.initSliders()

        demo.initFormExtendedDatetimepickers();





       // demo.initVectorMap();

    });



    $(document).ready(function() {

        $('#datatables').DataTable({

            "pagingType": "full_numbers",

            "lengthMenu": [

                [10, 25, 50, -1],

                [10, 25, 50, "All"]

            ],

            responsive: true,

            language: {

                search: "_INPUT_",

                searchPlaceholder: "Search records",

            }



        });





        var table = $('#datatables').DataTable();



        // Edit record

        table.on('click', '.edit', function() {

            $tr = $(this).closest('tr');



            var data = table.row($tr).data();

            alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');

        });



        // Delete a record

        table.on('click', '.remove', function(e) {

            $tr = $(this).closest('tr');

            table.row($tr).remove().draw();

            e.preventDefault();

        });



        //Like record

        table.on('click', '.like', function() {

            alert('You clicked on Like button');

        });



        $('.card .material-datatables label').addClass('form-group');

        $(".dropdown").trigger("click");
         $("#menu").trigger("click");
          $("#test111").trigger("click");

    });

  

</script>



</html>



