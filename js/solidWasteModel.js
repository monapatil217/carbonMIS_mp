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
/////
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
////
$(document).ready(function () {
    showMSWInput();
    showBMWInput();
    // showHWInput();
})
var aDumpingYard = 0;

function showMSWInput() {
    var html = '';

    var basicId = document.getElementById("basicId").value;
    $("#mswInput").empty();

    var myobj = {};
    myobj["type"] = "MSW";
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
                        var n_yard = element1.n_yard;
                        var yardData = element1.YardData;
                        html = '<div class="row">' +
                            '<div class="col-md-6 col-lg-4 col-xl-4 col-10 mt-3">' +
                            '<label for="generatedM" class="form-label">Generation </label>' +
                            '<div class="input-group mb-2">' +
                            ' <input type="number" id="generatedM" name="generatedM" value="' + element1.msw_gen + '" class="form-control" placeholder="Generation" aria-label="Generation" aria-describedby="basic-addon2">' +
                            ' <span class="input-group-text" id="basic-addon-2">MTD</span>' +
                            ' </div>' +
                            ' </div>'

                            +
                            ' <div class="col-md-6 col-lg-4 col-xl-4 col-10 mt-3">' +
                            ' <label for="collectionM" class="form-label"> Collection</label>' +
                            ' <div class="input-group mb-2">' +
                            ' <input type="number" id="collectionM" name="collectionM" value="' + element1.msw_col + '" class="form-control" placeholder="Collection" aria-label="Collection" aria-describedby="basic-addon2">' +
                            '  <span class="input-group-text" id="basic-addon-2">MTD</span>' +
                            ' </div>' +
                            ' </div>'

                            +
                            ' <div class="col-md-6 col-lg-6 col-xl-4 col-10 mt-3">' +
                            '  <label for="treatment" class="form-label">Treatment</label>' +
                            ' <div class="form-group col-md-2  col-xl-10">' +
                            ' <select class="form-control" id="treatmentM" onchange="addTreatmentType();" >' +
                            ' <option disabled selected> Treatment Type</option>' +
                            ' <option value="Composting">Composting</option>' +
                            '<option value="Landfill">Landfill</option>' +
                            '<option value="Incineration">Incineration</option>' +
                            '</select >' +
                            '</div >' +
                            '</div>' +
                            '</div>' +
                            '<div class="row" id="comp">'

                            +
                            '<div class="row justify-content-center">' +
                            '<div class="col-md-6 col-lg-10 col-xl-3 col-10">' +
                            '<h4></h4>' +
                            '</div>' +
                            '</div>'

                            +
                            '</div>'

                            +
                            '<div class="row justify-content-left" >' +
                            '<div class="col-md-6 col-lg-10 col-xl-3 col-10">' +
                            '<button  id="dumpingYardM" name="dumpingYardM" value="' + element1.n_yard + '" type="button" class="btn btn-primary" onclick="addDumpingYard();">No.Of Yards ✚</button>' +
                            '</div>' +
                            '</div>'
                            // + ' </div>'
                            +
                            '<div class="row justify-content-center" id="adddDYard">';
                        var i = 1;
                        $.each(yardData, function (index, element2) {

                            // for (var i = 1; i <= n_yard; i++) {
                            aDumpingYard++;
                            html += '<hr>' +
                                '<div  id="inputFormRow">' +
                                '<div class="row  text-center ">' +
                                '<h4>Details About Dumping Yard ' + i + ' </h4>'

                                +
                                ' </div>' +
                                '<div class="row justify-content-center">'

                                +
                                '<div class="col-md-6 col-lg-10 col-xl-3 col-10">' +
                                '<label for="area' + i + '" class="form-label"> Area of Dumping Yard</label>' +
                                '<div class="input-group mb-2">' +
                                '<input type="number" id="area' + i + '" name="area' + i + '" value="' + element2.area + '"  class="form-control" placeholder="Arera of Dumping Yard" aria-label="Arera of Dumping Yard" aria-describedby="basic-addon2">' +
                                ' <span class="input-group-text" id="basic-addon2">sq.km</span>' +
                                '</div>' +
                                '</div>'

                                +
                                '<div class="col-md-6 col-lg-10 col-xl-3 col-10">' +
                                '<label for="latitude' + i + '" class="form-label"> Latitude</label>' +
                                '<div class="input-group mb-2">' +
                                '<input type="number" id="latitude' + i + '" name="latitude' + i + '" value="' + element2.lat + '"  class="form-control" placeholder="Latitude" aria-label="Residential" aria-describedby="basic-addon2">' +
                                '</div>' +
                                '</div>'

                                +
                                '<div class="col-md-6 col-lg-10 col-xl-3 col-10">' +
                                '<label for="longitude' + i + '" class="form-label"> Longitude</label>' +
                                '<div class="input-group mb-2">' +
                                '<input type="number" id="longitude' + i + '" name="longitude' + i + '" value="' + element2.loong + '"  class="form-control" placeholder="Longitude" aria-label="Longitude" aria-describedby="basic-addon2">' +
                                '</div>' +
                                '</div>'

                                +
                                '<div class="col-md-6 col-lg-10 col-xl-3 col-10">' +
                                '<label for="apxWaste' + i + '" class="form-label"> Approximate Waste</label>' +
                                '<div class="input-group mb-2">' +
                                '<input type="number" id="apxWaste' + i + '" name="apxWaste' + i + '" value="' + element2.app_waste + '"  class="form-control" placeholder="Approximate Waste" aria-label="Approximate Waste" aria-describedby="basic-addon2">' +
                                ' <span class="input-group-text" id="basic-addon2">MTD</span>' +
                                '<div >' +
                                '<i class="bi bi-trash" style="font-size:24px;color:#FF0000"; onclick="removeYard(this, ' + i + ')"></i>' +
                                '</div>' +
                                '</div>' +
                                '</div></div>'

                                +
                                '</div>';
                            // + '<div class="col-md-6 col-lg-10 col-xl-3 col-10">'

                            // + '</div>';
                            i++;

                            // }
                        });

                        html += ' </div><div class="row">' +
                            '<div class="col-md-12 mb-3 mt-3 text-center">' +
                            ' <button class="btn btn-primary " type="button"  onclick="showMSWData();">SAVE</button>' +
                            ' </div>' +
                            ' </div >';

                        // + ' </div>'
                        // + '</li>'
                    });
                    // addChart();
                } else {
                    html = '<div class="row">' +
                        '<div class="col-md-6 col-lg-4 col-xl-4 col-10 mt-3">' +
                        '<label for="generatedM" class="form-label">Generation </label>' +
                        '<div class="input-group mb-2">' +
                        ' <input type="number" id="generatedM" name="generatedM" class="form-control" placeholder="Generation" aria-label="Generation" aria-describedby="basic-addon2">' +
                        ' <span class="input-group-text" id="basic-addon-2">MTD</span>' +
                        ' </div>' +
                        ' </div>'

                        +
                        ' <div class="col-md-6 col-lg-4 col-xl-4 col-10 mt-3">' +
                        ' <label for="collectionM" class="form-label"> Collection</label>' +
                        ' <div class="input-group mb-2">' +
                        ' <input type="number" id="collectionM" name="collectionM"  class="form-control" placeholder="Collection" aria-label="Collection" aria-describedby="basic-addon2">' +
                        '  <span class="input-group-text" id="basic-addon-2">MTD</span>' +
                        ' </div>' +
                        ' </div>'

                        +
                        ' <div class="col-md-6 col-lg-6 col-xl-4 col-10 mt-3">' +
                        '  <label for="treatment" class="form-label">Treatment</label>' +
                        ' <div class="form-group col-md-2  col-xl-10">' +
                        ' <select class="form-control" id="treatmentM" onchange="addTreatmentType();" >' +
                        ' <option disabled selected> Treatment Type</option>' +
                        ' <option value="Composting">Composting</option>' +
                        '<option value="Landfill">Landfill</option>' +
                        '<option value="Incineration">Incineration</option>' +
                        '</select >' +
                        '</div >' +
                        '</div>' +
                        '</div>' +
                        '<div class="row" id="comp">'

                        +
                        '</div>'

                        +
                        '<div class="row justify-content-left" >' +
                        '<div class="col-md-6 col-lg-10 col-xl-3 col-10">' +
                        '<button  id="dumpingYardM" name="dumpingYardM" value="" type="button" class="btn btn-primary" onclick="addDumpingYard();">No.Of Yards ✚</button>' +
                        '</div>' +
                        '</div>'

                        +
                        '<div class="row justify-content-center" id="adddDYard"> </div>'

                        +
                        '<div class="row">' +
                        '<div class="col-md-12 mb-3 mt-3 text-center">' +
                        '<button class="btn btn-primary " type="button" onclick="showMSWData();">SAVE</button>' +
                        '</div>' +
                        '</div >';
                }
            });
        }
    });

    $("#mswInput").append(html);
}


