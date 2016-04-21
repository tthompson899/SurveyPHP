<!Doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Survey Form</title>
    <meta name="description" content="Survey Form using CodeIgniter">
    <style>
      .result_data{
        display: block;
      }
      p{
        display: block;

      }
      .counter_area{
        width: 600px;
        height: 50px;
        border: 2px solid black;
        background-color: yellow;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="counter_area">
        Thanks for submitting this form! You have submitted this form
        <?php echo $this->session->userdata('counter'); ?> time/s now.
      </div>
      <h1>Submitted Information</h1>
      <div class="result_data">
        <?php $post_data = $this->session->userdata('post_data'); ?>
       <p>Your Name: <?php echo $post_data['your_name']; ?></p>
       <p>Location: <?php echo $post_data['place']; ?></p>
       <p>Favorite Language: <?php echo $post_data['lang']; ?></p>
       <p>Comments: <?php echo $post_data['comments']; ?></p>
       <form method="post" action="index">
       <input type="submit" value="Go Back" name="back">
     </form>
     </div>


    </div>
  </body>
</html>
