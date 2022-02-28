

var popup = document.getElementById('popup-wrapper');
var btn = document.getElementById("popup-btn");
var span = document.getElementById("close");
btn.onclick = function () {
    popup.classList.add('show');
}
span.onclick = function () {
    popup.classList.remove('show');
}

window.onclick = function (event) {
    if (event.target == popup) {
        popup.classList.remove('show');
    }
}

$(document).ready(function () {
    showEleInput();
})

function showEleInput() {
    var html = '';

    var basicId = document.getElementById("basicId").value;
    $("#eleInput").empty();

    var myobj = {};
    myobj["type"] = "Electricity";
    myobj["basicId"] = basicId;

    $.ajax({
        type: "POST",
        async: false,
        url: "php/getAllData.php",
        contentType: "application/json",
        data: JSON.stringify(myobj),
        success: function (data) {
            var divList = JSON.parse(data);
            $.each(divList, function (index, element) {
                var check = element.check;

                if (check == "true") {
                    var eledata = element.cData;
                    $.each(eledata, function (index, element1) {

                        html = '<div class="row justify-content-center">'
                            + '   <div class="col-md-6 col-lg-10 col-xl-9 col-10">'
                            + '       <label for="relec" class="form-label"> Residential</label>'
                            + '       <div class="input-group mb-2">'
                            + '           <input type="text" id="relec" name="relec" class="form-control"  value="' + element1.r_elec + '"   placeholder="Residential" aria-label="Residential" aria-describedby="basic-addon2">'
                            + '                <span class="input-group-text" id="basic-addon2">MW/m</span>'
                            + '</div>'
                            + '</div>'
                            + '</div>'

                            + '<div class="row justify-content-center">'
                            + '       <div class="col-md-6 col-lg-10 col-xl-9 col-10">'
                            + '           <label for="celec" class="form-label"> Commercial</label>'
                            + '               <div class="input-group mb-2">'
                            + '                 <input type="text" id="celec" name="celec"  class="form-control"   value="' + element1.c_elec + '"  placeholder="Commercial" aria-label="Commercial" aria-describedby="basic-addon2">'
                            + '         <span class="input-group-text" id="basic-addon2">MW/m</span>'
                            + '</div>'
                            + '</div>'
                            + '</div>'

                            + '<div class="row justify-content-center">'
                            + '              <div class="col-md-6 col-lg-10 col-xl-9 col-10">'
                            + '                   <label for="selec" class="form-label"> Slum area</label>'
                            + '                  <div class="input-group mb-2">'
                            + '                   <input type="text" id="selec" name="selec"  class="form-control"   value="' + element1.s_elec + '"   placeholder="Slum area " aria-label="Slum" aria-describedby="basic-addon2">'
                            + '                       <span class="input-group-text" id="basic-addon2">MW/m</span>'
                            + ' </div>'
                            + '</div>'
                            + '</div>'

                            + '<div class="row justify-content-center">'
                            + '      <div class="col-md-6 col-lg-10 col-xl-9 col-10">'
                            + '          <label for="slelec" class="form-label"> Other</label>'
                            + '          <div class="input-group mb-2">'
                            + '              <input type="text" id="slelec" name="slelec"   class="form-control"   value="' + element1.sl_elec + '"    placeholder="Street light" aria-label="Slum" aria-describedby="basic-addon2">'
                            + '                  <span class="input-group-text" id="basic-addon2">MW/m</span>'
                            + '</div>'
                            + '</div>'
                            + '</div>'
                            ;
                    });
                }
                else {

                    html = '<div class="row justify-content-center">'
                        + '   <div class="col-md-6 col-lg-10 col-xl-9 col-10">'
                        + '       <label for="relec" class="form-label"> Residential</label>'
                        + '       <div class="input-group mb-2">'
                        + '           <input type="text" id="relec" name="relec" class="form-control" placeholder="Residential" aria-label="Residential" aria-describedby="basic-addon2">'
                        + '                <span class="input-group-text" id="basic-addon2">MW/m</span>'
                        + '       </div>'
                        + '        </div>'
                        + '     </div>'

                        + '     <div class="row justify-content-center">'
                        + '       <div class="col-md-6 col-lg-10 col-xl-9 col-10">'
                        + '           <label for="celec" class="form-label"> Commercial</label>'
                        + '               <div class="input-group mb-2">'
                        + '                 <input type="text" id="celec" name="celec"  class="form-control" placeholder="Commercial" aria-label="Commercial" aria-describedby="basic-addon2">'
                        + '         <span class="input-group-text" id="basic-addon2">MW/m</span>'
                        + '   </div>'
                        + '             </div>'
                        + '            </div>'

                        + '           <div class="row justify-content-center">'
                        + '              <div class="col-md-6 col-lg-10 col-xl-9 col-10">'
                        + '                   <label for="selec" class="form-label"> Slum area</label>'
                        + '                  <div class="input-group mb-2">'
                        + '                   <input type="text" id="selec" name="selec"  class="form-control" placeholder="Slum area " aria-label="Slum" aria-describedby="basic-addon2">'
                        + '                       <span class="input-group-text" id="basic-addon2">MW/m</span>'
                        + '  </div>'
                        + '                </div>'
                        + '          </div>'

                        + '  <div class="row justify-content-center">'
                        + '      <div class="col-md-6 col-lg-10 col-xl-9 col-10">'
                        + '          <label for="slelec" class="form-label"> Other</label>'
                        + '          <div class="input-group mb-2">'
                        + '              <input type="text" id="slelec" name="slelec"   class="form-control" placeholder="Street light" aria-label="Slum" aria-describedby="basic-addon2">'
                        + '                  <span class="input-group-text" id="basic-addon2">MW/m</span>'
                        + '    </div>'
                        + '            </div>'
                        + '     </div>'
                        ;
                }
            });
        }
    });

    $("#eleInput").append(html);

}


