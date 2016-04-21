<!Doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Survey Form</title>
    <meta name="description" content="Survey Form using CodeIgniter">
    <link rel="stylesheet" href="/assets/style.css">
  </head>
  <body>
    <div class="container">
      <h1>Survey Form</h1>
      <div class="form">
        <form method="post" action="surveys/process_form">
            Your Name:<input type="text" name="your_name">
            Dojo Location:
            <select class="place" name="place">
            <selected><option value="Dallas" name="dallas">Dallas</option></selected>
            <option value="Mountain View" name="ca">Mountain View</option>
            <option value="Seattle" name="seattle">Seattle</option>
          </select>
          Favorite Language:
          <select class="language" name="lang">
          <selected><option value="Javascript" name="javascript">Javascript</option></selected>
          <option value="PHP" name="php">PHP</option>
          <option value="Other" name="other">Other</option>
        </select>
          Comment(optional):
          <textarea cols="70" rows="10" class="comments" name="comments"></textarea>
          <input type="submit" value="Submit" name="submit" class="submit">
        </form>
      </div>
    </div>
  </body>
</html>
