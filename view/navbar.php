<link rel="stylesheet" href="../asset/css/nav.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
(function ($) {
  // Begin jQuery
  $(function () {
    // DOM ready
    // If a link has a dropdown, add sub menu toggle.
    $("nav ul li a:not(:only-child)").click(function (e) {
      $(this).siblings(".nav-dropdown").toggle();
      // Close one dropdown when selecting another
      $(".nav-dropdown").not($(this).siblings()).hide();
      e.stopPropagation();
    });
    // Clicking away from dropdown will remove the dropdown class
    $("html").click(function () {
      $(".nav-dropdown").hide();
    });
    // Toggle open and close nav styles on click
    $("#nav-toggle").click(function () {
      $("nav ul").slideToggle();
    });
    // Hamburger to X toggle
    $("#nav-toggle").on("click", function () {
      this.classList.toggle("active");
    });
  }); // end DOM ready
})(jQuery); // end jQuery

</script>
<section class="navigation">
  <div class="nav-container">
    <div class="brand">
      <a href="#!">filmKu</a>
    </div>
    <nav>
      <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
      <ul class="nav-list">
        <li>
          <a href="../controller/process.php?action=home">Home</a>
        </li>
        <li>
          <a href="#!">rating</a>
        </li>
        <li>
          <a href="#!">year</a>
        </li>
        <li>
          <a href="#!">genre</a>
        </li>
        <li>
          <a href="#!">country</a>
        </li>
        <li>
          <a href="../controller/process.php?action=login">login</a>
        </li>
      </ul>
    </nav>
  </div>
</section>






<!-- <link rel="stylesheet" href="../asset/css/style.css">
<div class="a">

    <nav>
        <label for="" class="logo"><a></a></label>
        

        
        <ul>
            <li><button><a href="../controller/process.php?action=home">home</a></button></li>
            <li><button><a href="#">best rating</a></button></li>
            <li><button><a href="#">year</a></button></li>
            <li><button><a href="#"><a href="#">genre</a></button></li>
            <li><button><a href="">country</a></button></li>
            <li><button><a href="#"><a href="../controller/process.php?action=login">login</a></button></li>
        </ul>
    </nav>
</div> -->