function showBMWInput() {
    var html = '';

    var basicId = document.getElementById("basicId").value;
    $("#bmwInput").empty();

    var myobj = {};
    myobj["type"] = "BMW";
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

                        html = '<div class="row">' +
                            '    <div class="col-md-6 col-lg-6 col-xl-4 col-10">' +
                            '        <label for="generatedB" class="form-label"> Generated </label>' +
                            '        <div class="input-group mb-2">' +
                            '            <input type="number" id="generatedB" name="generatedB"  value="' + element1.bmw_gen + '" class="form-control" placeholder="Generated" aria-label="Generated" aria-describedby="basic-addon2">' +
                            '            <span class="input-group-text" id="basic-addon-2">MTD</span>' +
                            '        </div>' +
                            '    </div>'

                            +
                            '    <div class="col-md-6 col-lg-6 col-xl-4 col-10">' +
                            '        <label for="collectedB" class="form-label"> Collected</label>' +
                            '        <div class="input-group mb-2">' +
                            '            <input type="number" id="collectedB" name="collectedB"  value="' + element1.bmw_coll + '" class="form-control" placeholder="Collected" aria-label="Collected" aria-describedby="basic-addon2">' +
                            '            <span class="input-group-text" id="basic-addon-2">MTD</span>' +
                            '        </div>' +
                            '    </div>'

                            +
                            '    <div class="col-md-6 col-lg-6 col-xl-4 col-10">' +
                            '        <label for="treatedB" class="form-label"> Treated </label>' +
                            '        <div class="input-group mb-2">' +
                            '            <input type="number" id="treatedB" name="treatedB"  value="' + element1.bmw_treat + '" class="form-control" placeholder="Treated" aria-label="Treated" aria-describedby="basic-addon2">' +
                            '            <span class="input-group-text" id="basic-addon-2">MTD</span>' +
                            '        </div>' +
                            '    </div>' +
                            '</div>'

                            +
                            ' <div class="row">' +
                            '<div class="col-md-12 mb-3 text-center">' +
                            ' <button class="btn btn-primary " type="button" onclick="showBMWData();">SAVE</button>' +
                            ' </div>' +
                            ' </div >';
                    });
                    // addChart();
                } else {

                    html = '<div class="row">' +
                        '    <div class="col-md-6 col-lg-6 col-xl-4 col-10">' +
                        '        <label for="generatedB" class="form-label"> Generated </label>' +
                        '        <div class="input-group mb-2">' +
                        '            <input type="number" id="generatedB" name="generatedB" class="form-control" placeholder="Generated" aria-label="Generated" aria-describedby="basic-addon2">' +
                        '            <span class="input-group-text" id="basic-addon-2">MTD</span>' +
                        '        </div>' +
                        '    </div>'

                        +
                        '    <div class="col-md-6 col-lg-6 col-xl-4 col-10">' +
                        '        <label for="collectedB" class="form-label"> Collected</label>' +
                        '        <div class="input-group mb-2">' +
                        '            <input type="number" id="collectedB" name="collectedB" class="form-control" placeholder="Collected" aria-label="Collected" aria-describedby="basic-addon2">' +
                        '            <span class="input-group-text" id="basic-addon-2">MTD</span>' +
                        '        </div>' +
                        '    </div>'

                        +
                        '    <div class="col-md-6 col-lg-6 col-xl-4 col-10">' +
                        '        <label for="treatedB" class="form-label"> Treated </label>' +
                        '        <div class="input-group mb-2">' +
                        '            <input type="number" id="treatedB" name="treatedB" class="form-control" placeholder="Treated" aria-label="Treated" aria-describedby="basic-addon2">' +
                        '            <span class="input-group-text" id="basic-addon-2">MTD</span>' +
                        '        </div>' +
                        '    </div>' +
                        '</div>'

                        +
                        ' <div class="row">' +
                        '<div class="col-md-12 mb-3 text-center">' +
                        ' <button class="btn btn-primary " type="button" onclick="showBMWData();">SAVE</button>' +
                        ' </div>' +
                        ' </div >';
                }
            });
        }
    });

    $("#bmwInput").append(html);
}

