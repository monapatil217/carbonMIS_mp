var popup = document.getElementById('popup-wrapper');
var btn = document.getElementById("popup-btn");
var span = document.getElementById("close");
btn.onclick = function() {
    popup.classList.add('show');
}
span.onclick = function() {
    popup.classList.remove('show');
}

window.onclick = function(event) {
    if (event.target == popup) {
        popup.classList.remove('show');
    }
}

/////
var popup1 = document.getElementById('popup-wrapper1');
var btn1 = document.getElementById("popup-btn1");
var span1 = document.getElementById("close1");
btn1.onclick = function() {
    popup1.classList.add('show');
}
span1.onclick = function() {
    popup1.classList.remove('show');
}

window.onclick = function(event) {
        if (event.target == popup1) {
            popup1.classList.remove('show');
        }
    }
    ////
$(document).ready(function() {
    showWaterInput();
})
aSTP = 0;

function showWaterInput() {
    var html = '';

    var basicId = document.getElementById("basicId").value;
    $("#waterInput").empty();

    var myobj = {};
    myobj["type"] = "WasteWater";
    myobj["basicId"] = basicId;

    $.ajax({
        type: "POST",
        async: false,
        url: "php/getAllData.php",
        contentType: "application/json",
        data: JSON.stringify(myobj),
        success: function(data) {
            var divList = JSON.parse(data);
            $.each(divList, function(index, element) {
                var check = element.check;

                if (check == "true") {
                    var i = 1;
                    var eledata = element.cData;

                    $.each(eledata, function(index, element1) {
                        var n_stp = element1.n_stp;
                        var stpdata = element1.stpData;

                        html = '<div class="row justify-content-center">' +
                            '<div class="col-md-6 col-lg-6 col-xl-3 col-10">' +
                            '<label for="waterCon" class="form-label">Water Consumption</label>' +
                            '<div class="input-group mb-2">' +
                            '<input type="number" id="waterCon" name="waterCon"  class="form-control" value="' + element1.w_cons + '" placeholder="Consumption" aria-label="Area" aria-describedby="basic-addon2">' +
                            '<span class="input-group-text" id="basic-addon2">MLD</span>' +
                            '</div>' +
                            '</div>' +
                            '<div class="col-md-6 col-lg-6 col-xl-3 col-10">' +
                            '<label for="waterGen" class="form-label">Wastewater Generated</label>' +
                            '<div class="input-group mb-2">' +
                            '<input type="number" id="waterGen" name="waterGen" class="form-control" value="' + element1.w_gen + '" placeholder="Generation" aria-label="Area" aria-describedby="basic-addon2">' +
                            '<span class="input-group-text" id="basic-addon2">MLD</span>' +
                            '</div>' +
                            '</div>' +
                            '<div class="col-md-6 col-lg-10 col-xl-3 col-10">' +
                            '<label for="waterTreat" class="form-label">Qty of wastewater treated</label>' +
                            '<div class="input-group mb-2">' +
                            '<input type="number" id="waterTreat" name="waterTreat" class="form-control" value="' + element1.q_treat + '" placeholder="Treatment" aria-label="Area" aria-describedby="basic-addon2">' +
                            '<span class="input-group-text" id="basic-addon2">MLD</span>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '<div class="row justify-content-center">' +
                            '<div class="col-md-6 col-lg-10 col-xl-3 col-10">' +
                            '<h4></h4>' +
                            '</div>' +
                            '</div>' +
                            '<div class="row justify-content-left">' +
                            '<div class="col-md-6 col-lg-10 col-xl-3 col-10">' +
                            '<button  id="noSTP" name="noSTP" value="' + element1.n_stp + '" type="button" class="btn btn-primary" onclick="addSTP();">No.Of STP ✚</button>' +
                            '</div>' +
                            '</div>' +
                            '<div class="row justify-content-center" id="adddstp">';
                        var stpi = 1;
                        $.each(stpdata, function(index, element2) {
                            aSTP++;
                            html += '<hr>' +
                                '<div  id="inputFormRow">' +
                                '<div class="row  text-center ">' +
                                '<h4>Details About STP ' + stpi + ' </h4>' +
                                ' </div>' +
                                '<div class="row justify-content-center">' +
                                '<div class="col-md-6 col-lg-10 col-xl-3 col-10">' +
                                '<label for="capacity" class="form-label"> Capacity</label>' +
                                '<div class="input-group mb-2">' +
                                '<input type="number" id="capacity' + stpi + '" name="capacity" class="form-control" placeholder="Capacity" value="' + element2.cap + '"  aria-label="Residential" aria-describedby="basic-addon2">' +
                                '<span class="input-group-text" id="basic-addon2">MLD</span>' +
                                '</div>' +
                                '</div>' +
                                '<div class="col-md-6 col-lg-10 col-xl-3 col-10">' +
                                '<label for="latitude" class="form-label"> Latitude</label>' +
                                '<div class="input-group mb-2">' +
                                '<input type="number" id="latitude' + stpi + '" name="latitude" class="form-control" placeholder="Latitude" value="' + element2.lat + '"  aria-label="Residential" aria-describedby="basic-addon2">' +
                                '</div>' +
                                '</div>' +
                                '<div class="col-md-6 col-lg-10 col-xl-3 col-10">' +
                                '<label for="longitude" class="form-label"> Longitude</label>' +
                                '<div class="input-group mb-2">' +
                                '<input type="number" id="longitude' + stpi + '" name="longitude" class="form-control" placeholder="Longitude" value="' + element2.long + '"  aria-label="Residential" aria-describedby="basic-addon2">' +
                                '</div>' +
                                '</div>' +
                                '<div class="col-md-6 col-lg-10 col-xl-3 col-10">' +
                                '<label for="technology" class="form-label"> Technology</label>' +
                                '<div class="input-group mb-2">' +
                                '<input type="number" id="technology' + stpi + '" name="technology" class="form-control" placeholder="Technology" value="' + element2.tech + '"   aria-label="Residential" aria-describedby="basic-addon2">' +
                                '</div>' +
                                '</div>' +
                                '<div class="col-md-6 col-lg-10 col-xl-3 col-10">' +
                                '<label for="waterRecycle" class="form-label"> Qty of Recycled Water</label>' +
                                '<div class="input-group mb-2">' +
                                '<input type="number" id="waterRecycle' + stpi + '" name="waterRecycle" class="form-control" placeholder="Recycled Water" value="' + element2.recycle + '"  aria-label="Residential" aria-describedby="basic-addon2">' +
                                '<span class="input-group-text" id="basic-addon2">MLD</span>' +
                                '</div>' +
                                '</div>' +
                                '<div class="col-md-6 col-lg-10 col-xl-3 col-10">' +
                                '<label for="waterDisposal" class="form-label">Qty of Water Disposal </label>' +
                                '<div class="input-group mb-2">' +
                                '<input type="number" id="waterDisposal' + stpi + '" name="waterDisposal" class="form-control" placeholder="Disposal of Waste" value="' + element2.dispose + '"  aria-label="Residential" aria-describedby="basic-addon2">' +
                                '<span class="input-group-text" id="basic-addon2">MLD</span>' +
                                '<i class="bi bi-trash" style="font-size:24px;color:#FF0000"; onclick="removeSTP(this, ' + stpi + ')"></i>' +
                                '</div>' +
                                ' </div>' +
                                '</div>' +
                                '  </div>';
                            stpi++;

                        });

                        html += '</div>';
                    });

                } else {

                    html = '<div class="row justify-content-center">' +
                        '<div class="col-md-6 col-lg-10 col-xl-3 col-10">' +
                        '<label for="waterCon" class="form-label">Water Consumption</label>' +
                        '<div class="input-group mb-2">' +
                        '<input type="number" id="waterCon" name="waterCon" class="form-control" placeholder="Consumption" aria-label="Area" aria-describedby="basic-addon2">' +
                        '<span class="input-group-text" id="basic-addon2">MLD</span>' +
                        '</div>' +
                        '</div>' +
                        '<div class="col-md-6 col-lg-10 col-xl-3 col-10">' +
                        '<label for="waterGen" class="form-label">Wastewater Generated</label>' +
                        '<div class="input-group mb-2">' +
                        '<input type="number" id="waterGen" name="waterGen" class="form-control" placeholder="Generated" aria-label="Area" aria-describedby="basic-addon2">' +
                        '<span class="input-group-text" id="basic-addon2">MLD</span>' +
                        '</div>' +
                        '</div>' +
                        '<div class="col-md-6 col-lg-10 col-xl-3 col-10">' +
                        '<label for="waterTreat" class="form-label">Qty of wastewater treated</label>' +
                        '<div class="input-group mb-2">' +
                        '<input type="number" id="waterTreat" name="waterTreat" class="form-control" placeholder="Water Treat" aria-label="Area" aria-describedby="basic-addon2">' +
                        '<span class="input-group-text" id="basic-addon2">MLD</span>' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '<div class="row justify-content-center">' +
                        '<div class="col-md-6 col-lg-10 col-xl-3 col-10">' +
                        '<h4>Add STP</h4>' +
                        '</div>' +
                        '</div>' +
                        '<div class="row justify-content-left">' +
                        '<div class="col-md-6 col-lg-10 col-xl-3 col-10">' +
                        '<button  id="noSTP" name="noSTP" value="" type="button" class="btn btn-primary" onclick="addSTP();">No.Of STP ✚</button>' +
                        '</div>' +
                        '</div>'
                        // + '</div>'  +
                    '<div class="row justify-content-center" id="adddstp"> </div>';
                }
            });
        }
    });

    $("#waterInput").append(html);

}

