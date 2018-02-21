  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>SIGTO - Dashboard</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-dashboard.css" rel="stylesheet"/>
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    
  <script src="assets/js/jquery.min.js" type="text/javascript"></script>
<?php if(isset($_GET["view"]) && $_GET["view"]=="home"):?>
<script src='assets/fullcalendar/moment.min.js'></script>
<script src='assets/fullcalendar/fullcalendar.min.js'></script>
<link href='assets/fullcalendar/fullcalendar.min.css' rel='stylesheet' />
<link href='assets/fullcalendar/fullcalendar.print.css' rel='stylesheet' media='print' />
<?php endif; ?>
<?php
$thejson = null;
$events = ReservationData::getEvery();
foreach ($events as $event) {
    $thejson[] = array("title" => $event->title, "url" => "./?view=editreservation&id=" . $event->id, "start" => $event->date_at . "T" . $event->time_at);
}
?>
<script>
    $(document).ready(function () {

        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            defaultDate: '<?php echo date('Y-m-d'); ?>',
            editable: false,
            eventLimit: true, // allow "more" link when too many events
            events: <?php echo json_encode($thejson); ?>
        });

    });

</script>


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" data-background-color="blue">
                <h4 class="title">Calendario de Citas</h4>
            </div>
            <div class="card-content table-responsive">
                <div id="calendar"></div>
            </div>
        </div>
    </div>
</div>

