<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link href='../packages/core/main.css' rel='stylesheet' />
<link href='../packages/daygrid/main.css' rel='stylesheet' />
<link href='../packages/timegrid/main.css' rel='stylesheet' />
<link href='../packages/list/main.css' rel='stylesheet' />
<script src='../packages/core/main.js'></script>
<script src='../packages/interaction/main.js'></script>
<script src='../packages/daygrid/main.js'></script>
<script src='../packages/timegrid/main.js'></script>
<script src='../packages/list/main.js'></script>

<?php include('load.php'); ?>

 <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrapmodal.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/moment.js"></script>

  <script src="../vendor/bootstrap/js/bootstrapmodal.js"></script>

<style>

  html, body {
    overflow: hidden; /* don't do scrollbars */
    font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
    font-size: 14px;
  }

  #calendar-container {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
  }

</style>
</head>
<body>
<div id="calendarModal" class="modal fade">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span> <span class="sr-only">close</span></button>
            <h4 id="modalTitle" class="modal-title">aa</h4>
            <div id='modallink'></div>
        </div>
        <div id="modalBody" class="modal-body"> </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
</div>
  <div id='calendar-container'>


    <div id='calendar'></div>

  </div>




<script>

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],

             eventClick:  function(info, jsEvent, view) {
            $('#modalTitle').html(info.event.title);

            $('#modallink').html('<a href="' + info.event.id + '">Link</a>');
            $('#modalBody').html("Time and Date From: "+info.event.start+" <br>Time and Date To: "+ info.event.end);
            $('#calendarModal').modal();
        },
      height: 'parent',
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
      },
      defaultView: 'dayGridMonth',
      defaultDate: new Date(),
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      eventLimit: true, // allow "more" link when too many events
   
      events: <?php echo json_encode($data);  ?>
    });

    calendar.render();
  });

</script>



</body>
</html>
