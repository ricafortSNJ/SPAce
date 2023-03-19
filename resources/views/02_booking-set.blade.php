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
  <div class="column">
            <div class="details">
                <div class="mapsNearU">
                    <div class="cardHeader">
                        <form class="jotform-form" action="https://submit.jotform.com/submit/230711579126455" method="post" name="form_230711579126455" id="230711579126455" accept-charset="utf-8" autocomplete="on"><input type="hidden" name="formID" value="230711579126455" /><input type="hidden" id="JWTContainer" value="" /><input type="hidden" id="cardinalOrderNumber" value="" />
                            <div role="main" class="form-all">
                              <div class="form-section page-section">
                                <li id="cid_1" class="form-input-wide" data-type="control_head">
                                  <div class="form-header-group  header-large">
                                    <div class="header-text httac htvam">
                                      <h1 id="header_1" class="form-header" data-component="header">Appointment Booking Form</h1>
                                    </div>
                                  </div>
                                </li>
                                <li class="form-line" data-type="control_appointment" id="id_7"><label class="form-label form-label-top" id="label_7" for="input_7"> Select an Appointment Date </label>
                                  <div id="cid_7" class="form-input-wide" data-layout="full">
                                    <div id="input_7" class="appointmentFieldWrapper jfQuestion-fields"><input class="appointmentFieldInput" name="q7_selectAn[implementation]" value="new" id="input_7implementation" /><input class="appointmentFieldInput " name="q7_selectAn[date]" id="input_7_date" data-timeformat="AM/PM" /><input class="appointmentFieldInput" name="q7_selectAn[duration]" value="60" id="input_7_duration" /><input class="appointmentFieldInput" name="q7_selectAn[timezone]" value="Australia/Sydney (GMT+10:00)" id="input_7_timezone" />
                                      <div class="appointmentField"></div>
                                    </div>
                                  </div>
                                </li>
                                                    
                                <!-- <li class="form-line" data-type="control_textarea" id="id_13"><label class="form-label form-label-top form-label-auto" id="label_13" for="input_13"> Remarks </label>
                                  <div id="cid_13" class="form-input-wide" data-layout="full"> <textarea id="input_13" class="form-textarea" name="q13_anySpecial" style="width:648px;height:163px" data-component="textarea" aria-labelledby="label_13"></textarea> </div>
                                </li> -->
                                <img src="/2_assets/imgs/sitenamedbg.png" style="size: 50%; text-align: center; margin-left: 80px; margin-bottom: 10px;"/>
                                
                                <li class="form-line" data-type="control_button" id="id_2">
                                  <div id="cid_2" class="form-input-wide" data-layout="full">
                                    <div data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField"><button id="input_2" type="submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">Book Now</button></div>
                                  </div>
                                </li>
                                <li style="display:none">Should be Empty: <input type="text" name="website" value="" /></li>
                              </ul>
                            </div>
                            <script>
                              JotForm.showJotFormPowered = "new_footer";
                            </script>
                            <script>
                              JotForm.poweredByText = "Powered by Jotform";
                            </script><input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc" value="230711579126455" />
                            <script type="text/javascript">
                              var all_spc = document.querySelectorAll("form[id='230711579126455'] .si" + "mple" + "_spc");
                              for (var i = 0; i < all_spc.length; i++)
                              {
                                all_spc[i].value = "230711579126455-230711579126455";
                              }
                            </script>
                          </form>

                
            </div>
        <!-- </div> -->
   

      <div class="column">
                <!-- <div class="details"> -->
                    <!-- <div class="mapsNearU"> -->
                        <div class="cardHeader">
                            <form class="jotform-form" action="https://submit.jotform.com/submit/230711579126455" method="post" name="form_230711579126455" id="230711579126455" accept-charset="utf-8" autocomplete="on"><input type="hidden" name="formID" value="230711579126455" /><input type="hidden" id="JWTContainer" value="" /><input type="hidden" id="cardinalOrderNumber" value="" />
                                <div role="main" class="form-all">
                                  <div class="form-section page-section">
                                    <li id="cid_1" class="form-input-wide" data-type="control_head">
                                      <div class="form-header-group  header-large">
                                        <div class="header-text httac htvam">
                                          <h1 id="header_1" class="form-header" data-component="header">Appointment Booking Form</h1>
                                    </div>
                                  </div>

                                          <li class="form-line" data-type="control_radio" id="id_8"><label class="form-label form-label-top form-label-auto" id="label_8" for="input_8"> Available Therapists </label>
                                            <div id="cid_8" class="form-input-wide" data-layout="full">
                                              <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_8" data-component="radio"><span class="form-radio-item"><span class="dragger-item"></span><input type="radio" aria-describedby="label_8" class="form-radio" id="input_8_0" name="q8_availableTherapists" value="Angela" /><label id="label_input_8_0" for="input_8_0">Angela</label></span><span class="form-radio-item"><span class="dragger-item"></span><input type="radio" aria-describedby="label_8" class="form-radio" id="input_8_1" name="q8_availableTherapists" value="Alexandria" /><label id="label_input_8_1" for="input_8_1">Alexandria</label></span><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span><input type="radio" aria-describedby="label_8" class="form-radio" id="input_8_2" name="q8_availableTherapists" value="Viola" /><label id="label_input_8_2" for="input_8_2">Viola</label></span><span class="form-radio-item"><span class="dragger-item"></span><input type="radio" aria-describedby="label_8" class="form-radio" id="input_8_3" name="q8_availableTherapists" value="Kate" /><label id="label_input_8_3" for="input_8_3">Kate</label></span><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span><input type="radio" aria-describedby="label_8" class="form-radio" id="input_8_4" name="q8_availableTherapists" value="Fiona" /><label id="label_input_8_4" for="input_8_4">Fiona</label></span><span class="form-radio-item"><span class="dragger-item"></span><input type="radio" aria-describedby="label_8" class="form-radio" id="input_8_5" name="q8_availableTherapists" value="Karyll" /><label id="label_input_8_5" for="input_8_5">Karyll</label></span>
                                                
                                                <span class="form-radio-item" style="clear:left"><span class="dragger-item"></span><input type="radio" aria-describedby="label_8" class="form-radio" id="input_8_6" name="q8_availableTherapists" value="Michael" /><label id="label_input_8_6" for="input_8_6">Michael</label></span><span class="form-radio-item"><span class="dragger-item"></span><input type="radio" aria-describedby="label_8" class="form-radio" id="input_8_7" name="q8_availableTherapists" value="Minerva" /><label id="label_input_8_7" for="input_8_7">Minerva</label></span>
                                                
                                                <span class="form-radio-item" style="clear:left"><span class="dragger-item"></span><input type="radio" aria-describedby="label_8" class="form-radio" id="input_8_8" name="q8_availableTherapists" value="Jopay" /><label id="label_input_8_8" for="input_8_8">Jopay</label></span>
                                                
                                                <span class="form-radio-item"><span class="dragger-item"></span><input type="radio" aria-describedby="label_8" class="form-radio" id="input_8_9" name="q8_availableTherapists" value="Nina" /><label id="label_input_8_9" for="input_8_9">Nina</label></span><span class="form-radio-item formRadioOther">
                                                
                                                <!-- <input type="radio" class="form-radio-other form-radio" name="q8_availableTherapists" id="other_8" value="other" tabindex="0" aria-label="Random Therapist" /><label id="label_other_8" style="text-indent:0" for="other_8">Random Therapist</label><span id="other_8_input" class="other-input-container" style="display:none"> -->
                                                  
                                                  <input type="text" class="form-radio-other-input form-textbox" name="q8_availableTherapists[other]" data-otherhint="Random Therapist" size="15" id="input_8" data-placeholder="Please type another option here" placeholder="Please type another option here" /></span></span></div>
                                            </div>
                                          </li>
                                          <!-- <li class="form-line" data-type="control_textbox" id="id_15"><label class="form-label form-label-top form-label-auto" id="label_15" for="input_15"> Add-ons </label>
                                            <div id="cid_15" class="form-input-wide" data-layout="half"> <input type="text" id="input_15" name="q15_addons" data-type="input-textbox" class="form-textbox" data-defaultvalue="" style="width:310px" size="310" value="" placeholder="Scented Candle, Extra Towel etc." data-component="textbox" aria-labelledby="label_15" /> </div>
                                          </li> -->

                                          
  <li class="form-line" data-type="control_checkbox" id="id_12"><label class="form-label form-label-top form-label-auto" id="label_12" for="input_12"> Type of Services </label>
    <div id="cid_12" class="form-input-wide" data-layout="full">
      <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_12" data-component="checkbox"><span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_12" class="form-checkbox" id="input_12_0" name="q12_typeOf[]" value="Amma Therapy" /><label id="label_input_12_0" for="input_12_0">Amma Therapy</label></span><span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_12" class="form-checkbox" id="input_12_1" name="q12_typeOf[]" value="Ayurvedic Massage" /><label id="label_input_12_1" for="input_12_1">Ayurvedic Massage</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_12" class="form-checkbox" id="input_12_2" name="q12_typeOf[]" value="Balinese Massage" /><label id="label_input_12_2" for="input_12_2">Balinese Massage</label></span><span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_12" class="form-checkbox" id="input_12_3" name="q12_typeOf[]" value="Belavi" /><label id="label_input_12_3" for="input_12_3">Belavi</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_12" class="form-checkbox" id="input_12_4" name="q12_typeOf[]" value="Body Electric Massage" /><label id="label_input_12_4" for="input_12_4">Body Electric Massage</label></span><span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_12" class="form-checkbox" id="input_12_5" name="q12_typeOf[]" value="Canadian Deep Tissue Muscle Massage" /><label id="label_input_12_5" for="input_12_5">Canadian Deep Tissue Muscle Massage</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_12" class="form-checkbox" id="input_12_6" name="q12_typeOf[]" value="Craniosacral Massage Therapy" />
        
        <!-- <label id="label_input_12_6" for="input_12_6">Craniosacral Massage Therapy</label></span><span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_12" class="form-checkbox" id="input_12_7" name="q12_typeOf[]" value="Esalen Massage" /><label id="label_input_12_7" for="input_12_7">Esalen Massage</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_12" class="form-checkbox" id="input_12_8" name="q12_typeOf[]" value="Five Element Shiatsu" /><label id="label_input_12_8" for="input_12_8">Five Element Shiatsu</label></span><span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_12" class="form-checkbox" id="input_12_9" name="q12_typeOf[]" value="Lomi Lomi" /><label id="label_input_12_9" for="input_12_9">Lomi Lomi</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_12" class="form-checkbox" id="input_12_10" name="q12_typeOf[]" value="Manual Lymphatic Drainage" /><label id="label_input_12_10" for="input_12_10">Manual Lymphatic Drainage</label></span><span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_12" class="form-checkbox" id="input_12_11" name="q12_typeOf[]" value="Pfrimmer Deep Muscle Therapy" /><label id="label_input_12_11" for="input_12_11">Pfrimmer Deep Muscle Therapy</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_12" class="form-checkbox" id="input_12_12" name="q12_typeOf[]" value="Raindrop Technique Massage" /><label id="label_input_12_12" for="input_12_12">Raindrop Technique Massage</label></span><span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_12" class="form-checkbox" id="input_12_13" name="q12_typeOf[]" value="Rolfing" /><label id="label_input_12_13" for="input_12_13">Rolfing</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_12" class="form-checkbox" id="input_12_14" name="q12_typeOf[]" value="Russian Massage" /><label id="label_input_12_14" for="input_12_14">Russian Massage</label></span><span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_12" class="form-checkbox" id="input_12_15" name="q12_typeOf[]" value="Thai Herbal Massage" /><label id="label_input_12_15" for="input_12_15">Thai Herbal Massage</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_12" class="form-checkbox" id="input_12_16" name="q12_typeOf[]" value="Trigger Point Myotherapy Massage" /><label id="label_input_12_16" for="input_12_16">Trigger Point Myotherapy Massage</label></span></div> -->
    </div>
  </li>
  
  <li class="form-line" data-type="control_textarea" id="id_13" style="margin-bottom: 10px;"><label class="form-label form-label-top form-label-auto" id="label_13" for="input_13"> Any Special Instructions </label>
    <div id="cid_13" class="form-input-wide" data-layout="full"> <textarea id="input_13" class="form-textarea" name="q13_anySpecial" style="width:648px;height:194px" data-component="textarea" aria-labelledby="label_13"></textarea> </div>
  </li>
</div>
</div>




    <!-- =========== Scripts =========  -->
    <script src="/2_assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>