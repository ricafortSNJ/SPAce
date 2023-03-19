<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
    integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
    crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
    integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
    crossorigin=""></script>

    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">


    @include("layouts/01_head")
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="/2_assets/css/appointment.css">


    <style type="text/css">@media print{.form-section{display:inline!important}.form-pagebreak{display:none!important}.form-section-closed{height:auto!important}.page-section{position:initial!important}}</style>
    <link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?v=3.3.40087&themeRevisionID=5f30e2a790832f3e96009402"/>
    <link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/css/styles/payment/payment_styles.css?3.3.40087" />
    <link type="text/css" rel="stylesheet" href="https://cdn03.jotfor.ms/css/styles/payment/payment_feature.css?3.3.40087" />
    <style type="text/css" id="form-designer-style">
    /* Injected CSS Code */
    *,
*:after,
*:before {
  box-sizing: border-box;
}
.form-all {
  font-family: "Inter", sans-serif;
}
.main .jotform-form {
  width: 100%;
  padding: 0 3%;
}
.form-all {
  display: flex;
  flex-direction: column;
  width: 100%;
  max-width: 752px;
}
.form-line-active {
  background-color: #4f5b77 !important;
}
.form-all {
  font-size: 16px;
}
li.form-line {
  margin-top: 28px;
  margin-bottom: 28px;
}
.form-line {
  padding: 12px 10px;
}
.supernova .form-all,
.form-all {
  border-radius: 20px;
}
.form-section:first-child {
  border-radius: 20px 20px 0 0;
}
.form-section:last-child {
  border-radius: 0 0 20px 20px;
}
.form-section {
  padding: 0px 38px;
}
.form-textbox,
.form-textarea,
li[data-type=control_fileupload] .qq-upload-button,
.signature-wrapper {
  color: #222222;
}
.form-textbox,
.form-textarea,
.form-radio-other-input,
.form-checkbox-other-input,
.form-captcha input,
.form-spinner input {
  background-color: #ffffff;
}
.form-line-column {
  width: calc(50% - 8px);
}
.form-checkbox-item label,
.form-checkbox-item span,
.form-radio-item label,
.form-radio-item span {
  color: #3e677c;
}
.form-radio-item,
.form-checkbox-item {
  padding-bottom: 0px !important;
}
.form-radio-item:last-child,
.form-checkbox-item:last-child {
  padding-bottom: 0;
}
.form-single-column .form-checkbox-item,
.form-single-column .form-radio-item {
  width: 100%;
}
.form-checkbox-item .editor-container div,
.form-radio-item .editor-container div {
  position: relative;
}
.form-checkbox-item .editor-container div:before,
.form-radio-item .editor-container div:before {
  display: inline-block;
  vertical-align: middle;
  left: 0;
  width: 20px;
  height: 20px;
}
.submit-button {
  font-size: 16px;
  font-weight: normal;
  font-family: inherit;
  border: none;
  border-width: 2px;
  border-style: solid;
  border-color: #2d4b5a;
}
.submit-button {
  min-width: 180px;
}
li[data-type="control_button"] .form-submit-button {
  color: #ffffff;
  background-color: #2d4b5a;
  background-image: none;
  box-shadow: none;
  text-shadow: none;
}
li[data-type="control_button"] .form-submit-button:hover {
  background-color: #0b1216;
}
li[data-type="control_button"] button.jf-form-buttons.form-sacl-button,
li[data-type="control_button"] button.jf-form-buttons.form-submit-print {
  color: #2d4b5a;
  border-color: #2d4b5a;
  background-image: none;
  background-color: #fff;
}
li[data-type="control_button"] button.jf-form-buttons.form-sacl-button:hover,
li[data-type="control_button"] button.jf-form-buttons.form-submit-print:hover {
  background-color: #0b1216;
  color: #fff;
}
li[data-type="control_button"] button.jf-form-buttons.form-pagebreak-back {
  background-image: none;
  background-color: #0b1216;
  box-shadow: none;
  text-shadow: none;
}
li[data-type="control_button"] button.jf-form-buttons.form-pagebreak-back:hover {
  background-color: #000000;
  color: #fff;
}
.form-all .form-pagebreak-back,
.form-all .form-pagebreak-next {
  font-family: "Inter", sans-serif;
  font-size: 16px;
  font-weight: normal;
}
.form-all .form-pagebreak-back,
.form-all .form-pagebreak-next {
  min-width: 128px;
}
li[data-type="control_image"] div {
  text-align: left;
}
li[data-type="control_image"] img {
  border: none;
  border-width: 0px !important;
  border-style: solid !important;
  border-color: false !important;
}
.supernova {
  height: 100%;
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: center top;
  background-repeat: repeat;
}
.supernova {
  background-image: none;
}
#stage {
  background-image: none;
}
/* | */
.form-all {
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: center top;
  background-repeat: repeat;
}
.form-header-group {
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: center top;
}
.header-large h1.form-header {
  font-size: 2em;
}
.header-large h2.form-header {
  font-size: 1.5em;
}
.header-large h3.form-header {
  font-size: 1.17em;
}
.header-large h1 + .form-subHeader {
  font-size: 1em;
}
.header-large h2 + .form-subHeader {
  font-size: .875em;
}
.header-large h3 + .form-subHeader {
  font-size: .75em;
}
.header-default h1.form-header {
  font-size: 2em;
}
.header-default h2.form-header {
  font-size: 1.5em;
}
.header-default h3.form-header {
  font-size: 1.17em;
}
.header-default h1 + .form-subHeader {
  font-size: 1em;
}
.header-default h2 + .form-subHeader {
  font-size: .875em;
}
.header-default h3 + .form-subHeader {
  font-size: .75em;
}
.header-small h1.form-header {
  font-size: 2em;
}
.header-small h2.form-header {
  font-size: 1.5em;
}
.header-small h3.form-header {
  font-size: 1.17em;
}
.header-small h1 + .form-subHeader {
  font-size: 1em;
}
.header-small h2 + .form-subHeader {
  font-size: .875em;
}
.header-small h3 + .form-subHeader {
  font-size: .75em;
}
.form-header-group {
  text-align: left;
}
div.form-header-group.header-large,
div.form-header-group.hasImage {
  margin: 0px -38px;
}
div.form-header-group.header-large,
div.form-header-group.hasImage {
  padding: 40px 52px;
}
.form-header-group .form-header,
.form-header-group .form-subHeader {
  color: 0;
}
.form-line-error {
  overflow: hidden;
  -webkit-transition-property: none;
  -moz-transition-property: none;
  -ms-transition-property: none;
  -o-transition-property: none;
  transition-property: none;
  -webkit-transition-duration: 0.3s;
  -moz-transition-duration: 0.3s;
  -ms-transition-duration: 0.3s;
  -o-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-timing-function: ease;
  -moz-transition-timing-function: ease;
  -ms-transition-timing-function: ease;
  -o-transition-timing-function: ease;
  transition-timing-function: ease;
  background-color: #642733;
}
.form-line-error .form-error-message {
  background-color: #f23a3c;
  clear: both;
  float: none;
}
.form-line-error .form-error-message .form-error-arrow {
  border-bottom-color: #f23a3c;
}
.form-line-error input:not(#coupon-input),
.form-line-error textarea,
.form-line-error .form-validation-error {
  border: 1px solid #f23a3c;
  box-shadow: 0 0 3px #f23a3c;
}
.supernova {
  background-color: #dca56a;
}
.supernova body {
  background-color: transparent;
}
.supernova .form-all,
.form-all {
  background-color: #dca56a;
}
.form-textbox,
.form-textarea,
.form-radio-other-input,
.form-checkbox-other-input,
.form-captcha input,
.form-spinner input {
  background-color: #ffffff;
}
.form-matrix-table tr {
  border-color: #d28c41;
}
.form-matrix-table tr:nth-child(2n) {
  background-color: #d79955;
}
.form-all {
  color: #2d4b5a;
}
.form-label-top,
.form-label-left,
.form-label-right,
.form-html {
  color: #2d4b5a;
}
.form-line-error {
  overflow: hidden;
  -webkit-transition-property: none;
  -moz-transition-property: none;
  -ms-transition-property: none;
  -o-transition-property: none;
  transition-property: none;
  -webkit-transition-duration: 0.3s;
  -moz-transition-duration: 0.3s;
  -ms-transition-duration: 0.3s;
  -o-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-timing-function: ease;
  -moz-transition-timing-function: ease;
  -ms-transition-timing-function: ease;
  -o-transition-timing-function: ease;
  transition-timing-function: ease;
  background-color: #642733;
}
.form-header-group .form-header,
.form-header-group .form-subHeader {
  color: 0;
}

/*__INSPECT_SEPERATOR__*/
.calendarDay.isSelected.isActive {
    background-color : #2d4b5a;
}

.calendarDay {
    background-color : #2d4b5a;
    color : #fff;
}

.appointmentSlot.slot {
    background-color : #2d4b5a;
    color : #dca56a;
}

.appointmentDayPickerButton.prev {
    background-color : #2d4b5a;
    color : #fff;
}

.appointmentDayPickerButton.next {
    background-color : #2d4b5a;
    color : #fff;
}

.form-radio-item label {
    color : #fff;
}

.form-checkbox-item label {
    color : #fff;
}

.form-sub-label {
    color : #fff;
}

.appointmentFieldRow.forSelectedDate {
    background-color : #2d4b5a;
    color : #fff;
}

.appointmentSlot.slot.active {
    background-color : #dca56a;
    color : #fff;
}

.form-header {
    color : #2d4b5a;
}

@media (max-width: 20px) {
  img {
    max-width: 30%;
  }
}

img {
  max-width: 75%;
  height: auto;
}

* {
  font-family: "Poppins", sans-serif;
 
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.navigation {
  /* font-size: 1.3rem; */
  color: #2d4b5a !important;
}
    /* Injected CSS Code */
</style>

<script src="https://cdn01.jotfor.ms/static/prototype.forms.js?3.3.40087" type="text/javascript"></script>
<script src="https://cdn02.jotfor.ms/static/jotform.forms.js?3.3.40087" type="text/javascript"></script>
<script src="https://cdn03.jotfor.ms/js/vendor/jquery-1.8.0.min.js?v=3.3.40087" type="text/javascript"></script>
<script defer src="https://cdn01.jotfor.ms/js/vendor/maskedinput.min.js?v=3.3.40087" type="text/javascript"></script>
<script defer src="https://cdn02.jotfor.ms/js/vendor/jquery.maskedinput.min.js?v=3.3.40087" type="text/javascript"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/punycode/1.4.1/punycode.js"></script>
<script src="https://cdn03.jotfor.ms/s/umd/c5cf966c651/for-appointment-field.js?v=3.3.40087" type="text/javascript"></script>
<script type="text/javascript">	JotForm.newDefaultTheme = true;
	JotForm.extendsNewTheme = false;
	JotForm.singleProduct = true;
	JotForm.newPaymentUIForNewCreatedForms = true;
	JotForm.newPaymentUI = true;
	JotForm.clearFieldOnHide="disable";
	JotForm.submitError="jumpToFirstError";

	JotForm.init(function(){
	/*INIT-START*/

    JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
    JotForm.appointmentCalendarDays = ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
    JotForm.calendarOther = "Today";
    window.initializeAppointment({"text":{"text":"Question","value":"Select an Appointment Date"},"labelAlign":{"text":"Label Align","value":"Top","dropdown":[["Auto","Auto"],["Left","Left"],["Right","Right"],["Top","Top"]]},"required":{"text":"Required","value":"No","dropdown":[["No","No"],["Yes","Yes"]]},"description":{"text":"Hover Text","value":"","textarea":true},"slotDuration":{"text":"Slot Duration","value":"60","dropdown":[[15,"15 min"],[30,"30 min"],[45,"45 min"],[60,"60 min"],["custom","Custom min"]],"hint":"Select how long each slot will be."},"startDate":{"text":"Start Date","value":""},"endDate":{"text":"End Date","value":""},"intervals":{"text":"Intervals","value":[{"from":"09:00","to":"17:00","days":["Mon","Tue","Wed","Thu","Fri"]}],"hint":"The hours will be applied to the selected days and repeated."},"useBlockout":{"text":"Blockout Custom Dates","value":"No","dropdown":[["No","No"],["Yes","Yes"]],"hint":"Disable certain date(s) in the calendar."},"blockoutDates":{"text":"Blockout dates","value":[{"startDate":"","endDate":""}]},"useLunchBreak":{"text":"Lunch Time","value":"Yes","dropdown":[["No","No"],["Yes","Yes"]],"hint":"Enable lunchtime in the calendar."},"lunchBreak":{"text":"Lunchtime hours","value":[{"from":"12:00","to":"14:00"}]},"timezone":{"text":"Timezone","value":"Australia/Sydney (GMT+10:00)"},"timeFormat":{"text":"Time Format","value":"AM/PM","dropdown":[["24 Hour","24 Hour"],["AM/PM","AM/PM"]],"icon":"images/blank.gif","iconClassName":"toolbar-time_format_24"},"months":{"value":["January","February","March","April","May","June","July","August","September","October","November","December"],"hidden":true},"days":{"value":["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],"hidden":true},"startWeekOn":{"text":"Start Week On","value":"Sunday","dropdown":[["Monday","Monday"],["Sunday","Sunday"]],"toolbar":false},"rollingDays":{"text":"Rolling Days","value":"","toolbar":false},"prevMonthButtonText":{"text":"Previous month","value":""},"nextMonthButtonText":{"text":"Next month","value":""},"prevYearButtonText":{"text":"Previous year","value":""},"nextYearButtonText":{"text":"Next year","value":""},"prevDayButtonText":{"text":"Previous day","value":""},"nextDayButtonText":{"text":"Next day","value":""},"appointmentType":{"hidden":true,"value":"single"},"dateFormat":{"hidden":true,"value":"mm/dd/yyyy"},"maxAttendee":{"hidden":true,"value":"5"},"minScheduleNotice":{"hidden":true,"value":"3"},"name":{"hidden":true,"value":"selectAn"},"order":{"hidden":true,"value":"3"},"qid":{"toolbar":false,"value":"input_7"},"type":{"hidden":true,"value":"control_appointment"},"id":{"toolbar":false,"value":"7"},"qname":{"toolbar":false,"value":"q7_selectAn"},"cdnconfig":{"CDN":"https://cdn.jotfor.ms/"},"passive":false,"formProperties":{"products":[{"customPrice":"","customPriceSource":"0","description":"Please enter a short description.","hasExpandedOption":"","hasQuantity":"1","hasSpecialPricing":"","icon":"","images":"[\"https://cdn.jotfor.ms/assets/img/payments/sample_image-3.png\",\"https://cdn.jotfor.ms/assets/img/payments/sample_image-2.png\"]","name":"Product Name","options":[{"type":"quantity","properties":"1\n2\n3\n4\n5\n6\n7\n8\n9\n10","name":"Quantity","defaultQuantity":"","specialPricing":false,"specialPrices":"","expanded":false}],"period":"Monthly","pid":"1000","price":"10","recurringtimes":"No Limit","required":"","selected":"","setupfee":"","showSubtotal":"0","trial":""}],"highlightLine":"Enabled","coupons":false,"useStripeCoupons":false,"taxes":false,"comparePaymentForm":"","paymentListSettings":false,"newPaymentUIForNewCreatedForms":"Yes","formBackground":"#2C3345","newAppointment":false},"formID":230711579126455,"isPaymentForm":false,"isOpenedInPortal":false,"isCheckoutForm":false,"themeVersion":"v2"});
  if (window.JotForm && JotForm.accessible) $('input_15').setAttribute('tabindex',0);
      setTimeout(function() {
          $('input_15').hint('Scented Candle, Extra Towel etc.');
       }, 20);
if (window.JotForm && JotForm.accessible) $('input_13').setAttribute('tabindex',0);
      JotForm.setPhoneMaskingValidator( 'input_5_full', '(###) ###-####' );
      JotForm.alterTexts(undefined);
      JotForm.alterTexts({"couponApply":"Apply","couponBlank":"Please enter a coupon.","couponChange":"","couponEnter":"Enter coupon","couponExpired":"Coupon is expired. Please try another one.","couponInvalid":"Coupon is invalid.","couponValid":"Coupon is valid.","shippingShipping":"Shipping","taxTax":"Tax","totalSubtotal":"Subtotal","totalTotal":"Total"}, true);
	/*INIT-END*/
	});

   JotForm.prepareCalculationsOnTheFly([null,{"name":"carService","qid":"1","text":"Car Service Booking Form","type":"control_head"},{"name":"submit2","qid":"2","text":"Book Now","type":"control_button"},{"name":"name","qid":"3","text":"Name","type":"control_fullname"},{"name":"email","qid":"4","subLabel":"example@example.com","text":"Email","type":"control_email"},{"name":"phoneNumber","qid":"5","text":"Phone Number","type":"control_phone"},{"name":"address","qid":"6","text":"Address","type":"control_address"},{"name":"selectAn","qid":"7","text":"Select an Appointment Date","type":"control_appointment"},{"name":"availableTherapists","qid":"8","text":"Available Therapists","type":"control_radio"},null,null,null,{"name":"typeOf","qid":"12","text":"Type of Services","type":"control_checkbox"},{"name":"anySpecial","qid":"13","text":"Any Special Instructions","type":"control_textarea"},{"name":"customerInformation","qid":"14","text":"Customer Information","type":"control_head"},{"name":"addons","qid":"15","subLabel":"","text":"Add-ons","type":"control_textbox"},{"name":"bookingRequest","qid":"16","text":"Booking Request No.","type":"control_autoincrement"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,{"name":"carService","qid":"1","text":"Car Service Booking Form","type":"control_head"},{"name":"submit2","qid":"2","text":"Book Now","type":"control_button"},{"name":"name","qid":"3","text":"Name","type":"control_fullname"},{"name":"email","qid":"4","subLabel":"example@example.com","text":"Email","type":"control_email"},{"name":"phoneNumber","qid":"5","text":"Phone Number","type":"control_phone"},{"name":"address","qid":"6","text":"Address","type":"control_address"},{"name":"selectAn","qid":"7","text":"Select an Appointment Date","type":"control_appointment"},{"name":"availableTherapists","qid":"8","text":"Available Therapists","type":"control_radio"},null,null,null,{"name":"typeOf","qid":"12","text":"Type of Services","type":"control_checkbox"},{"name":"anySpecial","qid":"13","text":"Any Special Instructions","type":"control_textarea"},{"name":"customerInformation","qid":"14","text":"Customer Information","type":"control_head"},{"name":"addons","qid":"15","subLabel":"","text":"Add-ons","type":"control_textbox"},{"name":"bookingRequest","qid":"16","text":"Booking Request No.","type":"control_autoincrement"}]);}, 20); 
</script>

</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container-fluid">
        
        
    @include("layouts/02_nav")

        <!-- ========================= Main ==================== -->
        <div class="main">
            
        @include("layouts/02_topbar")

            

            <!-- ================ Map ================= -->
<div class="card-container">
<div class="p-5 my-5" style="background: rgba(33, 30, 28, 0.7);">
                    <h1 class="text-white text-center mb-4">Make Appointment</h1>
                    <form action="/setBooking" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="date" id="date" data-target-input="nearest">
                                        <input type="text" name="date" class="form-control bg-transparent p-4 datetimepicker-input" placeholder="Select Date" data-target="#date" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="time" id="time" data-target-input="nearest">
                                        <input type="text" name="time" class="form-control bg-transparent p-4 datetimepicker-input" placeholder="Select Time" data-target="#time" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @foreach ($professional as $p)
                        <input type="hidden" name="professional_id" value="{{$p->professional_id}}">
                        @endforeach
                        <div class="form-row">
                            <div class="col-sm-6">
                                <button class="btn btn-primary btn-block" style="height: 47px;">Make Appointment</button>
                            </div>
                        </div>
                    </form>
                </div>
</div>




    <!-- =========== Scripts =========  -->
    <script src="/2_assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    

    @include("layouts/01_end")
</body>

</html>