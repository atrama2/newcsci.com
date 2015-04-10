<div class="col-lg-12" id="footer">
    (C) Footer
</div>

</div><!-- container -->
	<!-- jquery 1.11.2 -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- jqueryui 1.11.2 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <!-- Bootstrap JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <!-- custom javascript -->
    <script type="text/javascript" src="<?php echo URL; ?>public/js/custom.js"></script>
    <!-- call private javascript -->
    <?php
    if (isset($this->js)) 
    {
        foreach ($this->js as $js)
        {
            echo '<script type="text/javascript" src="'.URL.$js.'"></script>';
        }
    }
    ?>
</body>
</html>