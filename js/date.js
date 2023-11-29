// import { DateRangePicker } from '@syncfusion/ej2-calendars';
// creates a daterangepicker with format property
// let daterangeObject: DateRangePicker = new DateRangePicker({
//     format:"yyyy-MM-dd",
//     separator: "to",
//     placeholder:"Select Range"

// });
// daterangeObject.appendTo('#element');

// if ($('#ranges').is(':checked')) {
//     options.ranges = {
//       'Today': [moment(), moment()],
//       'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
//       'Last 7 Days': [moment().subtract(6, 'days'), moment()],
//       'Last 30 Days': [moment().subtract(29, 'days'), moment()],
//       'This Month': [moment().startOf('month'), moment().endOf('month')],
//       'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
//     };
//   }

//   if ($('#locale').is(':checked')) {
//     $('#rtl-wrap').show();
//     options.locale = {
//       direction: $('#rtl').is(':checked') ? 'rtl' : 'ltr',
//       format: 'MM/DD/YYYY HH:mm',
//       separator: ' - ',
//       applyLabel: 'Apply',
//       cancelLabel: 'Cancel',
//       fromLabel: 'From',
//       toLabel: 'To',
//       customRangeLabel: 'Custom',
//       daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr','Sa'],
//       monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
//       firstDay: 1
//     };
//   } else {
//     $('#rtl-wrap').hide();
//   }

//   if (!$('#linkedCalendars').is(':checked'))
//     options.linkedCalendars = false;

//   if (!$('#autoUpdateInput').is(':checked'))
//     options.autoUpdateInput = false;

//   if (!$('#showCustomRangeLabel').is(':checked'))
//     options.showCustomRangeLabel = false;

//   if ($('#alwaysShowCalendars').is(':checked'))
//     options.alwaysShowCalendars = true;

//   if ($('#parentEl').val().length)
//     options.parentEl = $('#parentEl').val();

//   if ($('#startDate').val().length) 
//     options.startDate = $('#startDate').val();

//   if ($('#endDate').val().length)
//     options.endDate = $('#endDate').val();
  
//   if ($('#minDate').val().length)
//     options.minDate = $('#minDate').val();

//   if ($('#maxDate').val().length)
//     options.maxDate = $('#maxDate').val();

//   if ($('#opens').val().length && $('#opens').val() != 'right')
//     options.opens = $('#opens').val();

//   if ($('#drops').val().length && $('#drops').val() != 'down')
//     options.drops = $('#drops').val();

//   if ($('#buttonClasses').val().length && $('#buttonClasses').val() != 'btn btn-sm')
//     options.buttonClasses = $('#buttonClasses').val();

//   if ($('#applyClass').val().length && $('#applyClass').val() != 'btn-success')
//     options.applyClass = $('#applyClass').val();

//   if ($('#cancelClass').val().length && $('#cancelClass').val() != 'btn-default')
//     options.cancelClass = $('#cancelClass').val();

//   $('#config-text').val("$('#demo').daterangepicker(" + JSON.stringify(options, null, '    ') + ", function(start, end, label) {\n  console.log(\"New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')\");\n});");

//   $('#config-demo').daterangepicker(options, function(start, end, label) { console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')'); }).click();;