var stpList = [];

function addSTP() {
    aSTP++;
    stpList.push(aSTP);
    // $("#adddstp").empty();
    // var noSTP = document.getElementById("noSTP").value;
    var html = '';
    html += '<hr>' +
        '<div  id="inputFormRow">' +
        '<div class="row  text-center ">' +
        '<h4>Details About STP ' + aSTP + ' </h4>' +
        ' </div>' +
        '<div class="row justify-content-center">' +
        '<div class="col-md-6 col-lg-10 col-xl-3 col-10">' +
        '<label for="capacity" class="form-label"> Capacity</label>' +
        '<div class="input-group mb-2">' +
        '<input type="number" id="capacity' + aSTP + '" name="capacity" class="form-control" placeholder="Capacity" aria-label="Residential" aria-describedby="basic-addon2">' +
        '<span class="input-group-text" id="basic-addon2">MLD</span>' +
        '</div>' +
        '</div>' +
        '<div class="col-md-6 col-lg-10 col-xl-3 col-10">' +
        '<label for="latitude" class="form-label"> Latitude</label>' +
        '<div class="input-group mb-2">' +
        '<input type="number" id="latitude' + aSTP + '" name="latitude" class="form-control" placeholder="Latitude" aria-label="Latitude" aria-describedby="basic-addon2">' +
        '</div>' +
        '</div>' +
        '<div class="col-md-6 col-lg-10 col-xl-3 col-10">' +
        '<label for="longitude" class="form-label"> Longitude</label>' +
        '<div class="input-group mb-2">' +
        '<input type="number" id="longitude' + aSTP + '" name="longitude" class="form-control" placeholder="Longitude" aria-label="Longitude" aria-describedby="basic-addon2">' +
        '</div>' +
        '</div>' +
        '<div class="col-md-6 col-lg-10 col-xl-3 col-10">' +
        '<label for="technology" class="form-label"> Technology</label>' +
        '<div class="input-group mb-2">' +
        '<input type="number" id="technology' + aSTP + '" name="technology" class="form-control" placeholder="Technology" aria-label="Technology" aria-describedby="basic-addon2">' +
        '</div>' +
        '</div>' +
        '<div class="col-md-6 col-lg-10 col-xl-3 col-10">' +
        '<label for="waterRecycle" class="form-label"> Qty of Recycled Water</label>' +
        '<div class="input-group mb-2">' +
        '<input type="number" id="waterRecycle' + aSTP + '" name="waterRecycle" class="form-control" placeholder="Recycled Water" aria-label="Recycled Water" aria-describedby="basic-addon2">' +
        '<span class="input-group-text" id="basic-addon2">MLD</span>' +
        '</div>' +
        '</div>' +
        '<div class="col-md-6 col-lg-10 col-xl-3 col-10">' +
        '<label for="waterDisposal" class="form-label"> Qty of Water Disposal</label>' +
        '<div class="input-group mb-2">' +
        '<input type="number" id="waterDisposal' + aSTP + '" name="waterDisposal" class="form-control" placeholder="Disposal of Waste" aria-label="Residential" aria-describedby="basic-addon2">' +
        '<span class="input-group-text" id="basic-addon2">MLD</span>' +
        '<i class="bi bi-trash" style="font-size:24px;color:#FF0000"; onclick="removeSTP(this, ' + aSTP + ')"></i>' +
        '</div>' +
        '</div>' +
        ' </div>' +
        '  </div>';

    $("#adddstp").append(html);

}

