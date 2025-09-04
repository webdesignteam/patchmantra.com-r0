<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('layout/meta');  ?>
	<?php $this->load->view('layout/styles');  ?>
	<style>
	    .flex_error {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background-color: #0c6151;
        height: 100vh;
}
.mainbox {
    display: flex;
    gap: 70px;
    padding: 0px;
    margin: 0px;
}
  .err {
    color: #ffffff;
    font-size: 11rem;
  }
.far {
  position: absolute;
  font-size: 8.5rem;
  color: #ffffff;
}
.fa{
  font-size: 8.5rem;
  color: #ffffff;  
}
 .err2 {
    color: #ffffff;
    font-family: 'Nunito Sans', sans-serif;
    font-size: 11rem;
  }
.msg {
    text-align: center;
    font-family: 'Nunito Sans', sans-serif;
    font-size: 1.6rem;
  }
a {
  text-decoration: none;
  color: white;
}
a:hover {
  text-decoration: underline;
}
.msg p{
    margin-bottom: 0px;
    color: #fff;
    font-weight: 500;
}
	</style>
</head>
<body id="body" data-spy="scroll" data-target=".navbar" data-offset="50">
	<!-- Page Loading -->
	<div id="loading"></div>
	<div class="flex_error">
     <div class="mainbox">
    <div class="err">4</div>
        <i class="fa fa-question-circle fa-spin" aria-hidden="true"></i>
        <div class="err2">4</div>
      </div>
       <div class="msg"><p>Oops! this page could not be found</p>
        <p>The page you are looking for might have been removed, </p>
        <p>had its name changed, or is temporarily unavailable.</p>
        </div>
        </div>
</body>
</html>