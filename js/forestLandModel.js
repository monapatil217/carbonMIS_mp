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
var popup1 = document.getElementById('popup-wrapper1');
var btn1 = document.getElementById("popup-btn1");
var span1 = document.getElementById("close1");
btn1.onclick = function () {
    popup1.classList.add('show');
}
span1.onclick = function () {
    popup1.classList.remove('show');
}

window.onclick = function (event) {
    if (event.target == popup1) {
        popup1.classList.remove('show');
    }
}
$(document).ready(function () {
    showForestLand();
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
})

function showForestLand() {
    var html = '';

    var basicId = document.getElementById("basicId").value;
    $("#forestLand").empty();

    var myobj = {};
    myobj["type"] = "Forest";
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

                        html = '<div class="row justify-content-center">' +
                            '<div class="col-md-6 col-lg-10 col-xl-9 col-10">' +
                            '<label for="areaForest" class="form-label"> Green Cover </label >' +
                            '<i class="bi-info-circle-fill" data-toggle="tooltip" data-placement="top" title="It is area occupied by bushland, \ngardens, parks,biodiversity corridors, nature reserves,\n street trees and rooftop gardens."></i>' +
                            '<div class="input-group mb-3">' +
                            '<input type="number" id="areaForest" class="form-control" value="' + element1.areaForest + '" placeholder="Area" aria-label="Area" aria-describedby="basic-addon2">' +
                            '<span class="input-group-text" id="basic-addon2">ha</span >' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '<div class="row justify-content-center">' +
                            '<div class="col-md-6 col-lg-10 col-xl-9 col-10">' +
                            '<label for="roundWood" class="form-label"> Annual Timber Harvest </label >' +
                            '<i class="bi-info-circle-fill" data-toggle="tooltip" data-placement="top" title="It is the quantity of timber harvested \n annually in a particular city/region."></i>' +
                            '<div class="input-group mb-3">' +
                            '<input type="number" id="roundWood" name="roundWood" class="form-control" value="' + element1.roundWood + '" placeholder="Annual Rounded Removal" aria-label="Annual Rounded Removal" aria-describedby="basic-addon2">' +
                            '<span class="input-group-text" id="basic-addon2">mᶟ/year </span >' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '<div class="row justify-content-center">' +
                            '<div class="col-md-6 col-lg-10 col-xl-9 col-10">' +
                            '<label for="fuelWood" class="form-label"> Annual Firewood Removal </label >' +
                            '<i class="bi-info-circle-fill" data-toggle="tooltip" data-placement="top" title=" It is the quantity of firewood harvested annually\n in a particular city/region."></i>' +
                            '<div class="input-group mb-3">' +
                            '<input type="number" id="fuelWood" name="fuelWood" class="form-control" value="' + element1.fuelWood + '" placeholder="Annual Fuelwood Removal" aria-label="Annual Fuelwood Removal" aria-describedby="basic-addon2">' +
                            '<span class="input-group-text" id="basic-addon2">mᶟ/year </span >' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '<div class="row justify-content-center">' +
                            '<div class="col-md-6 col-lg-10 col-xl-9 col-10">' +
                            '<label for="disturbance" class="form-label"> Forest area affected by Disturbances </label >' +
                            '<div class="input-group mb-3">' +
                            '<input type="number" id="disturbance" name="disturbance" class="form-control" value="' + element1.disturbance + '" placeholder="affected by distrbance" aria-label="affected by distrbance" aria-describedby="basic-addon2">' +
                            '<span class="input-group-text" id="basic-addon2">ha </span >' +
                            '</div>' +
                            '</div>' +
                            '</div>';
                        // + '<div class="row justify-content-center">'
                        // + '<div class="col-md-6 col-lg-10 col-xl-9 col-10">'
                        // + '<label for="organicSo" class="form-label"> Forest area with organic soil </label >'
                        // + '<div class="input-group mb-3">'
                        // + '<input type="text" id="organicSo" name="organicSo" class="form-control" value="' + element1.organicSo + '" placeholder="organic soil" aria-label="organic soil" aria-describedby="basic-addon2">'
                        // + '<span class="input-group-text" id="basic-addon2">ha/year </span >'
                        // + '</div>'
                        // + '</div>'
                        // + '</div>';
                    });
                    // addChart();
                } else {

                    html = '<div class="row justify-content-center">' +
                        '<div class="col-md-6 col-lg-10 col-xl-9 col-10">' +
                        '<label for="areaForest" class="form-label"> Green Cover </label >' +
                        '<i class="bi-info-circle-fill" data-toggle="tooltip" data-placement="top" title="It is area occupied by bushland, \ngardens, parks,biodiversity corridors, nature reserves,\n street trees and rooftop gardens."></i>' +
                        '<div class="input-group mb-3">' +
                        '<input type="number" id="areaForest" class="form-control" placeholder="Area" aria-label="Area" aria-describedby="basic-addon2">' +
                        '<span class="input-group-text" id="basic-addon2">ha </span >' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '<div class="row justify-content-center">' +
                        '<div class="col-md-6 col-lg-10 col-xl-9 col-10">' +
                        '<label for="roundWood" class="form-label"> Annual Timber Harvest </label >' +
                        '<i class="bi-info-circle-fill" data-toggle="tooltip" data-placement="top" title="It is the quantity of timber harvested \n annually in a particular city/region."></i>' +
                        '<div class="input-group mb-3">' +
                        '<input type="number" id="roundWood" name="roundWood" class="form-control" placeholder="Annual Round Wood Removal" aria-label="Annual Round Wood Removal" aria-describedby="basic-addon2">' +
                        '<span class="input-group-text" id="basic-addon2">mᶟ/year </span >' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '<div class="row justify-content-center">' +
                        '<div class="col-md-6 col-lg-10 col-xl-9 col-10">' +
                        '<label for="fuelWood" class="form-label"> Annual Firewood Removal </label >' +
                        '<i class="bi-info-circle-fill" data-toggle="tooltip" data-placement="top" title=" It is the quantity of firewood harvested annually\n in a particular city/region."></i>' +
                        '<div class="input-group mb-3">' +
                        '<input type="number" id="fuelWood" name="fuelWood" class="form-control" placeholder="Annual Fuelwood Removal" aria-label="Annual Fuelwood Removal" aria-describedby="basic-addon2">' +
                        '<span class="input-group-text" id="basic-addon2">mᶟ/year </span >' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '<div class="row justify-content-center">' +
                        '<div class="col-md-6 col-lg-10 col-xl-9 col-10">' +
                        '<label for="disturbance" class="form-label"> Forest Area Affected by Disturbances </label >' +
                        '<div class="input-group mb-3">' +
                        '<input type="number" id="disturbance" name="disturbance" class="form-control" placeholder="Affected by Disturbance" aria-label="Affected by Disturbance" aria-describedby="basic-addon2">' +
                        '<span class="input-group-text" id="basic-addon2">ha </span >' +
                        '</div>' +
                        '</div>' +
                        '</div>';
                    // + '<div class="row justify-content-center">'
                    // + '<div class="col-md-6 col-lg-10 col-xl-9 col-10">'
                    // + '<label for="organicSo" class="form-label"> Forest area with organic soil </label >'
                    // + '<div class="input-group mb-3">'
                    // + '<input type="text" id="organicSo" name="organicSo" class="form-control" placeholder="organic soil" aria-label="organic soil" aria-describedby="basic-addon2">'
                    // + '<span class="input-group-text" id="basic-addon2">sq.km </span >'
                    // + '</div>'
                    // + '</div>'
                    // + '</div>';
                }
            });
        }
    });

    $("#forestLand").append(html);

}

