<?php if(Favicon == 'True'){ ?>
<link rel="shortcut icon" href="<?php echo base_url();?>assets/img/favicon.png?Version=<?php echo Version; ?>"
    type="image/x-icon">
<?php } else { ?>
<link rel="shortcut icon" href="https://www.heterohealthcare.com/assets/img/favicon.ico?Version=<?php echo Version; ?>"
    type="image/x-icon">
<?php } ?>
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/baguetteBox.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/js/owl-carousel/owl.carousel.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css?Version=<?php echo Version; ?>" />
<script src="https://kit.fontawesome.com/0de117c518.js" crossorigin="anonymous"></script>
<!-- <link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Red+Rose:wght@300..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet"> -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Geist:wght@100..900&display=swap" rel="stylesheet">

<?php if(Noindex == 'False'){ ?><?php if(GoogleAnalytics == 'True' && (!empty(GoogleAnalyticsKey))){ ?>

<!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo GoogleAnalyticsKey; ?>"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', '<?php echo GoogleAnalyticsKey; ?>');
</script>
<?php } ?><?php } ?>