// Temporarily Deactivate designs 
// function showHWInput() {
//     var html = '';

//     var basicId = document.getElementById("basicId").value;
//     $("#hwInput").empty();

//     var myobj = {};
//     myobj["type"] = "HW";
//     myobj["basicId"] = basicId;

//     $.ajax({
//         type: "POST",
//         async: false,
//         url: "php/getAllData.php",
//         contentType: "application/json",
//         data: JSON.stringify(myobj),
//         success: function (data) {
//             var divList = JSON.parse(data);
//             $.each(divList, function (index, element) {
//                 var check = element.check;

//                 if (check == "true") {
//                     var eledata = element.cData;
//                     $.each(eledata, function (index, element1) {

//                         html = '<div class="row">'
//                             + '    <div class="col-md-6 col-lg-6 col-xl-4 col-10">'
//                             + '        <label for="generatedH" class="form-label"> Generated </label>'
//                             + '        <div class="input-group mb-2">'
//                             + '            <input type="text" id="generatedH" name="generatedH"  value="' + element1.hw_gen + '" class="form-control" placeholder="Generated" aria-label="Generated" aria-describedby="basic-addon2">'
//                             + '            <span class="input-group-text" id="basic-addon-2">MTD</span>'
//                             + '        </div>'
//                             + '    </div>'

