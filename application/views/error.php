<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view('layout/meta'); ?>
  <?php $this->load->view('layout/styles'); ?>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: "Nunito Sans", sans-serif;
      background: #E1C2A3;
      color: #fff;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      overflow: hidden;
    }

    /* 404 with bounce */
    .error-title {
      font-size: 10rem;
      font-weight: 900;
      text-shadow: 0px 10px 30px rgba(0,0,0,0.4);
      animation: bounce 2s infinite;
    }

    @keyframes bounce {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-20px); }
    }

    /* Typing effect */
    .typing {
        border-right: 3px solid white;
        white-space: nowrap;
        overflow: hidden;
        font-size: 1.8rem;
        width: 0;
        animation: typing 4s steps(33, end) forwards, /* steps updated */
                   blink 0.8s infinite;
      }

     @keyframes typing {
        from { width: 0 }
        to { width: 30ch }  /* changed from 28ch → 33ch */
      }
    
      @keyframes blink {
        50% { border-color: transparent }
      }

    /* Floating shapes */
    .shape {
      position: absolute;
      border-radius: 50%;
      opacity: 0.2;
      animation: float 8s infinite ease-in-out alternate;
    }

    .shape.one { width: 100px; height: 100px; background: #fff; top: 20%; left: 15%; animation-duration: 10s; }
    .shape.two { width: 60px; height: 60px; background: #000; bottom: 15%; right: 20%; animation-duration: 6s; }
    .shape.three { width: 80px; height: 80px; background: #f1f1f1; bottom: 10%; left: 25%; animation-duration: 12s; }

    @keyframes float {
      0% { transform: translateY(0); }
      100% { transform: translateY(-50px); }
    }

    /* Button */
    .btn-home {
      margin-top: 30px;
      padding: 12px 30px;
      border: none;
      border-radius: 30px;
      background: #fff;
      color: #E1C2A3;
      font-size: 1rem;
      font-weight: bold;
      cursor: pointer;
      transition: all 0.3s ease-in-out;
      text-decoration: none;
    }

    .btn-home:hover {
      background: #f1f1f1;
      transform: translateY(-3px);
      color: #E1C2A3;
    }
  </style>
</head>
<body>
  <!-- Floating shapes -->
  <div class="shape one"></div>
  <div class="shape two"></div>
  <div class="shape three"></div>

  <!-- Error content -->
  <div class="error-title">404</div>
  <div class="typing">Oops! This page could not be found.</div>
  <a href="<?php echo base_url(); ?>" class="btn-home">Go Back Home</a>
</body>
</html>
