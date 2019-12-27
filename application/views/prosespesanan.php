<?php if ($tag === "keranjangkosong") : ?>
    <div class="container-fluid">
        <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
            Keranjang anda masih kosong &mdash; <span id="timer"></span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
<?php else : ?>
    <div class="container-fluid">
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            Pesanan anda telah berhasil diproses! &mdash; <span id="timer"></span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
<?php endif; ?>

<?php

header('Refresh: 6; URL= ' . base_url());

?>

<script>
    function startTimer(duration, display) {
        var timer = duration,
            minutes, seconds;
        setInterval(function() {
            seconds = parseInt(timer % 60, 10);

            seconds = seconds < 10 ? seconds : seconds;

            display.textContent = seconds;

            if (--timer < 0) {
                timer = duration;
            }
        }, 1000);
    }

    startTimer(5, document.querySelector('#timer'));
</script>