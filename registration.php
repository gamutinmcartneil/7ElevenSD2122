<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>7 Eleven</title>
  <link rel="stylesheet" href="assets/css/index.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>

<style>

</style>

<body>

  <header>

    <div class="header-logo-group d-flex flex-row">
      <div class="header-logo"></div>
      <div class=""><img class="logo img-fluid" src="assets/img/logo.png" alt=""></div>
      <div class="header-logo"></div>
    </div>


    <!-- <nav class="navbar navbar-expand-lg">
 
  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 55px;">
    <ul class="navbar-nav">
      
    </ul>
  </div>
</nav> -->

    <nav class="navbar navbar-expand-lg">

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </button>
      <div class="collapse navbar-collapse" id="nav">
        <ul class="navbar-nav bg-light m-0 mx-lg-auto p-lg-0">
          <li class="d-inline d-lg-none">
            <button data-toggle="collapse" data-target="#nav" class="close float-right">&times;</button>
          </li>
          <li class="nav-item dropdown" style="margin-left: 20px;">
            <a id="navbar-btn-1" href="#" class="nav-link">Praesentium</a>
            </li>
            <li class="nav-item dropdown" style="margin-left: 20px;">
              <a class="nav-link" href="#">Voluptatum</a>
            </li>
            <li class="nav-item dropdown" style="margin-left: 20px;">
              <a class="nav-link" href="#"> Dignissimos </a>
            </li>
            <li class="nav-item dropdown" style="margin-left: 20px;">
              <a class="nav-link" href="#"> Blanditiis </a>
            </li>
        </ul>
      </div>
    </nav>

  </header>

  <main>
    <div class="text-content" style="text-align: center;">
      <h1>Sed ut perspiciatis unde omnis iste natus error sit voluptatem sit amet tempor</h1>
      <p style="text-align:center; font-size: 27px;">Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
    </div>
    <div>
      <div class="back">
        <h3 class="text-center">Registration Form</h3>
        <div class="div-center">

          <div class="content">
            <span class="err-msg"></span>
            <form id="reg-form" action="includes/signup.inc.php" method="post">

              <div class="form-group mt-3">
                <label for="exampleInputEmail1">Name</label>
                <input name="name" type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="form-group mt-3">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

              </div>
              <div class="form-group mt-3">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="pwd" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="form-group  mt-3">
                <span class="my-2">Birthdate</span>
                <select id="inputStateMonth" name="mm" class="form-select" aria-label="Default select" style="overflow-y: scroll;" onchange="change_month(this)">
                </select>
                <select id="inputStateDay" name="dd" class="form-select" aria-label="Default select" style="overflow-y: scroll;">
                </select>
                <select id="inputStateYear" name="yyyy" class="form-select" aria-label="Default select" style="overflow-y: scroll;" onchange="change_year(this)">
                </select>
              </div>
              <div class="form-check">

                <label class="form-check-label" for="exampleCheck1">
                  <input type="checkbox" required name="allow_access" value="agree" class="form-check-input" id="exampleCheck1">

                  Proin sit amet lectus venenatis, consectetur
                  magna vitae, convallis diam. Nullam iaculis.

                </label>
              </div>


              <div class="mt-3"><button id="submit" type="submit" name="submit" class="login btn btn-danger">Submit</button></div>


            </form>

            <div class="btm-image"><img src="assets/img/cards.png" alt="" style="width: 200px;"></div>
          </div>
          </span>
        </div>
      </div>
    </div>
  </main>


  <footer class="mt-5 text-bottom">
    <table>
      <tr>
        <th>SUSPENDISSE</th>
        <th>PORTA</th>
        <th>FEUGIAT</th>
        <th>PLACERAT </th>
      </tr>
      <tr>
        <td>Quisque</td>
        <td>Mauris</td>
        <td>Pellentesque</td>
        <td>Vitae</td>
      </tr>
      <tr>
        <td>Faucibus</td>
        <td>Suscipit</td>
        <td>Accumsan</td>
        <td>Convallis </td>
      </tr>
      <tr>
        <td> Sapien </td>
        <td>At ipsum</td>
        <td>Velit in urna</td>
        <td>Augue </td>
      </tr>
      <tr>
        <td> Hendrerit</td>
        <td>Vehicula</td>
        <td>Faucibus </td>
        <td>Aliquam</td>
      </tr>
    </table>
  </footer>

  <script src="assets/js/index.js"></script>
  <script src="assets/js/err.js"></script>

</body>

</html>