function saveEleData() {

    var flag = 0;

    var eleData = {};

    var basicId = document.getElementById("basicId").value;

    var relec = document.getElementById("relec").value;

    var celec = document.getElementById("celec").value;

    var selec = document.getElementById("selec").value;

    var slelec = document.getElementById("slelec").value;

    eleData["basicId"] = basicId;
    eleData["r_elec"] = relec;
    eleData["c_elec"] = celec;
    eleData["s_elec"] = selec;
    eleData["sl_elec"] = slelec;

    if (flag == 0) {
        $.ajax({
            type: "POST",
            async: false,
            url: "php/saveElectricity.php",
            contentType: "application/json",
            data: JSON.stringify(eleData),
            success: function (data) {

                if (data == "success") {
                    alert("Data Save Succesfuly");
                    addChart();

                } else {
                    alert("Data not Save Succesfuly")
                }

            }
        });
    }


}




function showEleInfo() {
    var div = document.getElementById("moreInfo");
    div.style.display = "block";

    $("#popUpData").empty();
    var html1 = '<div class="row" >'

        + '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto "><center><h5 class="mt-4">Electricity </h5></center>'

        + '<div class="row mt-2 mb-3">'
        + '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 infoFont">'
        + '<ul style="margin-left: 10px;">'
        + '<li class="popupli"> India is the third largest producer of electricity in the world .</li>'
        + '<li class="popupli"> The national electric grid in India has an installed capacity of 388.134 GW as of 31 August 2021.</li>'
        + '<li class="popupli"> Renewable power plants, which also include large hydroelectric plants, constitute 37% of India' + "'" + 's total installed capacity. </li>'
        + '</ul>'
        + '<center> <a class="my-3" href="http://www.ghgplatform-india.org/emissionestimates-phase2" target="_blank" rel="noopener noreferrer">Reference</a></center>'
        + '<center><a class="my-3" href="http://www.technogreen.co.in/Survey/files/Estimates-Energy-National.xlsx" target="_blank" rel="noopener noreferrer">Reference</a></center>'

        + '</div> '
        + '</div>'
        + '</div></div>';
    $("#popUpData").append(html1);
}

function redirect() {

    window.location.replace("transport.php");

}