//                             + '    <div class="col-md-6 col-lg-6 col-xl-4 col-10">'
//                             + '        <label for="collectedH" class="form-label"> Collected</label>'
//                             + '        <div class="input-group mb-2">'
//                             + '            <input type="text" id="collectedH" name="collectedH"  value="' + element1.hw_coll + '" class="form-control" placeholder="Collected" aria-label="Collected" aria-describedby="basic-addon2">'
//                             + '            <span class="input-group-text" id="basic-addon-2">MTD</span>'
//                             + '        </div>'
//                             + '    </div>'

//                             + '    <div class="col-md-6 col-lg-6 col-xl-4 col-10">'
//                             + '        <label for="treatedH" class="form-label"> Treated </label>'
//                             + '        <div class="input-group mb-2">'
//                             + '            <input type="text" id="treatedH" name="treatedH"  value="' + element1.hw_treat + '" class="form-control" placeholder="Treated" aria-label="Treated" aria-describedby="basic-addon2">'
//                             + '            <span class="input-group-text" id="basic-addon-2">MTD</span>'
//                             + '        </div>'
//                             + '    </div>'
//                             + '</div>'

//                             + ' <div class="row">'
//                             + '<div class="col-md-12 mb-3 mt-3 text-center">'
//                             + ' <button class="btn btn-primary " type="button" onclick="showHWData();">SAVE</button>'
//                             + ' </div>'
//                             + ' </div >';
//                     });
//                     // addChart();
//                 }
//                 else {

//                     html = '<div class="row">'
//                         + '    <div class="col-md-6 col-lg-6 col-xl-4 col-10">'
//                         + '        <label for="generatedH" class="form-label"> Generated </label>'
//                         + '        <div class="input-group mb-2">'
//                         + '            <input type="text" id="generatedH" name="generatedH" class="form-control" placeholder="Generated" aria-label="Generated" aria-describedby="basic-addon2">'
//                         + '            <span class="input-group-text" id="basic-addon-2">MTD</span>'
//                         + '        </div>'
//                         + '    </div>'

//                         + '    <div class="col-md-6 col-lg-6 col-xl-4 col-10">'
//                         + '        <label for="collectedH" class="form-label"> Collected</label>'
//                         + '        <div class="input-group mb-2">'
//                         + '            <input type="text" id="collectedH" name="collectedH" class="form-control" placeholder="Collected" aria-label="Collected" aria-describedby="basic-addon2">'
//                         + '            <span class="input-group-text" id="basic-addon-2">MTD</span>'
//                         + '        </div>'
//                         + '    </div>'

//                         + '    <div class="col-md-6 col-lg-6 col-xl-4 col-10">'
//                         + '        <label for="treatedH" class="form-label"> Treated </label>'
//                         + '        <div class="input-group mb-2">'
//                         + '            <input type="text" id="treatedH" name="treatedH" class="form-control" placeholder="Treated" aria-label="Treated" aria-describedby="basic-addon2">'
//                         + '            <span class="input-group-text" id="basic-addon-2">MTD</span>'
//                         + '        </div>'
//                         + '    </div>'
//                         + '</div>'

