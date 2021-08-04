 <!-- START Footer -->
      <footer>
        <p>
          <small
            >&copy; 07-11-2021 by <a href="contact.php">Huy Xuon Lieu</a>, All
            Rights Reserved ~ <a id="html-checker" href="#">Check HTML</a> ~
            <a href="https://jigsaw.w3.org/css-validator/check?uri=referer"
              >Check CSS</a
            ></small
          >
        </p>
      </footer>
      <!-- END Footer -->
    </main>
    <!-- END WRAPPER -->

    <!-- JavaScript associated with the W3Schools.com Top Navigation Response Exercise -->
    <script>
      //https://tinyurl.com/dynamic-html-checker
      document
        .getElementById("html-checker")
        .setAttribute(
          "href",
          "https://validator.w3.org/nu/?doc=" + location.href
        );

      //manages mobile nav
      function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
          x.className += " responsive";
        } else {
          x.className = "topnav";
        }
      }
    </script>
  </body>
</html>
