 <!-- =========== Scripts =========  -->
<!-- =========== Scripts =========  -->
<script src="/2_assets/js/main.js"></script>

<!-- ====== ionicons ======= -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

 <script>const statusBadge = document.querySelector('.status-badge');

// Set the status of the booking
const status = 'completed'; // Replace with actual booking status

// Add the corresponding status class to the badge element
if (status === 'completed') {
  statusBadge.classList.add('status-completed');
} else if (status === 'cancelled') {
  statusBadge.classList.add('status-cancelled');
} else if (status === 'ongoing') {
  statusBadge.classList.add('status-ongoing');
}</script>



