<?
include 'layouts/template.php';
?>

<div class='container-fluid bg-light' style='height: 100vh; padding-top: 20%;'>

    <div class="result"></div>

    <div class='col-md-6 offset-md-3 bg-info p-5'>
        <h3 class='row text-white text-center mb-4'>Fill code to connect</h3>
        <div class='row'>
            <input type="text" name="code" class='w-100 form-control code'>
        </div>
    </div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    $(function () {
        $(document).on('blur', '.code', function (e) {
            let code = $(this).val();


            $.ajax({
                url:'pop_tr.php',
                method:'POST',
                dataType:'json',
                async: true,
                cache:false,
                data:{code:code},
                success:function (response) {
                    if(response.success === 'true'){
                        window.location = 'admin.php';
                    }

                }
            });
        })
    });
</script>