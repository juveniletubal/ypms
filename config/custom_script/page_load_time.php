<script>
  window.addEventListener("load", function() {
    setTimeout(() => {
      const perfData = performance.getEntriesByType("navigation")[0];
      const loadTime = perfData.loadEventEnd - perfData.loadEventStart;
      console.log("Page load time:", loadTime, "ms");

      // You can send this data to analytics
      if (loadTime > 3000) {
        console.warn("Page load time is slow:", loadTime, "ms");
      }
    }, 0);
  });
</script>