//                         + ' <div class="row">'
//                         + '<div class="col-md-12 mb-3 mt-3 text-center">'
//                         + ' <button class="btn btn-primary " type="button" onclick="showHWData();">SAVE</button>'
//                         + ' </div>'
//                         + ' </div >';
//                 }
//             });
//         }
//     });

//     $("#hwInput").append(html);
// }


var comp = 0;
var land = 0;
var incine = 0;

function addTreatmentType() {


    var treatType = document.getElementById("treatmentM").value;
    var html = '';

    if (treatType == "Composting") {
        html = ' <div class="col-md-6 col-lg-6 col-xl-4 col-10">  <label for="compostedM" class="form-label"> Qty of MSW Composted </label>' +
            '        <div class="input-group mb-2">' +
            '            <input type="number" id="compostedM" name="compostedM" class="form-control" placeholder="Composted" aria-label="Composted" aria-describedby="basic-addon2">' +
            '            <span class="input-group-text" id="basic-addon-2">MTD</span>' +
            '    </div></div>';
        $("#comp").append(html);
        comp++;
    }

    if (treatType == "Landfill") {
        html = '<div class="col-md-6 col-lg-6 col-xl-4 col-10">   <label for="disposalM" class="form-label"> Qty of MSW sent to Landfill</label>' +
            '        <div class="input-group mb-2">' +
            '            <input type="number" id="disposalM" name="disposalM" class="form-control" placeholder="Landfill" aria-label="landfill" aria-describedby="basic-addon2">' +
            '            <span class="input-group-text" id="basic-addon-2">MTD</span>' +
            '    </div></div>';

        $("#comp").append(html);
        land++;
    }

    if (treatType == "Incineration") {
        html = ' <div class="col-md-6 col-lg-6 col-xl-4 col-10">  <label for="incineratedM" class="form-label"> Qty of MSW Incinerated</label>' +
            '        <div class="input-group mb-2">' +
            '            <input type="number" id="incineratedM" name="incineratedM" class="form-control" placeholder="Incinerated" aria-label="Incinerated" aria-describedby="basic-addon2">' +
            '            <span class="input-group-text" id="basic-addon-2">MTD</span>' +
            '    </div></div>';

        $("#comp").append(html);
        incine++;
    }
}

var yardList = [];

function addDumpingYard() {

    // $("#adddDYard").empty();
    aDumpingYard++;
    yardList.push(aDumpingYard);
    //var dumpingYardM = document.getElementById("dumpingYardM").value;
    var html = '';
    html += '<hr>' +
        '<div  id="inputFormRow">' +
        '<div class="row  text-center " >' +
        '<h4>Details About Dumping Yard ' + aDumpingYard + ' </h4>'

        +
        ' </div>' +
        '<div class="row justify-content-center">' +
        '<div class="col-md-6 col-lg-10 col-xl-3 col-10">' +
        '<label for="area' + aDumpingYard + '" class="form-label"> Area of Dumping Yard</label>' +
        '<div class="input-group mb-2">' +
        '<input type="number" id="area' + aDumpingYard + '" name="area' + aDumpingYard + '" class="form-control" placeholder="Area of Dumping Yard" aria-label="Arera of Dumping Yard" aria-describedby="basic-addon2">' +
        ' <span class="input-group-text" id="basic-addon2">sq.km</span>' +
        '</div>' +
        '</div>' +
        '<div class="col-md-6 col-lg-10 col-xl-3 col-10">'

        +
        '<label for="latitude' + aDumpingYard + '" class="form-label"> Latitude</label>' +
        '<div class="input-group mb-2">' +
        '<input type="number" id="latitude' + aDumpingYard + '" name="latitude' + aDumpingYard + '" class="form-control" placeholder="Latitude" aria-label="Residential" aria-describedby="basic-addon2">' +
        '</div>'

        +
        '</div>' +
        '<div class="col-md-6 col-lg-10 col-xl-3 col-10">'

        +
        '<label for="longitude' + aDumpingYard + '" class="form-label"> Longitude</label>' +
        '<div class="input-group mb-2">' +
        '<input type="number" id="longitude' + aDumpingYard + '" name="longitude' + aDumpingYard + '" class="form-control" placeholder="Longitude" aria-label="Longitude" aria-describedby="basic-addon2">' +
        '</div>'

        +
        '</div>' +
        '<div class="col-md-6 col-lg-10 col-xl-3 col-10">'

        +
        '<label for="apxWaste' + aDumpingYard + '" class="form-label"> Approximate Waste</label>' +
        '<div class="input-group mb-2">' +
        '<input type="number" id="apxWaste' + aDumpingYard + '" name="apxWaste' + aDumpingYard + '" class="form-control" placeholder="Approximate Waste" aria-label="Approximate Waste" aria-describedby="basic-addon2">' +
        ' <span class="input-group-text" id="basic-addon2">MTD</span>' +
        '<div >' +
        '<i class="bi bi-trash" style="font-size:24px;color:#FF0000"; onclick="removeYard(this, ' + aDumpingYard + ')"></i>' +
        '</div>' +
        '</div>'

        +
        '</div>' +
        '</div>' +
        '<div class="col-md-6 col-lg-10 col-xl-3 col-10">'

        +
        '  </div>';



    $("#adddDYard").append(html);

}

