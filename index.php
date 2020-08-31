
<!DOCTYPE html>
<html>
  <head>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

  </head>

  <body class="bg-dark">
    <div id="login-card" class="card">
      <div class="card-body">
        <h1>Wallpaper App Admin</h1>
        <form id="login-form" method="post">
          <div class="form-group">
            <label for="email">email</label>
            <input type="email" id="email" class="form-control" />
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" class="form-control" />
          </div>
          <div class="form-group">
            <button id="btn-login" type="submit" class="btn btn-primary">
              Login
            </button>
          </div>
        </form>
      </div>
    </div>

    <script src="js/custom.js"></script>

    <!-- <script>
      firebase.auth().onAuthStateChanged(function (user) {
        if (user) {
          window.location.href = "admin.html";
        }
      });
    </script> -->
  </body>
</html>
