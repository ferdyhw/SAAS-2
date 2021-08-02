<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?= base_url(); ?>assets/js/scripts.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="bootstrap-show-password.min.js"></script>
        <script>
        	$('.custom-file-input').on('change', function() {
        		let fileName = $(this).val().split('\\').pop();
        		$(this).next('.custom-file-label').addClass("selected").html(fileName);
        	});
        </script>
    </body>
</html>