// delete Dumping yard 
function removeYard(el, yard) {

    const index = yardList.indexOf(yard);
    if (index > -1) {
        yardList.splice(index, 1);
    }

    $(el).closest('#inputFormRow').remove();
    aDumpingYard--;

}



function showMSWData() {
    var flag = 0;
    var mswData = {};
    var yardData = [];

    var basicId = document.getElementById("basicId").value;

    var generatedM = document.getElementById("generatedM").value;
    flag += customInputValidator(generatedM, "generatedM");

    var collectionM = document.getElementById("collectionM").value;
    flag += customInputValidator(collectionM, "collectionM");

    var dumpingYardM = aDumpingYard;

    // Temporarily Deactivate
    //validation
    // if (generatedM < collectionM) {
    //     alert("Genrated value is less than collected value.");
    //     flag++;
    // }

    if (comp == 1) {
        var compostedM = document.getElementById("compostedM").value;
        mswData["t_comp"] = compostedM;
    } else {
        mswData["t_comp"] = 0;
    }

    if (land == 1) {
        var disposalM = document.getElementById("disposalM").value;
        // flag += customInputValidator(disposalM, "disposalM");
        mswData["t_disp"] = disposalM;
    } else {
        mswData["t_disp"] = 0;
    }

    if (incine == 1) {
        var incineratedM = document.getElementById("incineratedM").value;
        //flag += customInputValidator(incineratedM, "incineratedM");
        mswData["t_incin"] = incineratedM;
    } else {
        mswData["t_incin"] = 0;
    }

    // Temporarily Deactivate
    //validation
    // var addtreat = (parseInt(compostedM) + parseInt(disposalM) + parseInt(incineratedM));
    // if (collectionM < addtreat) {
    //     alert("Collected value is less than treatment value.");
    //     flag++;
    // }



    for (var i = 1; i <= dumpingYardM; i++) {

        var yardDetails = {};

        var area = document.getElementById("area" + i).value;
        // flag += customInputValidator(area, "area");
        console.log(area);

        var longitude = document.getElementById("longitude" + i).value;
        //flag += customInputValidator(longitude, "longitude");


        var latitude = document.getElementById("latitude" + i).value;
        // flag += customInputValidator(latitude, "latitude");


        var apxWaste = document.getElementById("apxWaste" + i).value;
        //flag += customInputValidator(apxWaste, "apxWaste");



        yardDetails["area"] = area;
        yardDetails["long"] = longitude;
        yardDetails["lat"] = latitude;
        yardDetails["app_waste"] = apxWaste;

        yardData.push(yardDetails);

        // if (area = null) {
        //     yardData.pop(yardDetails);
        // }
        // else {

        //     yardData.push(yardDetails);
        // }

    }
    mswData["basicId"] = basicId;
    mswData["msw_gen"] = generatedM;
    mswData["msw_col"] = collectionM;
    mswData["n_yard"] = dumpingYardM;
    mswData["yardData"] = yardData;
    // console.log(mswData);

    if (flag == 0) {
        $.ajax({
            type: "POST",
            async: false,
            url: "php/savemswsolid.php",
            contentType: "application/json",
            data: JSON.stringify(mswData),
            success: function (data) {
                // var data1 = JSON.parse(data);
                if (data == "success") {
                    alert("Data Save Succesfuly");
                    $("#faq-list-1").removeClass("show");
                    $("#fa1").addClass("collapsed");
                    $("#fa2").removeClass("collapsed");
                    $("#faq-list-2").addClass("show");
                    // addChart();

                } else {
                    alert("Data not Save Succesfuly")
                }
            }
        });
    } else {
        alert("Data not Save Succesfuly Please enter valid Data")
    }


}

