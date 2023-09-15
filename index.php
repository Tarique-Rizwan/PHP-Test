<?php include "header.php"; ?>
   <h1>Luxury Cars</h1>
    <form metod= "post" action="submit.php">
      <div>
        <label for="name">Full Name: </label>
        <input type="text" name="name" placeholder="Full Name" value="<?php echo isset($_POST["name"])?$_POST["name"]:'' ?>" required/>
      </div>

      <div>
        <label for="number">Phone Number: </label>
        <input type="text" name="number" value="<?php echo isset($_POST["number"])?$_POST["number"]:'' ?>" required/>
      </div>
      <div>
        <label for="email">Email: </label>
        <input type="email" name="email" placeholder="abc@example.com" value="<?php echo isset($_POST["email"])?$_POST["email"]:'' ?>" required/>
      </div>
      <div>
        <label for="subject">Subject: </label>
        <input type="text" name="subject" value="<?php echo isset($_POST["subject"])?$_POST["subject"]:'' ?>" required/>
      </div>
      <div>
        <label for="message">Message:</label>
        <textarea name="message" id="" cols="30" rows="10" value="<?php echo isset($_POST["message"])?$_POST["message"]:'' ?>" required></textarea>
      </div>
      <div>
          <button type="submit" value="Submit">Submit</button>
      </div>
    </form>
  </body>
</html>
