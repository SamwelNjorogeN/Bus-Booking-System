
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        $("input[type='button']").click(function () {
            var bookingStation = $("select[name='booking_station']").val();
            var destinationStation = $("select[name='destination_station']").val();

            $.ajax({
                url: "localData.php",
                type: "POST",
                data: { bookingStation: bookingStation, destinationStation: destinationStation },
                success: function (data) {
                    // Parse the JSON response and generate the table
                    var busData = JSON.parse(data);
                    var table = "<table><tr><th>Bus ID</th><th>Bus Name</th><th>Booking</th><th>Destination</th><th>Departure Time</th><th>Arrival Time</th><th>Fare</th><th>Action</th></tr>";

                    for (var i = 0; i < busData.length; i++) {
                        table += "<tr>";
                        table += "<td>" + busData[i].bus_id + "</td>";
                        table += "<td>" + busData[i].bus_name + "</td>";
                        table += "<td>" + busData[i].booking + "</td>";
                        table += "<td>" + busData[i].destination + "</td>";
                        table += "<td>" + busData[i].departure_time + "</td>";
                        table += "<td>" + busData[i].arrival_time + "</td>";
                        table += "<td>" + busData[i].fare + "</td>";
                        table += "<td><button name='action' value='" + busData[i].bus_id + "'>BOOK</button></td>";
                        table += "</tr>";
                    }

                    table += "</table>";
                    $("#bus_table").html(table);
                }
            });
        });
