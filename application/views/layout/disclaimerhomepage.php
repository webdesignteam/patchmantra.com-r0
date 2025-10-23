<div class="banner-wrapper">
    <div id="cookie-banner" class="cookie-banner full bottom show">
        <p><b>Disclaimer:</b> The content mentioned in this website is based on the published literature and is for informational purposes only. 
            Hetero Healthcare makes every effort to present accurate and reliable information, but does not warrant, or assume any legal liability or responsibility for, 
            the accuracy or completeness of any information provided. The product prescribing information complies with drug approval for use in Indian and may not reflect 
            regulatory approvals of other countries. The patient information is not intended to substitute professional advice and services of a qualified healthcare 
            professional. Any advice regarding the management of the medical condition is totally in the discreet of the physician’s knowledge and expertise.</p>
        <a class="button" id="hide-banner">OK</a> 
    </div>
</div>

<script>
    $('#hide-banner').click(function(){
        $('#cookie-banner').removeClass('show');  
    });
    $(document).ready(function(){
        $('#cookie-banner').removeClass();
      $('#cookie-banner').addClass('cookie-banner');
      $('#cookie-banner').addClass('full');
      $('#cookie-banner').addClass('bottom');
      
      if (sessionStorage.getItem('se-pre-con') !== 'true'){ 
          setTimeout(function(){
            $('#cookie-banner').addClass('show');
          }, 100);
      }
      else { 
        $('#cookie-banner').removeClass('show'); 
      }
      
      sessionStorage.setItem('se-pre-con','true');
    });
</script>