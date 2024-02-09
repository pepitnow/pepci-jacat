<style>
    .section-center__full {
        height: 20vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
<section id="header">
    <div class="container-fluid ">
        <div class="row">
            <h3 class="section-center__full">Error <?= $error_code ?></h3>
        </div>
        <div class="row">
            <h1 class="text-center"><?= $error_message ?></h1>
        </div>
        <br>
        <div class="row" style="display: flex;  justify-content: center;">
        <button class="btn btn-primary hBack center" type="button" onclick="history.back(-1)"><i class="fa fa-arrow-left" aria-hidden="true"></i>  Volver atrás </button>
        </div>
    </div>

</section>