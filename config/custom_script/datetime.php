<script>
  document.addEventListener("DOMContentLoaded", function() {
    function updateDateTime() {
      document.getElementById("datetime").textContent = moment().format(
        "dddd, MMMM Do YYYY, hh:mm:ss A"
      );
    }
    setInterval(updateDateTime, 1000);
    updateDateTime();
  });
</script>