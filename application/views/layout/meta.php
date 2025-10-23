<?php if(Noindex == 'True'){ ?>
<meta name="robots" content="noindex">
<?php } else { ?>
<?php if(GoogleSite == 'True' && (!empty(GoogleSiteKey))){ ?><meta name="google-site-verification" content="<?php echo GoogleSiteKey; ?>" /><?php } ?>
    <?php if(BingSite == 'True' && (!empty(BingSiteKey))){ ?><meta name="msvalidate.01" content="<?php echo BingSiteKey; ?>" /><?php } ?>
<?php } ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
<?php if(empty($seo)){	?>
    <title>Transdermal Patches for Pain Relief and Wellness | PatchMantra</title>
    <meta name="description" content="PatchMantra offers science-backed transdermal patches for pain relief, smoking cessation, and chronic care. Gentle, effective, and pill-free healing."/>
    <meta name="keywords" content="transdermal patches, pain relief patch, nicotine patch, chronic pain patch, diclofenac patch, ketoprofen patch, rivastigmine patch, smoking cessation patch" />
    <meta name="url" content="<?php echo base_url();?>" />
    <meta name="copyright" content="patchmantra.com" />
    <link rel="canonical" href="<?php echo base_url();?>" />
<?php }else{ ?>
    <title><?php echo $seo[0]['meta_title']; ?></title>
    <meta name="description" content="<?php echo $seo[0]['meta_description']; ?>"/>
    <meta name="keywords" content="<?php echo $seo[0]['meta_keywords']; ?>" />
    <meta name="url" content="<?php echo base_url();?><?php echo $this->uri->segment(1);?>" />
    <meta name="copyright" content="patchmantra.com" />
    <link rel="canonical" href="<?php echo base_url();?><?php echo $this->uri->segment(1);?>/<?php echo $this->uri->segment(2);?>" />
<?php } ?>