// Delete STP 
function removeSTP(el, stp) {

    const index = stpList.indexOf(stp);
    if (index > -1) {
        stpList.splice(index, 1);
    }

    $(el).closest('#inputFormRow').remove();
    aSTP--;
}

function saveWaterData() {

    var flag = 0;
    var waterData = {};
    var stpData = [];

    var basicId = document.getElementById("basicId").value;

    var waterCon = document.getElementById("waterCon").value;
    flag += customInputValidator(waterCon, "waterCon");

    var waterGen = document.getElementById("waterGen").value;
    flag += customInputValidator(waterGen, "waterGen");

    var waterTreat = document.getElementById("waterTreat").value;
    flag += customInputValidator(waterTreat, "waterTreat");

    // if (waterCon < waterGen || waterGen < waterTreat) {
    //     alert("filled Data not valide number");
    //     flag++;
    // }

    // if (waterCon < waterGen) {
    //     alert("Water Consumption value is less than water genrated value.");
    //     flag++;
    // }
    // if (waterGen < waterTreat) {
    //     alert(" water genrated value is less than water treated value.");
    //     flag++;
    // }

    var noSTP = aSTP;

    for (var i = 1; i <= noSTP; i++) {

        var stpDetails = {};

        var capacity = document.getElementById("capacity" + i).value;
        // flag += customInputValidator(capacity, "capacity");

        var latitude = document.getElementById("latitude" + i).value;
        // flag += customInputValidator(latitude, "latitude");

        var longitude = document.getElementById("longitude" + i).value;
        // flag += customInputValidator(longitude, "longitude");


        var technology = document.getElementById("technology" + i).value;
        // flag += customInputValidator(technology, "technology");


        var waterRecycle = document.getElementById("waterRecycle" + i).value;
        //flag += customInputValidator(waterRecycle, "waterRecycle");

        var waterDisposal = document.getElementById("waterDisposal" + i).value;
        // flag += customInputValidator(waterDisposal, "waterDisposal");

        stpDetails["cap"] = capacity;
        stpDetails["lat"] = latitude;
        stpDetails["long"] = longitude;
        stpDetails["tech"] = technology;
        stpDetails["recycle"] = waterRecycle;
        stpDetails["dispose"] = waterDisposal;

        stpData.push(stpDetails);
    }


    waterData["basicId"] = basicId;
    waterData["w_cons"] = waterCon;
    waterData["w_gen"] = waterGen;
    waterData["q_treat"] = waterTreat;
    waterData["n_stp"] = noSTP;

    waterData["stpData"] = stpData;

    // console.log(waterData);

    if (flag == 0) {
        $.ajax({
            type: "POST",
            async: false,
            url: "php/saveWastewater.php",
            contentType: "application/json",
            data: JSON.stringify(waterData),
            success: function(data) {
                // var data1 = JSON.parse(data);
                if (data == "success") {
                    alert("Data Save Succesfuly");
                    window.location.replace("industryEnergy.php");
                } else {
                    alert("Data not Save Succesfuly")
                }

            }
        });
    } else {
        alert("Data not Save Succesfuly Please enter valid data")
    }
    // window.location.replace("industryEnergy.php");

}


