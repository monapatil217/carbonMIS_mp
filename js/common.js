window.onload = function() {
    // getPercentage();
    abc(); //Make sure the function fires as soon as the page is loaded
    // setTimeout(abc, 6000); //Then set it to run again after ten minutes
}

function validateNumber(e) {
    const pattern = /^[0-9]$/;

    return pattern.test(e.key)
}




function customInputValidator(eleValue, eleName) {
    var flag = 0;
    if (eleValue == "" || eleValue < 0) {
        if (eleName[0] == '#') {
            $(eleName).addClass("is-invalid");

        } else {
            $("input[name=" + eleName + "]").addClass("is-invalid");
        }
        flag--;

    } else {
        if (eleName[0] == '#') {
            $(eleName).removeClass("is-invalid");
        } else {
            $("input[name=" + eleName + "]").removeClass("is-invalid");
        }
    }
    return flag;
}

function getPercentage() {
    var myobj = {};
    var percent;
    var basicId = document.getElementById("basicId").value;
    myobj["basicId"] = basicId;

    $.ajax({
        type: "POST",
        async: false,
        url: "php/getDataPercentage.php",
        contentType: "application/json",
        data: JSON.stringify(myobj),
        success: function(data) {
            var divList = JSON.parse(data);
            $.each(divList, function(index, element) {
                percent = element.value;
            });
        }

    });
    return percent;
}

function abc() {

    var percentFinal = getPercentage();
    var msg = "<div class='progress'>" +
        "<div class='progress-bar' role='progressbar' style='width:" + percentFinal + "% ;' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100'>" + percentFinal + " % </div>" +
        "</div>"
    if (percentFinal != 100) {
        jBoxBottomRightBigNotice("Warning <br> Please Fill the Remaining Data ", msg, "yellow", "600000000");
    } else {
        var msg = "";
        jBoxBottomRightBigNotice("Thank You  <br> Data Successfully Submited ", msg, "green", "4000");
    }


}

function jBoxBottomRightBigNotice(title, msg, color, time) {
    new jBox('Notice', {
        attributes: {
            x: 'right',
            y: 'bottom'
        },
        animation: {
            open: 'slide',
            close: 'zoomIn'
        },
        // responsiveWidth:true,
        width: 300,
        // adjustPosition: true,
        // adjustTracker: true,
        // //maxWidth: 600000,
        // delayOnHover: true,
        // showCountdown: true,
        // closeButton: true,
        closeOnClick: false,
        audio: 'assets/vendor/jbox/audio/beep3',
        autoClose: time,
        color: color,
        title: title,
        content: msg
    });

}
/* <button id="cmd" onclick="CreatePDFfromHTML('eleChart')">Download graph</button> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
    <script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
*/
var doc = new jsPDF();
var specialElementHandlers = {
    '#editor': function(element, renderer) {
        return true;
    }
};

function CreatePDFfromHTML(id) {
    var HTML_Width = $("#" + id).width();
    var HTML_Height = $("#" + id).height();
    var top_left_margin = 15;
    var PDF_Width = HTML_Width + (top_left_margin * 2);
    var PDF_Height = (PDF_Width * 1.5) + (top_left_margin * 2);
    var canvas_image_width = HTML_Width;
    var canvas_image_height = HTML_Height;

    var totalPDFPages = Math.ceil(HTML_Height / PDF_Height) - 1;

    html2canvas($("#" + id)[0]).then(function(canvas) {
        var imgData = canvas.toDataURL("image/jpeg", 1.0);
        var pdf = new jsPDF('p', 'pt', [PDF_Width, PDF_Height]);
        pdf.addImage(imgData, 'JPG', top_left_margin, top_left_margin, canvas_image_width, canvas_image_height);
        for (var i = 1; i <= totalPDFPages; i++) {
            pdf.addPage(PDF_Width, PDF_Height);
            pdf.addImage(imgData, 'JPG', top_left_margin, -(PDF_Height * i) + (top_left_margin * 4), canvas_image_width, canvas_image_height);
        }
        pdf.save("Carbon MIS.pdf");
        $(".html-content").hide();
    });
}

/////AFOLU BAU & intervention data
function aflouData() {
    var myobj = {};
    var basicId = document.getElementById("basicId").value;
    myobj["basicId"] = basicId;

    $.ajax({
        type: "POST",
        async: false,
        url: "php/getAfolu.php",
        contentType: "application/json",
        data: JSON.stringify(myobj),
        success: function(data) {
            // alert("OK");


        }

    });
}