<style>
*{ margin: 0; padding: 0; box-sizing: border-box;
    font-family: 'Josefin Sans', sans-serif;}
    .carousel-inner img {
        width: 100%;
        height: 40vh;
      }
      </style>           
        <section class="page-section">
        <div class="container">
            <p><h1>About Us</h1></p></br>
    <?php echo html_entity_decode($_SESSION['system']['about_content']) ?>     
        </div>
    </section>