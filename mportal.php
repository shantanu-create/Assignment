<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Manager portal</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="form">

      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Add Event</a></li>
        <li class="tab"><a href="#login">Remove Event</a></li>
      </ul>

      <div class="tab-content">
        <div id="signup">


          <form action="validationadd.php" method="post">

          <div class="top-row">
            <div class="field-wrap">
              <label>
                 Name<span class="req">*</span>
              </label>
              <input type="text" name="name" required autocomplete="off" />
            </div>

            <div class="field-wrap">
              <label>
                Description<span class="req">*</span>
              </label>
              <input type="text" name="description" required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Venue<span class="req">*</span>
            </label>
            <input type="text" name="venue" required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label for="details"></label>
  <input type="datetime-local" id="details" name="details" required autocomplete="off"/>
           
          </div>

          <button type="submit" class="button button-block"/>Submit</button>

          </form>
      </div>

      <div id="login">
          <form action="cancel.php" method="post">

            <div class="field-wrap">
            <label>
              Name<span class="req">*</span>
            </label>
            <input type="text" name="name" required autocomplete="off"/>
          </div>
          <button class="button button-block"/>Remove</button>

          </form>

        </div>


        </div>

      </div><!-- tab-content -->

</div> <!-- /form -->
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>
