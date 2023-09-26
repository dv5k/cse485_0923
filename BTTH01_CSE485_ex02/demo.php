<!DOCTYPE html>
<html>
<head>
  <title>Tempus Dominus DateTimePicker</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/css/tempusdominus-bootstrap-4.min.css">
</head>
<body>
  <div class="container mt-4">
    <label for="datetimepicker">Select Date and Time:</label>
    <div class="input-group date" id="datetimepicker" data-target-input="nearest">
      <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker" />
      <div class="input-group-append" data-target="#datetimepicker" data-toggle="datetimepicker">
        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/js/tempusdominus-bootstrap-4.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#datetimepicker').datetimepicker({
        format: 'YYYY-MM-DD HH:mm:ss',
        icons: {
          time: 'fas fa-clock',
          date: 'fas fa-calendar',
          up: 'fas fa-arrow-up',
          down: 'fas fa-arrow-down',
          previous: 'fas fa-chevron-left',
          next: 'fas fa-chevron-right',
          today: 'fas fa-calendar-day',
          clear: 'fas fa-trash',
          close: 'fas fa-times'
        }
      });
    });
  </script>
</body>
</html>