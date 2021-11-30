function save(){
    var destination = document.getElementById('destination').value;
    var checkin = document.getElementById('checkin').value;
    var checkout = document.getElementById('checkout').value;
    var adults = document.getElementById('adults').value;
    var children = document.getElementById('children').value;

    document.getElementById("destinationin").innerHTML = destination;

    location.href = "http://localhost/roomList.php";
}