var valid = document.querySelector("#valider")

valid.addEventListener("click",Distance);
    function Distance(){
        const req = new XMLHttpRequest();
        req.open('GET','https://maps.googleapis.com/maps/api/js?libraries=places&language=fr&key=AIzaSyCsJCqNF6_KxpI8Z1MDn1-fTBaQ-ULMQoI',true);
        req.send();
        req.onload = function(){
            if(this.readyState===XMLHttpRequest.DONE){
                if(this.status===200){
                    reponse = JSON.parse(this.responseText);
                    console.log(this.responseText);
                    var depart = document.querySelector('#depart');
                    var arrive = document.querySelector('#arrive');
                    var adresseDepart = depart.value;
                    var adresseArrive = arrive.value
                    var service = new google.maps.DistanceMatrixService();
                    service.getDistanceMatrix(
                        {
                            origins: [adresseDepart],
                            destinations: [adresseArrive],
                            travelMode: google.maps.TravelMode.DRIVING,
                            unitSystem: google.maps.UnitSystem.metric, // kilometers and meters.
                            avoidHighways: false,
                            avoidTolls: false
                        })
                        var distance = response.rows[0].elements[0].distance;
                    console.log(distance);

                }
            }
    }
        function calcul(depart,arrive){
            var adresseDepart = depart.value;
            var adresseArrive = arrive.value
            var service = new google.maps.DistanceMatrixService();
            service.getDistanceMatrix(
                {
                    origins: [adresseDepart],
                    destinations: [adresseArrive],
                    travelMode: google.maps.TravelMode.DRIVING,
                    unitSystem: google.maps.UnitSystem.metric, // kilometers and meters.
                    avoidHighways: false,
                    avoidTolls: false
                }, callback);
        }

        function callback(response, status) {
            if (status != google.maps.DistanceMatrixStatus.OK) {
                $('#result').html(err);
            } else {
                var origin = response.originAddresses[0];
                var destination = response.destinationAddresses[0];
                if (response.rows[0].elements[0].status === "ZERO_RESULTS") {
                    $('#result').html("Better get on a plane. There are no roads between "  + origin + " and " + destination);
                } else {
                    var distance = response.rows[0].elements[0].distance;
                    var duration = response.rows[0].elements[0].duration;
                    console.log(response.rows[0].elements[0].distance);
                    var distance_in_kilo = distance.value / 1000; // the kilom
                    var distance_in_mile = distance.value / 1609.34; // the mile
                    var duration_text = duration.text;
                    var duration_value = duration.value;
                    $('#in_mile').text(distance_in_mile.toFixed(2));
                    $('#in_kilo').text(distance_in_kilo.toFixed(2));
                    $('#duration_text').text(duration_text);
                    $('#duration_value').text(duration_value);
                    $('#from').text(origin);
                    $('#to').text(destination);
                }
            }
        }
    }
