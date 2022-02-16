function myjsfunction() {
        document.getElementById("demo").onclick = function() {myjsfunction()};

        function myjsfunction() {
          document.getElementById("demo").innerHTML = "Your request has been submitted.";
        }
}