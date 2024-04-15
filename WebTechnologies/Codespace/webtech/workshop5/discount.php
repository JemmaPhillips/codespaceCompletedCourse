<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discount Offer</title>
    <style>
        /* Modal styles */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 50%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgba(0,0,0,0.4); /* Black with opacity */
        }
        
        .modal-content {
            background-color: #3C6373;
            margin: 15% auto; /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 60%; /* Adjust the width as needed */
            max-width: 400px; /* Maximum width */
        }
        
        /* Close button */
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
    </style>
</head>
<body>
    <!-- The Modal -->
    <div id="discountModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <p>Want 15% off your first purchase?</p>
            <div class="button-container">
                <button onclick="applyDiscount()">Yes</button>
                <button onclick="declineDiscount()">No</button>
            </div>
        </div>
    </div>

    <script>
        // Function to show the modal
        function showModal() {
            let modal = document.getElementById("discountModal");
            modal.style.display = "block";
        }

        // Function to close the modal
        function closeModal() {
            let modal = document.getElementById("discountModal");
            modal.style.display = "none";
        }

        // Function to apply discount
        function applyDiscount() {
            alert("Enjoy your 15% off!");
            closeModal(); // Close the modal after applying discount
        }

        // Function to decline discount
        function declineDiscount() {
            alert("No 15% off for you!");
            closeModal(); // Close the modal after declining discount
        }

        // Automatically show the modal when the page loads
        window.onload = function() {
            showModal();
        };
    </script>
</body>
</html>