// function redirect() {

//     window.location.replace("industryPP.php");

// }

function showWaterInfo() {
    var div = document.getElementById("moreInfo");
    div.style.display = "block";

    $("#popUpData").empty();
    var html1 = '<div class="row" >'

    +'<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto "><center><h5 class="mt-4">Waste Water </h5></center>'

    +
    '<div class="row mt-2 mb-3">' +
    '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">' +
    '<ul style="margin-left: 10px;">' +
    '<li class="popupli"> In India, the present treatment plants of capacity 15 997 million litres per day (MLD) contributes towards GHG emissions of 7.3 Mt of CO2-eq/year.</li>'
    // + '<li class="popupli">Whereas petrol has a lower carbon content and produces about 2.39 kgs of co2 per liter.</li>'
    // + '<li class="popupli">Around 60.9% installed generation capacity is due to fossil fuel. </li>'
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

    +'<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto "><center><h5 class="mt-4">calculations </h5></center>'

    +
    '<div class="row mt-2 mb-3">' +
    '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 infoFont">' +
    '<ul style="margin-left: 10px;">' +
    '<li class="popupli"> Methane (CH4) is produced and released into the atmosphere as a by-product of the anaerobic decomposition of solid waste and when domestic and industrial wastewater is treated or disposed anaerobically. Nitrous oxide (N2O) emissions occur due to the protein content in domestic wastewater .</li>' +
    '<li class="popupli"> CH4 Emissions = Σ(i,j) {[(Ui*Ti,j*EFj)(TOW-S)-R]}.</li>' +
    '<li class="popupli">S - Organic Component removed as Sludge</br>Ui - fraction of population in income group</br>Ti,j - degree of utilisation of treatment/discharge pathway or system,</br>i - income group, j - each treatment/discharge pathway or system</br>R = amount of CH4 recovered in inventory year, Kg CH4/year. </li>' +
    '<li class="popupli"> N2O Emissions = Neffluent * EF effluent * 44/28.</li>' +
    '<li class="popupli"> N EFFLUENT - Nitrogen in the effluent discharged to aquatic environments</br>44/28 - The factor is the conversion of kg N2O-N into kg N2O.</li>' +
    '</ul>'
    // + '<center> <a class="my-3" href="http://www.ghgplatform-india.org/emissionestimates-phase2" target="_blank" rel="noopener noreferrer">Reference</a></center>'
    // + '<center><a class="my-3" href="http://www.technogreen.co.in/Survey/files/Estimates-Energy-National.xlsx" target="_blank" rel="noopener noreferrer">Reference</a></center>'
    +
    '</div> ' +
    '</div>' +
    '</div></div>';
    $("#popUpData1").append(html1);
}