function saveForestData() {

    // window.location.replace("landUSe.php");
    var flag = 0;
    var forestData = {};

    var basicId = document.getElementById("basicId").value;

    var areaForest = document.getElementById("areaForest").value;
    flag += customInputValidator(areaForest, "areaForest");


    var roundWood = document.getElementById("roundWood").value;
    flag += customInputValidator(roundWood, "roundWood");

    if (areaForest < roundWood) {
        alert("filled Data not valide number");
        flag++;
    }

    var fuelWood = document.getElementById("fuelWood").value;
    flag += customInputValidator(fuelWood, "fuelWood");

    if (areaForest < fuelWood) {
        alert("filled Data not valide number");
        flag++;
    }

    var disturbance = document.getElementById("disturbance").value;
    flag += customInputValidator(disturbance, "disturbance");

    // var organicSo = document.getElementById("organicSo").value;


    forestData["basicId"] = basicId;
    forestData["areaForest"] = areaForest;
    forestData["roundWood"] = roundWood;
    forestData["fuelWood"] = fuelWood;
    forestData["disturbance"] = disturbance;
    // forestData["organicSo"] = organicSo;




    if (flag == 0) {
        $.ajax({
            type: "POST",
            async: false,
            url: "php/saveForest.php",
            contentType: "application/json",
            data: JSON.stringify(forestData),
            success: function (data) {
                //  var data1 = JSON.parse(data);
                if (data == "success") {
                    alert("Data Save Succesfuly");
                    addChart();
                    aflouData();
                    // window.location.replace("landUSe.php");
                } else {
                    alert("Data not Save Succesfuly")
                }

            }
        });
    } else {
        alert("Data not Save Succesfuly Please enter valid data")
    }

}

