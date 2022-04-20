  <?php
    global $db;
    $pizzas = $db->query('SELECT * FROM pizzas ORDER BY id DESC LIMIT 1')->fetchAll();
    ?>

  <footer>
      <div class="container">
          <div class="row">
              <div class="col-7">
                  <h2>Réseaux sociaux</h2>
                  <ul>
                      <li><a href="https://facebook.com">Facebook</a></li>
                      <li><a href="https://instagram.com">Instagram</a></li>
                  </ul>
              </div>
              <div class="col-5">
                  <?php foreach ($pizzas as $pizza) { ?>
                    <h2>Nouveautée</h2>
                      <ul style="list-style:none; margin-left:0; padding-left:0;">
                          <li>Testez notre derniere création la <b><?= $pizza['nom']; ?></b></li>
                          <li><?= $pizza['ingredient']; ?></li>
                      </ul>
                  <?php } ?>
              </div>
          </div>
      </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>

  </html>