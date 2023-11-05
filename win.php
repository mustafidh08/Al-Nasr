<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Discount Code Page</title>
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <style>
      body {
        font-family: "Poppins", sans-serif;
        background-color: #1da599;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        margin: 0;
      }

      .container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
      }

      p {
        text-align: center;
        color: white;
        margin-bottom: 20px;
      }

      h1 {
        color: white;
        text-align: center;
        margin-bottom: -15px;
      }

      button {
        font-family: "Poppins", sans-serif;
      }

      .main {
        margin-bottom: 5rem;
      }

      .discount-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        text-align: center;
        background-color: #ffffff;
        border-radius: 5px;
        width: 250px;
        padding: 5px 15px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }

      #code {
        font-weight: bold;
      }

      #discount-code {
        font-size: 17px;
        font-weight: bold;
        text-align: center;
        margin-left: 60px;
      }

      #copy-button {
        background-color: #fff;
        margin-left: 10px;
        display: flex;
        align-items: center;
        border: none;
        height: 35px;
        cursor: pointer;
      }

      #back {
        position: absolute;
        height: 40px;
        width: 90px;
        top: 50px;
        left: 80px;
        background-color: #fff;
        color: #333;
        padding: 5px 10px;
        border: none;
        border-radius: 50px;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <div class="main">
      <a href="game.html"><button id="back">Back</button></a>
      <div class="container">
        <h1>Congratulations! You Win</h1>
        <p>Copy the discount code to get discounts</p>
        <div class="discount-container">
          <div id="discount-code">092383H3UFH</div>
          <button id="copy-button"><img src="img/bxs_copy.png" alt="" /></button>
        </div>
      </div>
    </div>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const textToCopyElement = document.getElementById("discount-code");
        const copyButton = document.getElementById("copy-button");

        // Copy text to clipboard on button click
        copyButton.addEventListener("click", function () {
          const textToCopy = textToCopyElement.innerText;

          // Create a temporary input element
          const inputElement = document.createElement("textarea");
          inputElement.value = textToCopy;
          document.body.appendChild(inputElement);

          // Select and copy the text
          inputElement.select();
          document.execCommand("copy");

          // Remove the temporary input element
          document.body.removeChild(inputElement);

          alert("Text copied to clipboard!");
        });
      });
    </script>
  </body>
</html>