function showBMWData() {

    var flag = 0;
    var bmwData = {};

    var basicId = document.getElementById("basicId").value;

    var generatedB = document.getElementById("generatedB").value;
    flag += customInputValidator(generatedB, "generatedB");

    var collectedB = document.getElementById("collectedB").value;
    flag += customInputValidator(collectedB, "collectedB");

    var treatedB = document.getElementById("treatedB").value;
    flag += customInputValidator(treatedB, "treatedB");

    // Temporarily Deactivate
    // validation
    // if (generatedB < collectedB || collectedB < treatedB) {
    //     alert("Genrated value is less than collected value.");
    //     flag++;
    // }
    // if (generatedB < collectedB) {
    //     alert("Genrated value is less than collected value.");
    //     flag++;
    // }

    // if (collectedB < treatedB) {
    //     alert("Collected value is less than treated value.");
    //     flag++;
    // }



    bmwData["basicId"] = basicId;
    bmwData["bmw_gen"] = generatedB;
    bmwData["bmw_coll"] = collectedB;
    bmwData["bmw_treat"] = treatedB;



    if (flag == 0) {
        $.ajax({
            type: "POST",
            async: false,
            url: "php/saveBmwSolid.php",
            contentType: "application/json",
            data: JSON.stringify(bmwData),
            success: function (data) {
                if (data == "success") {
                    alert("Data Save Succesfuly");
                    $("#faq-list-2").removeClass("show");
                    $("#fa2").addClass("collapsed");
                    $("#fa3").removeClass("collapsed");
                    $("#faq-list-3").addClass("show");
                    // addChart();
                    window.location.replace("wasteWater.php");
                } else {
                    alert("Data not Save Succesfuly")
                }
            }
        });
    } else {
        alert("Data not Save Succesfuly Please enter valid Data")
    }


}
// Temporarily Deactivate
// function showHWData() {

//     var flag = 0;
//     var hwData = {};

//     var basicId = document.getElementById("basicId").value;

//     var generatedH = document.getElementById("generatedH").value;

//     var collectedH = document.getElementById("collectedH").value;

//     var treatedH = document.getElementById("treatedH").value;

//     //validation
//     if (generatedH < collectedH || collectedH < treatedH) {

//         alert("Genrated value is less than collected value.");
//         flag++;
//     }




//     hwData["basicId"] = basicId;
//     hwData["hw_gen"] = generatedH;
//     hwData["hw_coll"] = collectedH;
//     hwData["hw_treat"] = treatedH;

//     if (flag == 0) {
//         $.ajax({
//             type: "POST",
//             async: false,
//             url: "php/saveHwSolid.php",
//             contentType: "application/json",
//             data: JSON.stringify(hwData),
//             success: function (data) {
//                 if (data == "success") {
//                     alert("Data Save Succesfuly");
//                     // addChart();
//                     window.location.replace("wasteWater.php");
//                 } else {
//                     alert("Data not Save Succesfuly")
//                 }
//             }
//         });
//     }

// }

// function redirect() {
//     window.location.replace("transport.php");
// }


