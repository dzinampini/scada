

<script type="text/javascript" src="js/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    forceParse: 0,
        showMeridian: 1
    });

    $('.form_datetime2').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    forceParse: 0,
        showMeridian: 1
    });
    
  $('.form_date').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0
    });
  $('.form_time').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 1,
    minView: 0,
    maxView: 1,
    forceParse: 0
    });
</script>

<!-- toggle showing of buttons content  -->
<script>
$(document).ready(function(){
    $("#wt").click(function(){
      $("#wt-data").toggle();
    });

    $("#ct").click(function(){
      $("#ct-data").toggle();
    });

    $("#ch").click(function(){
      $("#ch-data").toggle();
    });

    $("#co").click(function(){
      $("#co-data").toggle();
    });
    $("#ws").click(function(){
      $("#ws-data").toggle();
    });
});
</script>

<!-- refresh contents every 1 sec -->
<script type="text/javascript">
    $(document).ready(function(){
      refreshWT();
      refreshCH();
      refreshCO();
      refreshCT();
      refreshWS(); 
    });

    function refreshWT(){
        $('#wt-data').load('_data_wt.php', function(){
           setTimeout(refreshWT, 1000); //changing after every 10seconds
        });
    }

    function refreshCT(){
        $('#ct-data').load('_data_ct.php', function(){
           setTimeout(refreshCT, 1000); //changing after every 10seconds
        });
    }

    function refreshCH(){
        $('#ch-data').load('_data_ch.php', function(){
           setTimeout(refreshCH, 1000); //changing after every 10seconds
        });
    }

    function refreshCO(){
        $('#co-data').load('_data_co.php', function(){
           setTimeout(refreshCO, 1000); //changing after every 10seconds
        });
    }
    function refreshWS(){
        $('#ws-data').load('_data_ws.php', function(){
           setTimeout(refreshWS, 1000); //changing after every 10seconds
        });
    }
</script>

</body>
</html>
