<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
.feedback{
    width: 100%;
    max-width: 780px;
    background: #fff;
    margin: 0 auto;
    padding: 15px;
    box-shadow: 1px 1px 16px rgba(0, 0, 0, 0.3);
}
.feedback form input,
.feedback form textarea{
    width: 100%;
    border: 1px solid #ddd;
}
.center{
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
	padding-left:20px;
	padding-bottom:30px;
	padding-right:20px;
	background-color:white;
}
textarea {
  resize: none;
}
hr{
	border: .5px solid #ddd;
}
body{
	background-color:#b8b8b8;
}
.rate {
    float: left;
    height: 20%;
    padding: 0 10px;
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}
button{
	background-color:black;
	color:white;
}

</style>
<body>
<div class="center w3-display-middle">
<div id="feedback">
<h1 style="text-align:center;">Feedback Form</h1>

<p>Dear staff,<br>
We would like to know how we performed. Please spare some moments to give us your valuable feedback as it will help us in improving our service. Your cooperation will be appreciated. </p>
<hr>
<h4>Please rate your service experience in this following parameters</h4>
<br>
<form method="POST" action="rating.php">
<label>1. How was our service and courtesy shown to you?</label>
<br>
 <div class="rate">
    <input type="radio" name="rate" id="star5"  value="5" />
    <label for="star5" title="5 star"value="5">5 stars</label>
    <input type="radio"name="rate" id="star4" value="4" />
    <label for="star4" title="4 star"value="4">4 stars</label>
    <input type="radio" name="rate"id="star3" value="3" />
    <label for="star3" title="3 star"value="3">3 stars</label>
    <input type="radio" name="rate"id="star2" value="2" />
    <label for="star2" title="2 star"value="2">2 stars</label>
    <input type="radio"name="rate" id="star1" value="1" />
    <label for="star1" title="1 star"value="1">1 star</label>
  </div>
<br><br>
<hr>
<label>2. How your overall experience with us?</label>
<br>
<div class="rate">
    <input type="radio" id="star5_1" name="rate1" value="5" />
    <label for="star5_1" title="5 star"value="5">5 stars</label>
    <input type="radio" id="star4_1" name="rate1" value="4" />
    <label for="star4_1" title="4 star"value="4">4 stars</label>
    <input type="radio" id="star3_1" name="rate1" value="3" />
    <label for="star3_1" title="3 star"value="3">3 stars</label>
    <input type="radio" id="star2_1" name="rate1" value="2" />
    <label for="star2_1" title="2 star"value="2">2 stars</label>
    <input type="radio" id="star1_1" name="rate1" value="1" />
    <label for="star1_1" title="1 star"value="1">1 star</label>
  </div>
  <br><br>
<hr>
<label>3. Any suggestion for us to improvise next time?</label>
<br><br>
<textarea cols="75" name="commentText" rows="5" style="100%" title="Write your suggestion" placeholder="Suggestion"></textarea><br>
<br>
<button type="submit" class="btn btn-primary" value="submit" name="submit">Submit Feedback</button>
</form>
<a href="summary.php"><button type="cancel" class="btn btn-primary" value="cancel" name="cancel">Ignore</button></a>
</div>

</div>
</body>
</html>