function showSolidInfo() {
    var div = document.getElementById("moreInfo");
    div.style.display = "block";

    $("#popUpData").empty();
    var html1 = '<div class="row" >'

        + '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto "><center><h5 class="mt-4">Solid Waste </h5></center>'

        +
        '<div class="row mt-2 mb-3">' +
        '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">' +
        '<ul style="margin-left: 10px;">' +
        '<li class="popupli"> Solid waste generated from the city is 361 kg/day of CO2 equivalent in the environment. </li>' +
        '<li class="popupli">The net annual emission of CH4 from landfills in India increased from 404 Gg in 1999–2000 . </li>' +
        '<li class="popupli">India generates 62 million tonnes of waste each year. About 43 million tonnes (70%) are collected of which about 12 million tonnes are treated and 31 million tonnes are dumped in landfill sites.</li>'
        // + '<li class="popupli">Around 37.9% installed generation capacity is due to renewable energy sources.</li>'
        // + '<li class="popupli">Around 1.7% installed generation capacity is due to Nuclear Fuel.</li>'
        +
        '</ul>'
        // + '<br>Despite its soaring energy needs, India has one of the lowest per capita rates of consumption of power in the world - 734 units as compared to a world average of 2,429 units. </b></p>'
        // + '<center> <a class="my-3" href="http://www.ghgplatform-india.org/emissionestimates-phase2" target="_blank" rel="noopener noreferrer">Reference</a></center>'
        // + '<center><a class="my-3" href="http://www.technogreen.co.in/Survey/files/Estimates-Energy-National.xlsx" target="_blank" rel="noopener noreferrer">Reference</a></center>'

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
        '<div style="overflow:auto; width:auto;height:400px;">' +
        '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 infoFont">' +
        '<ul style="margin-left: 10px;">' +

        '<li class="popupli"> Composting:</br>Emissions CH4 = Amt of waste composted (in kg) * Emissions factor (g CH4/kg of waste).</li>' +
        '<li class="popupli"> Emission N2O = Amt of waste composted (in kg) * Emissions factor (g N2O/kg of waste).</li>' +
        '<li class="popupli"> Incineration : </br>CO2 emissions(Gg) = Amt of solid waste incinerated (in Gg) * dry matter content * fraction of carbon in dry matter  * fraction  of fossil carbon in total carbon * oxidation factor * 44/12. </li>' +
        '<li class="popupli"> CH4 emissions = Amt of solid waste incinerated (in Gg) * EF (kgCH4/Gg). </li>' +
        '<li class="popupli"> N2O emissions =  Amt of solid waste incinerated (in Gg) * EF (kgN2O/Gg). </li>' +
        '<li class="popupli"> Landfill :</br>CH4 emissions = [CH4 generated - R<sub>T</sub>]*(1-OX<sub>T</sub>])</br>R = CH4 recovered, OX = oxidation factor. </li>' +
        '<li class="popupli"> CH4 generated = DDOCm decompT * 0.5 * 16/12. </li>' +
        '<li class="popupli"> DDOCm  = W * DOC * DOC<sub>f</sub> * MCF</br>W = amount of waste in landfill Gg</br>DOC = degradable organic carbon , fraction</br>DOC<sub>f</sub> = fraction of DOC that can decompose</br>MCF = CH4 correction factor for aerobic decomposition. </li>' +
        '<li class="popupli"> Biomedical Waste:</br>Biomedical waste is treated ny incineration which produces harmful greenhouse gases. </li>' +
        '<li class="popupli"> CO2 emissions = Amt of hazardous waste * fraction of waste type * dry matter content * carbon component * fraction  of fossil carbon in total carbon * oxidation factor * 44/12. </li>' +
        '<li class="popupli"> CH4 emissions = Amt of biomedical waste incinerated (in Gg) * EF (kgCH4/Gg). </li>' +
        '<li class="popupli"> N2O emissions =  Amt of biomedical waste incinerated (in Gg) * EF (kgN2O/Gg). </li>' +
        '<li class="popupli"> Hazardous Waste :</br>Hazardous waste is treated by incineration which produces harmful greenhouse gases. </li>' +
        '<li class="popupli"> CO2 emissions = Amt of hazardous waste * dry matter content * carbon component * fraction  of fossil carbon in total carbon * oxidation factor * 44/12. </li>' +
        '<li class="popupli"> CH4 emissions = Amt of hazardous waste incinerated (in Gg) * EF (kgCH4/Gg). </li>' +
        '<li class="popupli"> N2O emissions =  Amt of hazardous waste incinerated (in Gg) * EF (kgN2O/Gg). </li>' +
        '</ul>'
    '</div>' +
        // + '<center> <a class="my-3" href="http://www.ghgplatform-india.org/emissionestimates-phase2" target="_blank" rel="noopener noreferrer">Reference</a></center>'
        // + '<center><a class="my-3" href="http://www.technogreen.co.in/Survey/files/Estimates-Energy-National.xlsx" target="_blank" rel="noopener noreferrer">Reference</a></center>'
        +
        '</div> ' +
        '</div>' +
        '</div></div>';
    $("#popUpData1").append(html1);
}