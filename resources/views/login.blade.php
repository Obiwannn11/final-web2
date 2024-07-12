<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <!-- // -->
    <link rel="stylesheet" href="/login/style.css" />
    <link rel="stylesheet" href="/bootstrap-5.2.3-dist/css/bootstrap.min.css" />
    <title>Login</title>
  </head>
  <body>
    <div class="wrapper">
      <div class="container main">
        <div class="row">
          <div class="col-md-6 side-image">
            <!-- Image -->
            <div class="text">
              <p>Login aplikasi</p>
            </div>
          </div>
          <div class="col-md-6 right">
            <div class="input-box">
              <header>Create Account</header>
              <div class="input-field">
                <input
                  type="text"
                  class="input"
                  id="email"
                  required
                  autocomplete="off"
                />
                <label for="email">Email</label>
              </div>
              <div class="input-field">
                <input type="password" class="input" id="password" required />
                <label for="password">Password</label>
              </div>
              <div class="input-field">
                <input type="submit" class="submit" value="Sign Up" />
              </div>
              <div class="signin">
                <span>Already have account? <a href="#">Login Here</a></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
