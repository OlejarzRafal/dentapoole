<footer data-id="footer">
  <?php get_template_part('components/component', 'footer')?>
</footer>
<?php wp_footer(); ?>

<script>
function gtag_report_conversion(url) {
  var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-17086411092/Pp5HCO7Bv8waENTit9M_',
      'event_callback': callback
  });
  return false;
}
</script>

</body>

</html>