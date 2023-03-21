<?php
?>


<main class="form-signin w-100 m-auto text-center">
  <link rel="stylesheet" href="styles/login.css">
  <form id="login-form">
    <img class="mb-4" src="images/logo.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating mb-3">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating mb-3">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>


    <button class="w-100 btn btn-lg btn-primary" id="submit">Sign in</button>
  </form>

  <script>
    $("#login-form").submit(function (e) {
      e.preventDefault();
      email = $("#floatingInput").val();
      password = $("#floatingPassword").val();

      console.log(email, password);

      if (email != "" && password != "") {
        login(email, password);
        console.log("succ");
      } else {
        console.log("no token");
      }
    });

    function login(email, password) {
      $.ajax({
        type: "POST",
        url: "/medicina/api/API/user/login.php",
        data: JSON.stringify({
          "email": email,
          "password": password
        }),
        success: function (result) {
          console.log(result.userID);
        },
        error: function (xhr, textStatus, errorThrown) {
          alert(errorThrown);
        }
      });
    }
  </script>
</main>