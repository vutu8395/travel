$(document).ready(function() {
	// Datepicker Popups calender to Choose date.
	$(function() {
		$("#datepicker").datepicker();
		$("#datepicker").datepicker("option", "dateFormat", "dd/mm/yy");
		$("#datepicker-df").datepicker();
		$("#datepicker-df").datepicker("option", "dateFormat", "dd/mm/yy");
	});
});