<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=ZCOOL+QingKe+HuangYou&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div id="login">
      <div class="container">
        <div
          id="login-row"
          class="row justify-content-center align-items-center"
        >
          <div id="login-column" class="col-md-6">
            <div id="login-box" class="col-md-12">
              <form id="login-form" class="form" action=validarUser.php method="POST">
                <h3
                  style="font-size: 70px; margin-bottom: 40px"
                  class="text-center text-info"
                >
                  LOGIN
                </h3>
                <div class="form-group">
                  <label for="username" class="text-info">Username</label><br />
                  <input
                    type="text"
                    name="username"
                    id="username"
                    class="form-control"
                  />
                </div>
                <div class="form-group">
                  <label for="password" class="text-info">Password</label><br />
                  <input
                    type="text"
                    name="password"
                    id="password"
                    class="form-control"
                  />
                </div>
                <div class="form-group">
                  <br />
                  <div class="container d-flex justify-content-center w-100">
                    <input
                      type="submit"
                      name="submit"
                      class="btn btn-info btn-mid"
                      value="Login"
                      style="padding: 0px 20px 0px 20px; font-size: 20px"
                    />
                  </div>
                  <div style="text-align: center; margin-top: 10px">
                    <a href="./register.html">Registrat aqui</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <style>
      body {
        margin: 0;
        padding: 0;
        background-color: #ffffff;
        height: 100vh;
        font-family: "ZCOOL QingKe HuangYou", cursive;
        font-size: 30px;
      }
      #login .container #login-row #login-column #login-box {
        margin-top: 22%;
        max-width: 600px;
        line-height: 50px;
        padding: 100px;
        height: 100%;
        border: 1px solid #212529;
        border-radius: 20px;
        background-color: #212529;
        color: white !important;
      }
      #login .container #login-row #login-column #login-box #login-form {
        padding: 20px;
      }
      #login
        .container
        #login-row
        #login-column
        #login-box
        #login-form
        #register-link {
        margin-top: -85px;
      }

      #register-link {
        float: right;
        position: inherit;
      }

      input#remember-me {
        margin-left: 5px;
      }

      .text-info {
        --bs-text-opacity: 1;
        color: white !important;
      }

      .btn-info {
        color: #000;
        background-color: #ffffff;
        border-color: #ffffff;
      }

      .btn-info:hover {
        color: #000;
        background-color: #c8c8c8;
        border-color: #b9b9b9;
      }
    </style>
  </body>
</html>