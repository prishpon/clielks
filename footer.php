  <footer> 
  </footer>
  <script>
   function menuToggle(){
    let toggle = document.querySelector(".toggle");
    let menu = document.querySelector("ul.menu");

    if (menu.classList.contains("active")) {
                menu.classList.remove("active");
                    
            } else {
                menu.classList.add("active");

}
}
  </script>
<?php wp_footer(); ?>
</body>
</html>
