<script>
    jQuery(document).ready(function () {
        // this is the id of the form

        jQuery("#static-form").submit(function (e) {

            jQuery("#submit-static-form").html("<?php _e('Отправка ...', 'land') ?>");
            var url = "<?= get_template_directory_uri()?>/sendemail.php"; // the script where you handle the form input.

            var form = jQuery('#static-form')[0]; // You need to use standart javascript object here
            var formData = new FormData(form);

            jQuery.ajax({
                url: url,
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                type: 'POST',
                success: function (data) {
                    if (data == 1) {
                        jQuery("#submit-static-form").html("<?php _e('Успешно отправлено', 'land') ?>");

                        jQuery('#static-form')[0].reset();

                        setTimeout(func, 10000);

                        function func() {
                            jQuery("#submit-static-form").html("<?php _e('Отправить повторно', 'land') ?>");
                        }
                    }

                    else {
                        jQuery("#submit-static-form").html("<?php _e('Произошла ошибка', 'land') ?>");

                        setTimeout(func, 3000);

                        function func() {
                            jQuery("#submit-static-form").html("<?php _e('Отправить повторно', 'land') ?>");
                        }
                    }
                },

                error: function (data) {
                    jQuery("#submit-static-form").html("<?php _e('Произошла ошибка', 'land') ?>");

                    setTimeout(func, 3000);

                    function func() {
                        jQuery("#submit-static-form").html("<?php _e('Отправить повторно', 'land') ?>");
                    }
                }
            });
            e.preventDefault(); // avoid to execute the actual submit of the form.
        });

        jQuery("#static-form-2").submit(function (e) {

            jQuery("#submit-static-form-2").html("<?php _e('Отправка ...', 'land') ?>");
            var url = "<?= get_template_directory_uri()?>/sendemail.php"; // the script where you handle the form input.

            var form = jQuery('#static-form-2')[0]; // You need to use standart javascript object here
            var formData = new FormData(form);

            jQuery.ajax({
                url: url,
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                type: 'POST',
                success: function (data) {
                    if (data == 1) {
                        jQuery("#submit-static-form-2").html("<?php _e('Успешно отправлено', 'land') ?>");

                        jQuery('#static-form-2')[0].reset();

                        setTimeout(func, 10000);

                        function func() {
                            jQuery("#submit-static-form-2").html("<?php _e('Отправить повторно', 'land') ?>");
                        }
                    }

                    else {
                        jQuery("#submit-static-form-2").html("<?php _e('Произошла ошибка', 'land') ?>");

                        setTimeout(func, 3000);

                        function func() {
                            jQuery("#submit-static-form-2").html("<?php _e('Отправить повторно', 'land') ?>");
                        }
                    }
                },

                error: function (data) {
                    jQuery("#submit-static-form-2").html("<?php _e('Произошла ошибка', 'land') ?>");

                    setTimeout(func, 3000);

                    function func() {
                        jQuery("#submit-static-form-2").html("<?php _e('Отправить повторно', 'land') ?>");
                    }
                }
            });
            e.preventDefault(); // avoid to execute the actual submit of the form.
        });
    });
</script>