function redirect() {
    window.location.replace("landUSe.php");

}

function showforestLInfo() {
    var div = document.getElementById("moreInfo");
    div.style.display = "block";

    $("#popUpData").empty();
    var html1 = '<div class="row" >'

        + '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto "><center><h5 class="mt-4">Forest Land </h5></center>'

        +
        '<div class="row mt-2 mb-3">' +
        '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">' +
        '<ul style="margin-left: 10px;">' +
        '<li class="popupli">An assessment by the Forest Survey of India (FSI) last year had projected that, by 2030, the carbon stock in forests as well as tree cover was likely to reach 31.87 billion tonnes of CO2 equivalent.</li>'
        // + '<li class="popupli">Globally cotton cultivation accounts for 220 million metric tons of CO2 per year.</li>'
        // + '<li class="popupli">Cropland-based agricultural activities account for 24.17 percent of India’s total methane and 95.84 percent of the total nitrous oxide emission from the agricultural sector.</li>'
        +
        '</ul>'
        // +'<br>Despite its soaring energy needs, India has one of the lowest per capita rates of consumption of power in the world - 734 units as compared to a world average of 2,429 units. </b></p>'
        // +'<center> <a class="my-3" href="http://www.ghgplatform-india.org/emissionestimates-phase2" target="_blank" rel="noopener noreferrer">Reference</a></center>' 
        // +'<center><a class="my-3" href="http://www.technogreen.co.in/Survey/files/Estimates-Energy-National.xlsx" target="_blank" rel="noopener noreferrer">Reference</a></center>'

        +
        '</div> ' +
        '</div>' +
        '</div></div>';
    $("#popUpData").append(html1);
}

///calculation steps
function pop() {
    var div = document.getElementById("mypop");
    div.style.display = "block";


    $("#popUpData1").empty();
    var html1 = '<div class="row" >'

        + '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto "><center><h5 class="mt-4">calculations </h5></center>'

        +
        '<div class="row mt-2 mb-3">' +
        '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 infoFont">' +
        '<ul style="margin-left: 10px;">' +
        '<li class="popupli"> Gain-Loss method is used to estimate the annual change in forest biomass.' +
        '<li class="popupli"> Annual Change in carbon stocks = Annual gain in biomass (∆CG)</br>- Annual decrease in carbon stock due to biomass loss (∆CL)</br>' +
        '∆CG = A ● GTOTAL ● CF</br>' +

        'GTOTAL = mean annual biomass increment </br>' +
        'A= area of land </br>' +
        'CF = carbon fraction of dry matter </br>' +

        '∆CL = Lwood-removals  + Lfuelwood + Ldisturbance </br>' +

        'Lwood-removals = loss due to wood removals </br>' +
        'Lfuelwood = fuel wood gathering </br>' +
        'Ldisturbance = disturbances </br>' +

        '</ul>'
        // + '<center> <a class="my-3" href="http://www.ghgplatform-india.org/emissionestimates-phase2" target="_blank" rel="noopener noreferrer">Reference</a></center>'
        // + '<center><a class="my-3" href="http://www.technogreen.co.in/Survey/files/Estimates-Energy-National.xlsx" target="_blank" rel="noopener noreferrer">Reference</a></center>'
        +
        '</div> ' +
        '</div>' +
        '</div></div>';
    $("#popUpData1").append(html1);
}
/////

function customSelectValidator(eleValue, eleName) {
    var flag = 0;
    var errSelector = ".invalid-feedback";
    if (eleValue == "") {
        if (eleName[0] == "") {
            $(eleName).parent().find(errSelector).addClass("d-block");
        } else {
            $("[name=" + eleName + "]").parent().find(errSelector).addClass("d-block");
        }
        flag--;
    } else {
        if (eleName[0] == '#') {
            $("#" + eleName).parent().find(errSelector).removeClass("d-block");
        } else {
            $("[name=" + eleName + "]").parent().find(errSelector).removeClass("d-block");
        }
    }
    return flag;
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