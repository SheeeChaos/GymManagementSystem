<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Quantity Modal</title>
<Style>
    .modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.4);
  }
  
  .modal-content {
    background-color: #fefefe;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 30%;
  }
  
  .close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
  }
  
  .close:hover,
  .close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
  }
  
</Style>
</head>
<body>

<button id="openModalBtn">Open Modal</button>

<div id="quantityModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2>Enter Quantity</h2>
    <form id="quantityForm" action="process.php" method="POST">
      <input type="number" name="quantity" id="quantityInput" placeholder="Enter Quantity" required>
      <button type="submit">Submit</button>
    </form>
  </div>
</div>

<script src="script.js"></script>

</body>
</html>
