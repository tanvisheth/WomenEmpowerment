<?php
/* Template Name: Contact */ 

get_header();?>
<html lang="en">
<head>
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;

}

input[type=text]:hover{
	background-color: pink;
}

select:hover{
	background-color: #79d2a6;
}
textarea:hover{
	background-color: #b3ffff
}
input[type=submit] {
  background-color:#0480BE;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #870AE1;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>




<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>We thrive to ensure the best content reaches out to you. If you want to give us feedback,
	looking to be a part of our growth story or just say hi, email us at contact @tanvi'sngo.com.</p>
  </div>
  <div class="row">
    <div class="column">
		
      <img src="http://localhost/Project/wp-content/uploads/2021/04/contact.jpg" style="width:100%">
    </div>
    <div class="column">
      <form action="/action_page.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Enter First Name">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Enter Last Name..">
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="india">India</option>
          <option value="new york">New York</option>
          <option value="new zealand">New Zealand</option>
		  <option value="brazil">Brazil</option>
		  <option value="australia">Australia</option>
		  <option value="eggypt">Egypt</option>
		  
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <center><input type="submit" value="Submit"></center>
      </form>
    </div>
  </div>
</div>
</body>
</html>